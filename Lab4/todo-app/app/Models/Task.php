<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'due_date'
    ];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }
}