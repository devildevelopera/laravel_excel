@extends('layout')

@section('content')
<form class="mt-5" action="{{ route('update') }}" id="updateForm" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="row mb-3" style="display: none">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">ID:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="id" name="id" value="{{$record['id']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Firmenname:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="firmenname" name="firmenname" value="{{$record['firmenname']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Typ:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="typ" name="typ" value="{{$record['typ']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Kundennummer:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="kundennummer" name="kundennummer" value="{{$record['kundennummer']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Branche:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="branche" name="branche" value="{{$record['branche']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Straße:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="strasse" name="strasse" value="{{$record['strasse']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">PLZ:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="plz" name="plz" value="{{$record['plz']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Ort:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="ort" name="ort" value="{{$record['ort']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Anrede:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="anrede" name="anrede" value="{{$record['anrede']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Titel:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="titel" name="titel" value="{{$record['titel']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Vorname:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="vorname" name="vorname" value="{{$record['vorname']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Nachname:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nachname" name="nachname" value="{{$record['nachname']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Position:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="position" name="position" value="{{$record['position']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Abteilung:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="abteilung" name="abteilung" value="{{$record['abteilung']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Geburtsdatum:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="geburtsdatum" name="geburtsdatum" value="{{$record['geburtsdatum']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Betreuer:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="betreuer" name="betreuer" value="{{$record['betreuer']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Telefon:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="telefon" name="telefon" value="{{$record['telefon']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Telefax:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="telefax" name="telefax" value="{{$record['telefax']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Mobil:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="mobil" name="mobil" value="{{$record['mobil']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">E-Mail:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="email" name="email" value="{{$record['email']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Web:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="web" name="web" value="{{$record['web']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Urlkurzel:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="urlkurzel" name="urlkurzel" value="{{$record['urlkurzel']}}">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 1:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_1" name="freifeld_1" value="{{$record['freifeld_1']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 2:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_2" name="freifeld_2" value="{{$record['freifeld_2']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 3:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_3" name="freifeld_3" value="{{$record['freifeld_3']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 4:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_4" name="freifeld_4" value="{{$record['freifeld_4']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 5:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_5" name="freifeld_5" value="{{$record['freifeld_5']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 6:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_6" name="freifeld_6" value="{{$record['freifeld_6']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 7:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_7" name="freifeld_7" value="{{$record['freifeld_7']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 8:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_8" name="freifeld_8" value="{{$record['freifeld_8']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 9:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_9" name="freifeld_9" value="{{$record['freifeld_9']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 10:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_10" name="freifeld_10" value="{{$record['freifeld_10']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 11:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_11" name="freifeld_11" value="{{$record['freifeld_11']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 12:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_12" name="freifeld_12" value="{{$record['freifeld_12']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 13:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_13" name="freifeld_13" value="{{$record['freifeld_13']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 14:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_14" name="freifeld_14" value="{{$record['freifeld_14']}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 text-center" style="align-items: center">
                    <label for="usr" class="mt-dot5rem">Freifeld 15:</label>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="freifeld_15" name="freifeld_15" value="{{$record['freifeld_15']}}">
                </div>
            </div>
            <div class="row mb-3 mt-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-7 text-center" style="align-items: center">
                    <button type="submit" class="btn btn-success">speichern</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection