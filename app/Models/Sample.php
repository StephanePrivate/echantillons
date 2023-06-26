<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    public function airline_contacts()
    {
        return $this->belongsTo(AirlineContact::class);
    }

    public function design_companies()
    {
        return $this->belongsTo(DesignCompany::class);
    }

    public function designer_contacts()
    {
        return $this->belongsTo(designers::class);
    }

    public function executives()
    {
        return $this->belongsTo(Executive::class);
    }

    public function status(): HasOne
    {
        return $this->hasOne(Status::class);
    }

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public function textures()
    {
        return $this->belongsTo(Texture::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function mills()
    {
        return $this->belongsTo(Mill::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function airlinecontacts()
    {
        return $this->belongsTo(Customer::class, 'contact_at_airline_id');
    }

    public function airlineEmployees()
    {
        return $this->hasManyThrough(
            Customer::class,
            Airline::class,
            'id',
            'airline_id',
            'airlines_id',
            'id',

        );
    }
    public function designEmployees()
    {
        return $this->hasManyThrough(
            Customer::class,
            DesignCompany::class,
            'id',
            'design_company_id',
            'design_companies_id',
            'id'
        )
            ->where('designer','1');
    }

}
