<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Authenticator extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'email',
        'secret_key',
        'current_otp',
        'user_id',
    ];
}
