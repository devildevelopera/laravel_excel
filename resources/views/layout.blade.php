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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
        #deleteOneForm a:hover {
            color: #007bff;
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
    <div class="modal fade" id="changePasswordModal">
        <form action="{{ route('changePassword') }}" id="changePasswordForm" method="POST">
            @csrf
            <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Change Password</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div style="justify-content: center; display: flex;">
                        <div style="width: 90%;">
                            <div class="form-group">
                                <label for="pwd">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{{Auth::user()->email}}}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">New Password:</label>
                                <input type="password" class="form-control" id="newpassword" name="newpassword">
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="changePassword()">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>

                    </div>
            </div>
        </form>
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
    function deleteOneRecord()
     {
         $("#deleteOneForm").submit();
     }
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