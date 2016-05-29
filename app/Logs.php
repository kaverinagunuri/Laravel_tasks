<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model {

    protected $table = "LogDetails";
    protected $primaryKey = "Id";
    protected $fillable = ['UserAgent', 'IpAddress', 'BrowserName', 'Email', 'Version', 'LoginTime', 'Platform'];

}
