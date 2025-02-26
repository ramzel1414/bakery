<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Bread extends Model
{
    use HasFactory;

        protected $fillable = ['baker_id' ,'name', 'image', 'description'];

    public function baker()
    {
        return $this->belongsTo(User::class, 'baker_id');
    }
}
