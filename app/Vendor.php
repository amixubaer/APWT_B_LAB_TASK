<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $primaryKey = 'vendor_id';
    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_updated';
}
