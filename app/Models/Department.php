<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "ministry_id",
        "committee_id",
        "description",
        "preview",
        "thumbnail"
    ];

    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }

}
