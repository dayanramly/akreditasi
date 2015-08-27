<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
	public $timestamps=false;
	protected $guarded = array();
	protected $table='identitas';
}
