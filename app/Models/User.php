<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function contact()
    {
        return $this->hasOne(Contact::class, 'user_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
}
