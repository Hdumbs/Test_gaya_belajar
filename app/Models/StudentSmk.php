<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentSmk extends Model
{
    protected $connection = 'mysql_smk';
    protected $table = 'students';
    protected $guarded = [];
}
