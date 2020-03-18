<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RecordsExport;
use App\Imports\RecordsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Record;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\HeadingRowImport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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

    public function delete() 
    {   
        Record::truncate();
        return back();
    }

    public function deleteone($id)
    {   
        Record::find($id)->delete();
        return back()->withSuccess('Successfully Deleted!');
    }

    public function edit($id)
    {   
        $record = Record::find($id);
        return view('edit', compact('record'));
    }

    public function update(Request $request)
    {   
        $id = $request->input('id');
        $record = Record::find($id);
        $record->firmenname = $request->input('firmenname');
        $record->strasse = $request->input('strasse');
        $record->plz = $request->input('plz');
        $record->ort = $request->input('ort');
        $record->anrede = $request->input('anrede');
        $record->titel = $request->input('titel');
        $record->vorname = $request->input('vorname');
        $record->nachname = $request->input('nachname');
        $record->web = $request->input('web');
        $record->typ = $request->input('typ');
        $record->kundennummer = $request->input('kundennummer');
        $record->branche = $request->input('branche');
        $record->position = $request->input('position');
        $record->abteilung = $request->input('abteilung');
        $record->geburtsdatum = $request->input('geburtsdatum');
        $record->betreuer = $request->input('betreuer');
        $record->telefon = $request->input('telefon');
        $record->telefax = $request->input('telefax');
        $record->mobil = $request->input('mobil');
        $record->email = $request->input('email');
        $record->urlkurzel = $request->input('urlkurzel');
        $record->freifeld_1 = $request->input('freifeld_1');
        $record->freifeld_2 = $request->input('freifeld_2');
        $record->freifeld_3 = $request->input('freifeld_3');
        $record->freifeld_4 = $request->input('freifeld_4');
        $record->freifeld_5 = $request->input('freifeld_5');
        $record->freifeld_6 = $request->input('freifeld_6');
        $record->freifeld_7 = $request->input('freifeld_7');
        $record->freifeld_8 = $request->input('freifeld_8');
        $record->freifeld_9 = $request->input('freifeld_9');
        $record->freifeld_10 = $request->input('freifeld_10');
        $record->freifeld_11 = $request->input('freifeld_11');
        $record->freifeld_12 = $request->input('freifeld_12');
        $record->freifeld_13 = $request->input('freifeld_13');
        $record->freifeld_14 = $request->input('freifeld_14');
        $record->freifeld_15 = $request->input('freifeld_15');
        $record->save();
        return back()->withSuccess('Successfully Updated!');
    }
    public function changePassword(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();
        return back()->withSuccess('Successfully Changed!');
    }
}
