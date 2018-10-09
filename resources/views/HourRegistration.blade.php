@extends('layouts.app')
@section('content')

    <h1>Hour registration</h1>
    {!! Form::open(['action' => 'HourController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('day', 'De dag:')}}
            {{Form::select('day', ['Maandag' => 'Maandag', 'Dinsdag' => 'Dinsdag', 'Woensdag' => 'Woensdag',  'Donderdag' => 'Donderdag', 'Vrijdag' => 'Vrijdag', 'Zaterdag' => 'Zaterdag', 'Sunday' => 'Zondag'])}}
        </div>
        <div class="form-group">
            {{Form::label('hours', 'Aantal uren: ')}}
            {{Form::number('hours')}}
        </div>
        <div class="form-group">
            <p>De dag van vandaag:</p><p id="date"></p>
            {{Form::label('date', 'Dag: ', 'beginTime', ['class' => 'date'])}}
            {{Form::Date('date', '')}}
        </div>
        <div class="form-group">
            {{Form::label('beginTime', 'begin tijd: ', array('class' => 'beginTime'))}}
            {{Form::Time('beginTime', '')}}
        </div>
        <div class="form-group">
            {{Form::label('endTime', 'eind tijd: ', array('class' => 'endTime'))}}
            {{Form::Time('endTime', '')}}
        </div>
        <h2 id="demo"></h2>
            {{Form::submit('Submit')}}
    {!! Form::close() !!}
    <script type="text/javascript">
        (function today() {
            var d = new Date();
            document.getElementById("date").innerHTML = d.toDateString();
        })();
    </script>
@endsection
