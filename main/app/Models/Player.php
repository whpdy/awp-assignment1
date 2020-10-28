<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function getPathAttribute () {
        return $this -> path ();
    }
    public function path () {
        return '/players/' . $this -> id;
    }
}
