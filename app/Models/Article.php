<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false , function($query, $search){
            return $query->where('title', 'like' , '%' . $search . '%')
                        ->orWhere('abstract', 'like' , '%' . $search . '%');
        });

        $query->when($filters['article'] ?? false , function($query, $article){
            return $query->where('title', 'like' , '%' . $article . '%')
                        ->orWhere('abstract', 'like' , '%' . $article . '%');
        });

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function journal(){
        return $this->belongsTo(Journal::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
