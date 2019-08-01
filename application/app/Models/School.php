<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //

    public function campuses()
    {
        # code...
        return $this->hasMany(Campus::class);
    }

    public function students()
    {
        # code...
        return $this->hasMany(Student::class);
    }

    
}
