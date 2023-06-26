<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function samples()
    {
        return $this->belongsTo(Sample::class);
    }

    public function mills()
    {
        return $this->belongsTo(Mill::class);
    }

    public function textures()
    {
        return $this->hasMany(Texture::class);
    }

}
