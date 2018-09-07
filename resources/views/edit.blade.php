@include('header')
        <h1>Edit this date {{$edit->date}}</h1>
        {{Form::model($edit, array('route' => array('hour.update', $edit->id), 'method' => 'PUT'))}}
        <div class="form-group">
            {{ Form::label('day', 'Day')}}
            {{Form::select('day', ['Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday',  'Thursday' => 'Thursday', 'Friday' => 'Friday', 'Saturday' => 'Saturday', 'Sunday' => 'Sunday'])}}
        </div>
        <div class="form-group">
            {{ Form::label('date', 'Date')}}
            {{ Form::date('date')}}
        </div>
        <div class="form-group">
            {{ Form::label('beginTime', 'beginTime')}}
            {{ Form::time('beginTime')}}
        </div><div class="form-group">
            {{ Form::label('endTime', 'endTime')}}
            {{ Form::time('endTime')}}
        </div>

        {{ Form::submit('Edit the hours', array('class' => 'btn btn-primary'))}}
    {{ Form::close() }}

    </body>
</html>
