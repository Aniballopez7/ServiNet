<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    static $rules = [
		'name' => 'required',
        'subname' => 'required',
        'dni' => 'required',
        'phone' => 'required',
        'img_ref' => 'required',
        'users_id' => 'required',
        'verifications_id' => 'required',
    ];

    protected $fillable = ['name','subname','dni','phone','img_ref','users_id','verifications_id',];

    public function users(){
        return $this->hasMany(User::class, 'users_id', 'id');
    }
    public function verifications(){
        return $this->hasMany(Verification::class, 'verifications_id', 'id');
    }
}

