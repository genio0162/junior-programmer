<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
