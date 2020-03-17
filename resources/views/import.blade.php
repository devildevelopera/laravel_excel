@extends('layout')

@section('content')
<div class="mt-5 mb-5">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <input type="file" name="file" class="form-control" id="file" style="display: none">
            <a class="btn btn-success" id="import_button">Import</a>
            <a class="btn btn-dark" href="{{ route('export') }}">Export</a>
            <a class="btn btn-danger" href="" style="float: right">Datenbank löschen</a>
        </form>
</div>

<table class="table table-striped" id="table">
    <thead>
        <tr>
            <th class="text-center">Firmenname</th>
            <th class="text-center">Straße</th>
            <th class="text-center">PLZ</th>
            <th class="text-center">Ort</th>
            <th class="text-center">Anrede</th>
            <th class="text-center">Titel</th>
            <th class="text-center">Vorname</th>
            <th class="text-center">Nachname</th>
            <th class="text-center">Web</th>
            <th class="text-center">Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
        <tr>
            <td class="text-center">{{ $record->firmenname }}</td>
            <td class="text-center">{{ $record->strasse }}</td>
            <td class="text-center">{{ $record->plz }}</td>
            <td class="text-center">{{ $record->ort }}</td>
            <td class="text-center">{{ $record->gender }}</td>
            <td class="text-center">{{ $record->titel }}</td>
            <td class="text-center">{{ $record->vorname }}</td>
            <td class="text-center">{{ $record->nachname }}</td>
            <td class="text-center">{{ $record->web }}</td>
            <td class="text-center">{{ $record->optradio }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
   
@endsection