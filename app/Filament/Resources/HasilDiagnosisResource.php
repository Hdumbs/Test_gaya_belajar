<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HasilDiagnosisResource\Pages;
use App\Models\HasilDiagnosis;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Grid;

class HasilDiagnosisResource extends Resource
{
    protected static ?string $model = HasilDiagnosis::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Riwayat Diagnosis';
    protected static ?string $pluralModelLabel = 'Riwayat Diagnosis Siswa';

    public static function form(Form $form): Form
    {
        // Form dibiarkan kosong karena data diisi otomatis oleh sistem kuis & API
        return $form->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                
                Tables\Columns\TextColumn::make('sekolah')
                    ->searchable()
                    ->description(fn (HasilDiagnosis $record): string => $record->kelas . ' - ' . $record->jurusan),

                Tables\Columns\TextColumn::make('gaya_dominan')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Visual' => 'info',
                        'Auditori' => 'warning',
                        'Kinestetik' => 'success',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('skor_visual')->label('Vis (%)')->numeric()->alignCenter(),
                Tables\Columns\TextColumn::make('skor_auditori')->label('Aud (%)')->numeric()->alignCenter(),
                Tables\Columns\TextColumn::make('skor_kinestetik')->label('Kin (%)')->numeric()->alignCenter(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Tes')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Hanya tombol View dan Delete, tidak ada Edit karena ini riwayat statis
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                // BAGIAN 1: IDENTITAS
                Section::make('Profil & Identitas Siswa')
                    ->schema([
                        TextEntry::make('nama')->weight('bold'),
                        TextEntry::make('nisn')->label('NISN'),
                        TextEntry::make('sekolah'),
                        TextEntry::make('kelas'),
                        TextEntry::make('jurusan'),
                        TextEntry::make('gaya_dominan')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'Visual' => 'info',
                                'Auditori' => 'warning',
                                'Kinestetik' => 'success',
                                default => 'gray',
                            }),
                    ])->columns(3),

                // BAGIAN 2: SKOR VAK
                Section::make('Hasil Persentase VAK')
                    ->schema([
                        TextEntry::make('skor_visual')->label('Visual (%)')->size('text-xl')->color('info'),
                        TextEntry::make('skor_auditori')->label('Auditori (%)')->size('text-xl')->color('warning'),
                        TextEntry::make('skor_kinestetik')->label('Kinestetik (%)')->size('text-xl')->color('success'),
                    ])->columns(3),

                // BAGIAN 3: ANALISIS AI
                Section::make('Laporan Analisis Pedagogis Berbasis AI')
                    ->schema([
                        TextEntry::make('ai_response.analisis')
                            ->label('Analisis Karakteristik')
                            ->columnSpanFull()
                            ->prose(), // Membuat teks panjang lebih nyaman dibaca

                        TextEntry::make('ai_response.strategi_mandiri')
                            ->label('Strategi Mandiri')
                            ->bulleted(), // Mengubah array JSON otomatis menjadi bullet list!

                        TextEntry::make('ai_response.lingkungan_sekolah')
                            ->label('Lingkungan Sekolah')
                            ->bulleted(),

                        TextEntry::make('ai_response.media_digital')
                            ->label('Media Digital')
                            ->bulleted(),

                        TextEntry::make('ai_response.panduan_guru')
                            ->label('Panduan Khusus Guru')
                            ->columnSpanFull()
                            ->prose()
                            ->color('primary'),
                    ])->columns(2),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHasilDiagnoses::route('/'),
            'view' => Pages\ViewHasilDiagnosis::route('/{record}'),
        ];
    }
}