<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class polymorphisam extends Model
{
   public function Likable()
  {
    return $this->morphTo();
  }
}
