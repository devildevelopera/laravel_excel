<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\RecordsExport;
use App\Imports\RecordsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Record;
use Maatwebsite\Excel\HeadingRowImport;
  
class MyController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
        $records = Record::all();

        return view('import',compact('records'));
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new RecordsExport, 'records.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new RecordsImport,request()->file('file'));
        return back();
    }
}