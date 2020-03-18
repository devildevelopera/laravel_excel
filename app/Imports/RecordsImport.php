<?php
  
namespace App\Imports;
  
use App\Record;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
  
class RecordsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        if(!$row['firmenname']){
            return;
        }
        return new Record([
            'firmenname'     => $row['firmenname'],
            'strasse'    => $row['strasse'],
            'plz'    => $row['plz'],
            'ort'    => $row['ort'],
            'vorname'    => $row['vorname'],
            'nachname'    => $row['nachname'],
            'web'    => $row['web'],
            'anrede'    => $row['anrede'],
            'freifeld_1'    => $row['freifeld_1'],
            'titel'    => $row['titel'],
            'typ'    => $row['art'],
            'kundennummer'    => $row['kundennummer'],
            'branche'    => $row['branche'],
            'position'    => $row['position'],
            'abteilung'    => $row['abteilung'],
            'geburtsdatum'    => $row['geburtsdatum'],
            'betreuer'    => $row['betreuer'],
            'telefon'    => $row['telefon'],
            'telefax'    => $row['telefax'],
            'mobil'    => $row['mobil'],
            'email'    => $row['email'],
            'urlkurzel'    => $row['url_zusatz'],
            'freifeld_2'    => $row['freifeld_2'],
            'freifeld_3'    => $row['freifeld_3'],
            'freifeld_4'    => $row['freifeld_4'],
            'freifeld_5'    => $row['freifeld_5'],
            'freifeld_6'    => $row['freifeld_6'],
            'freifeld_7'    => $row['freifeld_7'],
            'freifeld_8'    => $row['freifeld_8'],
            'freifeld_9'    => $row['freifeld_9'],
            'freifeld_10'    => $row['freifeld_10'],
            'freifeld_11'    => $row['freifeld_11'],
            'freifeld_12'    => $row['freifeld_12'],
            'freifeld_13'    => $row['freifeld_13'],
            'freifeld_14'    => $row['freifeld_14'],
            'freifeld_15'    => $row['freifeld_15']
        ]);
    }

    // public function startRow(): int
    // {
    //     return 2;
    // }
}