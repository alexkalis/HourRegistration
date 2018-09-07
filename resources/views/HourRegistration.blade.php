@include('header')
    <h1>Hour registration</h1>
    {!! Form::open(['action' => 'HourController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('day', 'Day')}}
            {{Form::select('day', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday',  'Thursday' => 'Thursday', 'Friday' => 'Friday', 'Saturday' => 'Saturday', 'Sunday' => 'Sunday'])}}
        </div>
        <div class="form-group">
            {{Form::label('hours', 'Hours')}}
            {{Form::number('hours')}}
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
