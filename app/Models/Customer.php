<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    static $rules = [
		'name' => 'required',
        'subname' => 'required',
        'cedula' => 'required',
        'edad' => 'required',
        'users_id' => 'required',
    ];

    protected $fillable = ['name','subname','cedula','edad','users_id'];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    //falta desarrollar para la tabla pivote
}
