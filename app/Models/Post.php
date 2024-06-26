<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['tag_id', 'title', 'description'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
