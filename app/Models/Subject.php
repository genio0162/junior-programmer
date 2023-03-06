<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $with = ['journals'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false , function($query, $search){
            return $query->whereHas('journals', function($query) use ($search){
                $query->where('title', 'like' , '%' . $search . '%')
                ->orWhere('abstract', 'like' , '%' . $search . '%')
                ->orWhere('description', 'like' , '%' . $search . '%')
                ->orWhere('issn', 'like' , '%' . $search . '%')
                ->orWhere('eissn', 'like' , '%' . $search . '%');
                    });
                });
                $query->when($filters['subject'] ?? false , function($query, $subject){
                    return $query->whereHas('journals', function($query) use ($subject){
                        $query->where('subject_id', $subject);
                            });
                        });
    }

    public function journals()
    {
        return $this->belongsToMany(Journal::class);
    }
}
