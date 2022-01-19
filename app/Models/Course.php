<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function functional_class()
    {
        return $this->belongsTo(Functional_class::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
