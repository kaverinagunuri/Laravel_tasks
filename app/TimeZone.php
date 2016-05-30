<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeZone extends Model
{
     protected $table="Timezone";
        protected $primaryKey = "Id";
     protected $fillable = ['Name','Offset','Time'];
   
}
