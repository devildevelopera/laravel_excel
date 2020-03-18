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
            'freifeld 1',
            'Titel',
            'Art',
            'Kundennummer',
            'Branche',
            'Position',
            'Abteilung',
            'Geburtsdatum',
            'Betreuer',
            'Telefon',
            'Telefax',
            'Mobil',
            'Email',
            'URL-Zusatz',
            'freifeld 2',
            'freifeld 3',
            'freifeld 4',
            'freifeld 5',
            'freifeld 6',
            'freifeld 7',
            'freifeld 8',
            'freifeld 9',
            'freifeld 10',
            'freifeld 11',
            'freifeld 12',
            'freifeld 13',
            'freifeld 14',
            'freifeld 15',
            'Created_at',
            'Updated_at'
        ];
    }
}