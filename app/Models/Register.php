<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Register extends Model implements Authenticatable
{

    use \Illuminate\Auth\Authenticatable;
    use HasFactory;

    protected $table='registers';

    protected $fillable=['name', 'email', 'phone', 'password'];
}
