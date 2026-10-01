<div class="max-w-4xl mx-auto mt-10">
    <div class="bg-white rounded-2xl shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-gray-100 overflow-hidden">

        <!-- Header & Progress Bar -->
        <div class="p-8 border-b border-gray-100 bg-slate-50/50">
            <div class="flex justify-between items-center mb-4">
                <span class="bg-orange-100 text-orange-600 px-4 py-1.5 rounded-full font-bold text-xs uppercase tracking-wider border border-orange-200">
                    Kuesioner {{ strtoupper($jenjang) }}
                </span>
                <span class="text-sm font-semibold text-slate-500">
                    Terjawab {{ $currentQuestionIndex }} dari {{ $total }} Soal ({{ round($progress) }}%)
                </span>
            </div>

            <!-- Progress Bar Line -->
            <div class="w-full bg-slate-200 rounded-full h-2.5">
                <div class="bg-[#10233f] h-2.5 rounded-full transition-all duration-500 ease-out" style="width: {{ $progress }}%"></div>
            </div>
        </div>

        <!-- Area Pertanyaan -->
        <div class="p-8">
            <div class="flex gap-4 mb-8">
                <div class="bg-[#10233f] text-white w-8 h-8 rounded-lg flex items-center justify-center font-bold flex-shrink-0 mt-1 shadow-sm">
                    {{ $currentQuestionIndex + 1 }}
                </div>
                <h3 class="text-2xl font-bold text-slate-800 leading-snug">
                    {{ $soal['pertanyaan'] }}
                </h3>
            </div>

            <!-- Opsi Jawaban -->
            <div class="space-y-4">
                @foreach (['A', 'B', 'C'] as $opsi)
                    <button
                        wire:click="pilihJawaban('{{ $opsi }}')"
                        class="w-full text-left p-5 border border-gray-200 rounded-xl hover:border-[#f08a0d] hover:bg-orange-50/30 transition-all duration-200 group flex items-start gap-4"
                    >
                        <!-- Fake Radio Button -->
                        <div class="w-5 h-5 rounded-full border-2 border-gray-300 group-hover:border-[#f08a0d] mt-0.5 flex-shrink-0 transition-colors"></div>

                        <div class="text-slate-700 group-hover:text-slate-900 font-medium text-lg leading-relaxed">
                            <span class="font-bold mr-1">{{ $opsi }}.</span> {{ $soal['opsi'][$opsi] }}
                        </div>
                    </button>
                @endforeach
            </div>
        </div>

    </div>
</div>
