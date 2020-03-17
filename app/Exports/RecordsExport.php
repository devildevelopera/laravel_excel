<?php
  
namespace App\Exports;
  
use App\Record;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class RecordsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Record::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Firmenname',
            'Strasse',
            'Plz',
            'Ort',
            'Vorname',
            'Nachname',
            'Web',
            'Anrede',
            'Freifeld 1',
            'Titel',
            'Created_at',
            'Updated_at'
        ];
    }
}