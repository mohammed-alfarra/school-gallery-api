<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
