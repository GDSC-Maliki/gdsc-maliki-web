<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EventManagement extends Model
{
	protected $dates = [
		'created_at',
		'updated_at',
	];

	protected $fillable = [
		'email',
		'nama',
		'instansi',
		'pernahbelum',
		'bersedia',
		'kendala',
		'harapan',
		'nowa',
		'created_at',
		'updated_at',
	];
}
