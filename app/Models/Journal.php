<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false , function($query, $search){
            return $query->where('title', 'like' , '%' . $search . '%')
                        ->orWhere('abstract', 'like' , '%' . $search . '%')
                        ->orWhere('description', 'like' , '%' . $search . '%')
                        ->orWhere('issn', 'like' , '%' . $search . '%')
                        ->orWhere('eissn', 'like' , '%' . $search . '%');
        });
        $query->when($filters['article'] ?? false , function($query, $article){
            return $query->whereHas('articles', function($query) use ($article){
                        $query->where('title', 'like' , '%'. $article. '%')
                        ->orWhere('abstract', 'like' , '%' . $article . '%');
                    });
                });
                $query->when($filters['journal'] ?? false , function($query, $journal){
                    return $query->where('title', 'like' , '%' . $journal . '%')
                                ->orWhere('abstract', 'like' , '%' . $journal . '%')
                                ->orWhere('description', 'like' , '%' . $journal . '%')
                                ->orWhere('issn', 'like' , '%' . $journal . '%')
                                ->orWhere('eissn', 'like' , '%' . $journal . '%');
                });
                $query->when($filters['subject'] ?? false , function($query, $subject){
                    return $query->whereHas('subjects', function($query) use ($subject){
                        $query->where('subject_id', $subject);
                            });
                        });
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
