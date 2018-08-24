<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <a href="/hour">All hours.</a>
            <a href="/HourRegistration">Registrate your hours.</a>
            <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Hours</td>
                <td>Day</td>
                <td>Date</td>
                <td>Begin time</td>
                <td>End time</td>
                <td>Actions</td>
            </tr>
            <tbody>
        <tr>
                        <td><p>{{$show->id}}</td>
                        <td><p>{{$show->endTime - $show->beginTime}} </p></td>
                        <td><p>{{$show->day}}</p></td>
                        <td><p>{{$show->date}}</p></td>
                        <td><p>{{$show->beginTime}}</p></td>
                        <td><p>{{$show->endTime}}</p></td>
                        <p></p>
                        <td><a href="/hour/{{$show->id}}/edit" class="btn btn-default">Edit</a></td>
        </tr>
                    </tbody>
                </table>
