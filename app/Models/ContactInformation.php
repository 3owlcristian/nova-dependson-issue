<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'phone', 'fax', 'address_1', 'address_2', 'city', 'state', 'zip', 'county_id'];

    /**
     * Get the Attorney's County.
     */
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }
}