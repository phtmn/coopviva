<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilInvestidor extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'document',
        'phone_number',
        'address',
        'city',
        'state',
        'postal_code',
        'type_company',
        'business_group',
        'mlc_incentive',
        'cargo',
        'operation'
    ];//
}
