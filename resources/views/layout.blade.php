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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
        .colorWhite {
            color: #fff !important;
        }
        .smallbtn {
            min-width: 70px !important;
        }
        .input-group.mb-3 {
            max-width: 500px;
            margin: auto;
        }
        .mt-dot5rem {
            margin-top: 0.5rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card-header">
        <a class="btn btn-dark"  href="{{ route('home') }}" >Adressen</a>
        <a class="btn btn-outline-info" style="float: right" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a data-toggle="modal" data-target="#changePasswordModal" class="btn btn-warning colorWhite" style="float: right; margin-right: 10px"> Change Password</a>
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

    function deleteAllRecords()
     {
         $("#deleteForm").submit();
     }
    function changePassword()
    {
        $("#changePasswordForm").submit();
    }

    $("document").ready(function(){
        setTimeout(function(){
        $("div.alert").remove();
        }, 3000 );
    });
</script>
</body>
</html>