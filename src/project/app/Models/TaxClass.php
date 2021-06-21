<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxClass extends Model
{
    //
    protected $fillable = ['name','based_on'];

    public function taxRate() {
        return $this->belongsTo(TaxRate::class, 'tax_class_id');
    }

}
