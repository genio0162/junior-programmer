<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function publishers(){
        return $this->hasMany(Publisher::class);
    }

    public function journals(){
        return $this->hasMany(Journal::class);
    }

    public function regencies(){
        return $this->hasMany(Regency::class);
    }
}
