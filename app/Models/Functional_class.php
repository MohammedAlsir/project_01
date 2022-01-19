<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functional_class extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function recipient()
    {
        return $this->hasMany(Recipient::class);
    }
}