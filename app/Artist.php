<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable =[
        'first_name', 'last_name', 'career_name', 'image'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
