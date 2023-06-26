<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function samples()
    {
        return $this->hasMany(Sample::class);
    }

    public function companies()
    {
        return $this->belongsTo(DesignCompany::class);
    }

}
