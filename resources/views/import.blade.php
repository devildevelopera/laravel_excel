@extends('layout')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-danger mt-2">
        {{Session::get('success')}}
    </div>
@endif
<div class="mt-5 mb-5">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <input type="file" name="file" class="form-control" id="file" style="display: none">
            <a class="btn btn-success colorWhite" id="import_button">Import</a>
            <a class="btn btn-dark" href="{{ route('export') }}">Export</a>
            <a data-toggle="modal" data-target="#deleteModal" class="btn btn-danger colorWhite" style="float: right"> Datenbank löschen</a>
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
            <th class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
        <tr>
            <td class="text-center">{{ $record->firmenname }}</td>
            <td class="text-center">{{ $record->strasse }}</td>
            <td class="text-center">{{ $record->plz }}</td>
            <td class="text-center">{{ $record->ort }}</td>
            <td class="text-center">{{ $record->anrede }}</td>
            <td class="text-center">{{ $record->titel }}</td>
            <td class="text-center">{{ $record->vorname }}</td>
            <td class="text-center">{{ $record->nachname }}</td>
            <td class="text-center">
                <form action="/deleteone/{{$record->id}}" method="POST">
                    <a class="btn btn-outline-success smallbtn" href="/edit/{{$record->id}}">Edit</a>
                    @csrf
                    <button type="submit" class="btn btn-outline-danger smallbtn">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- The Modal -->
<div class="modal fade" id="deleteModal">
    <form action="{{ route('delete') }}" id="deleteForm" method="POST">
        @csrf
        <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    All records will be deleted from the database.
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="deleteAllRecords()">Delete All</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>

                </div>
        </div>
    </form>
</div>

@endsection