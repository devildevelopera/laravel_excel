<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        .container {
            max-width: 1500px;
            padding: 30px 20px;
        }
        .btn {
            min-width: 150px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card-header">
        <button class="btn btn-dark">Adressen</button>
        <button class="btn btn-default" style="float: right">Logout</button>
    </div>
    @yield('content')
</div>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
    $('#import_button').click(function(){
        $('#file').trigger('click');
    })
    $('#file').change(function(){
        $('#form').submit();
    })
</script>
</body>
</html>