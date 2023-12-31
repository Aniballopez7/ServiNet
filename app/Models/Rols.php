<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rols extends Model
{
    use HasFactory;

    static $rules = [
		'name' => 'required',
    ];

    protected $fillable = ['name'];

}
