<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $guarded = ['id']; // Users can access all other rows but not this one!
    protected $fillable = ['title', 'excerpt', 'body']; // User can access these rows

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
