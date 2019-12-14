<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];

    public function user() {
        return $this->belongsTo(user::class);
    }

    public function setTitleAtrribute($value)
    {
        $this->attribute['title'] = $value;
        $this->attribute['slug'] = Str::slug($value);
    }
}
