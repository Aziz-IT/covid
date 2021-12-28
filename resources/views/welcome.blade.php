<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>F_CO</title>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        const firebaseConfig = {
            apiKey: "AIzaSyAnRnx7c6CD7-rA_erIJXScSLoGYDXHhZk",
            authDomain: "f-co-507ef.firebaseapp.com",
            projectId: "f-co-507ef",
            storageBucket: "f-co-507ef.appspot.com",
            messagingSenderId: "219491375371",
            appId: "1:219491375371:web:b6c4c0257daa7beff9aa0e",
            measurementId: "G-KNB6VV9DTQ"
        };
        firebase.initializeApp(firebaseConfig);
    })

    function download_file() {
        console.log('From download file function')
        let storage = firebase.storage();
        let gsReference = storage.refFromURL('gs://f-co-507ef.appspot.com/DB Request.pdf');
        gsReference.getDownloadURL()
            .then((url) => {
                $.ajax({
                    method: 'GET',
                    url: '/download',
                    data: {
                        url: url
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        console.log(response)
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError)
                    },
                    timeout: 8000
                })

            })
    }
</script>
</body>
</html>


