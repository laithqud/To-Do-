<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table='categories';

    protected $fillable=['name'];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'category_id');
    }
}
