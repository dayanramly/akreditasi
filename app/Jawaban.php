<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    public $timestamps=false;
    protected $guarded = array();
    protected $table='jawaban';
}
