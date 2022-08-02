<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    public $fillable = ['title', 'body', 'img', 'slug'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    public function State() {
        return $this->hasOne(State::class);
    }

    public function getBodyWithLimit(){
        return Str::limit($this->body, 100);
    }

    public function createdAtForHumans(){
        return $this->created_at->diffForHumans();
//        return $this->published_at->diffForHumans();
    }

    public function scopeLastLimit($query, $quantity) {
        return $query->with('state', 'tags')->orderBy('created_at','desc')->limit($quantity)->get();
    }

    public function scopeGetByPagination($query, $quantity) {
        return $query->with('state', 'tags')->orderBy('created_at','desc')->paginate($quantity);
    }

    public function scopeGetBySlug($query, $slug) {
        return $query->with('comments', 'tags', 'state')->where('slug', $slug)->firstOrFail();
    }
}
