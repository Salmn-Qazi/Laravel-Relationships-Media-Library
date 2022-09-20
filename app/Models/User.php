<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class User extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
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
