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
        'view_count',
        'like_count',
        'dislike_count',
        'user_id',
        'category_id',
        'course_id',
        'university_id',
    ];

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
