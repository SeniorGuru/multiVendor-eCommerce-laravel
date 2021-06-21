<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    //
    protected $fillable = ['country','state','city', 'zip', 'rate'];

    public function taxClass() {
        return $this->hasMany(TaxClass::class, 'tax_class_id');
    }
}
