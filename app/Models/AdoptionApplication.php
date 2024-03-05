<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionApplication extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'adoption_id','fullname', 'tel', 'address', 'exp'];

    public function adoption()
    {
        return $this->belongsTo(Adoption::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
