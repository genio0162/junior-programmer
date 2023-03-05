<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function journals(){
        return $this->hasMany(Journal::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
