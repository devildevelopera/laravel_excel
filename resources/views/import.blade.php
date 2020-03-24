@extends('layout')

@section('content')
@if(Session::has('success'))
    <div class="alert alert-success mt-2">
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
            <th>Firmenname</th>
            <th>Straße</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Anrede</th>
            <th>Titel</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Web</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
        <tr>
            <td>{{ $record->firmenname }}</td>
            <td>{{ $record->strasse }}</td>
            <td>{{ $record->plz }}</td>
            <td>{{ $record->ort }}</td>
            <td>{{ $record->anrede }}</td>
            <td>{{ $record->titel }}</td>
            <td>{{ $record->vorname }}</td>
            <td>{{ $record->nachname }}</td>
            <td>{{ $record->web }}</td>
            <td>
                <form action="/deleteone/{{$record->id}}" id="deleteOneForm" method="POST">
                    <a href="/edit/{{$record->id}}"><i class="fas fa-edit"></i></a>
                    @csrf
                    <a onclick="deleteOneRecord()"><i class="fas fa-trash"></i></a>
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