<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('hour') }}">View all hours</a>
                </div>
            </nav>
        <h1>Edit this date {{$edit->date}}</h1>
        {{Form::model($edit, array('route' => array('hour.update', $edit->id), 'method' => 'PUT'))}}
        <div class="form-group">
            {{ Form::label('day', 'Day')}}
            {{ Form::text('day')}}
        </div>
        <div class="form-group">
            {{ Form::label('date', 'Date')}}
            {{ Form::date('date')}}
        </div>
        <div class="form-group">
            {{ Form::label('beginTime', 'beginTime')}}
            {{ Form::time('beginTime', '')}}
        </div><div class="form-group">
            {{ Form::label('endTime', 'endTime')}}
            {{ Form::time('endTime', '')}}
        </div>

        {{ Form::submit('Edit the hours', array('class' => 'btn btn-primary'))}}
    {{ Form::close() }}

    </body>
</html>
