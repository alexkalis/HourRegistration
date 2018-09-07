@include('header')
    <body>
        <a href="/HourRegistration">Registrate your hours.</a>
        <table class="table table-striped table-bordered">
    <table>
        <tr>
            <td>ID</td>
            <td>Hours</td>
            <td>Day</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <tbody>
                        @foreach ($hours as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->endTime - $data->beginTime}}</td>
                            <td>{{ $data->day }}</td>
                            <td>{{ $data->date }}</td>
                            <td><a href="/hour/{{$data->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td><a href="/hour/{{$data->id}}">Show</a></td>
                            <td onclick="return confirm('Are you sure?')">
                                {!!Form::open(['action' => ['HourController@destroy', $data->id], 'method' =>'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close() !!}
                            </td>
                            <!-- we will also add show, edit, and delete buttons -->
                        </tr>
                        @endforeach
                        <h2>{{$total}}</h2>

        </tbody>
    </table>
