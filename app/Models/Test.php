<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    static $rules = [
		'description' => 'required',
        'ref_url' => 'required',
    ];

    protected $fillable = ['description', 'ref_url'];
}
