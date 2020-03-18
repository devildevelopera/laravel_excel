<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{   
    protected $fillable = [
        'id',
        'firmenname',
        'strasse',
        'plz',
        'ort',
        'vorname',
        'nachname',
        'web',
        'anrede',
        'freifeld_1',
        'titel',
        'typ',
        'kundennummer',
        'branche',
        'position',
        'abteilung',
        'geburtsdatum',
        'betreuer',
        'telefon',
        'telefax',
        'mobil',
        'email',
        'urlkurzel',
        'freifeld_2',
        'freifeld_3',
        'freifeld_4',
        'freifeld_5',
        'freifeld_6',
        'freifeld_7',
        'freifeld_8',
        'freifeld_9',
        'freifeld_10',
        'freifeld_11',
        'freifeld_12',
        'freifeld_13',
        'freifeld_14',
        'freifeld_15',
    ];
}
