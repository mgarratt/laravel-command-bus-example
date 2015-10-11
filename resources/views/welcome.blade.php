<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .row {
                display: table-row;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .alert {
                display: table-cell;
                text-align: center;
                vertical-align: middle;
            }

            .alert-success {
                background: #dff0d8;
                color: #3c763d;
                border: 1px solid #3c763d;
            }
        </style>
    </head>
    <body>
    @if (session('userId'))
        <div class="row">
            <div class="alert alert-success">
                New user ID: {{ session('userId') }}
            </div>
        </div>
    @endif
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
