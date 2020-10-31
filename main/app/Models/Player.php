<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'position',
    ];

    public function path()
    {

        return "/players/" . $this->id;
    }

    public function getPathAttribute()
    {
        return $this->path();
    }

    /**
     public function image_url ($size = 150) {
        return fake_image_url ($this -> id, $size);
    }

     * public function formatted_notes () {
     *
     * return paragraphs_as_html ($this -> notes, 4);
     * }
     */
}

