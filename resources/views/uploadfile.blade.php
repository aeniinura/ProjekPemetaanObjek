<x-app-layout>
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload File') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="container mt-5">
                    <div class="container mt-5">
        <h1 class="text-center">Upload File</h1>
        <form id="uploadForm" class="mt-4">
            <div class="mb-3">
                <input type="file" class="form-control" id="fileInput" name="file" accept=".xlsx">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
        <div id="response" class="mt-3"></div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#uploadForm').on('submit', function (e) {
                e.preventDefault();

                var formData = new FormData();
                var file = $('#fileInput')[0].files[0];

                if (file && file.name.endsWith('.xlsx')) {
                    formData.append('file', file);

                    $.ajax({
                        url: 'http://127.0.0.1:5000/upload',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            $('#response').html('<div class="alert alert-success">' + response.message + '</div>');
                        },
                        error: function (jqXHR) {
                            var error = jqXHR.responseJSON.error;
                            $('#response').html('<div class="alert alert-danger">Error: ' + error + '</div>');
                        }
                    });
                } else {
                    $('#response').html('<div class="alert alert-danger">Error: Allowed file types are .xlsx</div>');
                }
            });
        });
    </script>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
