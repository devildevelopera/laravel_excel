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
        return new Record([
            'firmenname'     => $row['firmenname'],
            'strasse'    => $row['strasse'],
            'plz'    => $row['plz'],
            'ort'    => $row['ort'],
            'vorname'    => $row['vorname'],
            'nachname'    => $row['nachname'],
            'web'    => $row['web'],
            'gender'    => $row['anrede'],
            'optradio'    => $row['freifeld_1'],
            'titel'    => $row['titel'],
        ]);
    }

    // public function startRow(): int
    // {
    //     return 2;
    // }
}