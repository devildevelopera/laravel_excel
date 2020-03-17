<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{   
    protected $fillable = [
        'comid', 'firmenname', 'strasse', 'plz', 'ort', 'vorname', 'nachname', 'web', 'gender', 'optradio', 'titel'
    ];
}
