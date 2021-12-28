$(document).ready(function () {
    $('.dt_table').DataTable();
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
