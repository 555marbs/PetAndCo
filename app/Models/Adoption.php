<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adoption extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'content', 'contact', 'image', 'user_id'];

    public function applications()
    {
        return $this->hasMany(AdoptionApplication::class);
    }

    
}
