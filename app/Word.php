<?php

namespace JapaneseWords;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
