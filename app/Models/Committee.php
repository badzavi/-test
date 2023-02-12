<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "ministry_id",
        "description",
        "preview",
        "thumbnail"
    ];

    public function ministry()
    {
        return $this->belongsTo(Ministry::class);
    }

    public function department()
    {
        return $this->hasMany(Department::class);
    }
}
