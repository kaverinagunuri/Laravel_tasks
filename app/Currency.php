<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table="Currency";
        protected $primaryKey = "Id";
     protected $fillable = ['CurrencyName','CurrencyCode','CurrencyNumber','DigitAfterDecimal','CreatedAt','IsActive'];
     public $timestamps=false;
}
