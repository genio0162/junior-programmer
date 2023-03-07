<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $load = ['journals', 'articles', 'users'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false , function($query, $search){
            return $query->where('name', 'like' , '%' . $search . '%')
                        ->orWhere('alias', 'like' , '%' . $search . '%')
                        ->orWhere('city', 'like' , '%' . $search . '%')
                        ->orWhere('province', 'like' , '%' . $search . '%');
        });

        // $query->when($filters['article'] ?? false , function($query, $article){
        //     return $query->where('title', 'like' , '%' . $article . '%')
        //                 ->orWhere('abstract', 'like' , '%' . $article . '%');
        // });

    }

    public function journals(){
        return $this->hasMany(Journal::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function regency(){
        return $this->belongsTo(Regency::class);
    }
}
