<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaxLession extends Model
{
    use HasFactory,SoftDeletes;

    public function currency()
    {
        return $this->belongsTo('App\Models\Currency','currencyId','id');
    }

    public function sax_series()
    {
        return $this->belongsTo('App\Models\SaxSeries','saxSeriesId','id');
    }
}
