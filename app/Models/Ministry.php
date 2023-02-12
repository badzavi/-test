<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "preview",
        "thumbnail"
    ];

    public function committee()
    {
        return $this->hasMany(Committee::class); //$this->hasMany(Committee::class);
    }
}
