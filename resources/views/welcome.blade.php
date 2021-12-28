<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>F_CO</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
<script src="{{asset('https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/f_co.js')}}"></script>
</body>
</html>


