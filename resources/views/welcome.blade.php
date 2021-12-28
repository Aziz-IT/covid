<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>F_CO</title>
    <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-app.js"></script>
    <!-- Add Firebase products that you want to use -->
    {{--<script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-auth.js"></script>--}}
    <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-storage.js"></script>
</head>

<body class="nav-md" style="-moz-transform: scale(0.9, 0.9);zoom: 0.9;zoom: 96%;">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <table class="table table-striped dt_table">
                <thead>
                <tr>
                    <th>File Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Blah Blah</td>
                    <form>
                        @csrf
                        <td>
                            <button type="button" class="btn btn-primary" id="downloadButton" onclick="download_file()">
                                Download
                            </button>
                        </td>
                    </form>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /page content -->
    </div>
</div>
<script src="{{asset('assets/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('assets/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('js/f_co.js')}}"></script>
</body>
</html>


