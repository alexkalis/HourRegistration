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
    <h1>Hour registration</h1>
    {!! Form::open(['action' => 'HourController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('day', 'Day')}}
        {{Form::text('day','')}}
        </div>
        <div class="form-group">
        {{Form::label('date', 'Date')}}
        {{Form::Date('date', '')}}
        </div>
        <div class="form-group">
        {{Form::label('beginTime', 'beginTime')}}
        {{Form::Time('beginTime', '')}}
        </div>
        <div class="form-group">
        {{Form::label('endTime', 'endTime')}}
        {{Form::Time('endTime', '')}}
        </div>
        {{Form::submit('Submit')}}
    {!! Form::close() !!}
</body>
