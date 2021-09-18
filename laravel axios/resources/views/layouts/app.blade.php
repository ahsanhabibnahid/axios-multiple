<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Laravel Axios Multiple File Upload</h4>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary my-1">Add</button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>File</th>
                                    <th>File Size</th>
                                    <th>Upload MB</th>
                                    <th>Upload (%)</th>
                                    <th>Status</th>
                                    <th>Cancel</th>
                                    <th>Upload</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>file</td>
                                    <td>file</td>
                                    <td>file</td>
                                    <td>file</td>
                                    <td>file</td>
                                    <td>file</td>
                                    <td><button class="btn btn-danger btn-sm">Cancel</button></td>
                                    <td><button class="btn btn-success btn-sm">Upload</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
