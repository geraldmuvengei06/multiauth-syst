<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //

    public function departments()
    {
        # code...
        return $this->hasMany(Department::class);
    }

    public function students()
    {
        # code...
        return $this->hasMany(Student::class);
    }

    public function school()
    {
        # code...
        return $this->belongsTo(School::class);
    }
}
