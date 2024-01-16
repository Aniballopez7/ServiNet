<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;

    static $rules = [
		'name' => 'required',
        'tests_id' => 'required',  
    ];

    protected $fillable = ['name', 'tests_id'];

    public function tests(){
        return $this->belongsTo(Test::class, 'tests_id', 'id');
    }
}
