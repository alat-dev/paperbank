<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'subject',
        'pdf_file',
        'view_count' => 0,
        'like_count' => 0,
        'dislike_count' => 0,
        'user_id',
        'category_id',
        'course_id',
        'university_id',
        'description',
    ];
    public function scopeFilter($query, array $filters){
        $query->when($filters['search']??false,function($query,$search){
            return $query->where('title','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%');
        });

        $query->when($filters['category_id']??false,function($query,$category){
            return $query->where('category_id',$category);
            }
        );

        $query->when($filters['course_id']??false,function($query,$course){
            return $query->where('course_id',$course);
        });

        $query->when($filters['university_id']??false,function($query,$university){
            return $query->where('university_id',$university);
        });
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function university(){
        return $this->belongsTo(University::class);
    }
}
