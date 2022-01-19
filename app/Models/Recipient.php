<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Laravel\Passport\HasApiTokens;


class Recipient extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory;
    use AuthenticableTrait;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'photo'

    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function functionalClass()
    {
        return $this->belongsTo(Functional_class::class, 'functional_classe_id');
    }

    // public function username()
    // {
    //     return 'phone';
    // }
}