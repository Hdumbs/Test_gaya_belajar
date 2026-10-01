<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSmp extends Model
{
    protected $connection = 'mysql_smp';
    protected $table = 'students';
    protected $guarded = [];
}
