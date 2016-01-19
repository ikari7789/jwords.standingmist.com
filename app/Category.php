<?php

namespace JapaneseWords;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function words()
    {
        return $this->belongsToMany(Word::class);
    }
}
