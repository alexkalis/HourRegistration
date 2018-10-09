@include('layouts.app')
    <body>
        <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>User name</td>
            <td>Hours</td>
            <td>Day</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <tbody>
            <div class="flex-center position-ref full-height" >
                <div class="content col-md-6">
                            {{$total}}
                            @foreach ($hours as $data)
                            <tr>
                                <td><p>{{ $data->id }}</p></td>
                                <td><p>{{$user->name}}</p></td>
                                <td><p>{{ $data->endTime - $data->beginTime}}</p></td>
                                <td><p>{{ $data->day }}</p></td>
                                <td><p>{{ $data->date }}</p></td>
                                <td><p><a href="/hour/{{$data->id}}/edit" class="btn btn-default">Edit</a></p></td>
                                <td><p><a href="/hour/{{$data->id}}">Show</a></p></td>
                                <td onclick="return confirm('Are you sure?')">
                                    {!!Form::open(['action' => ['HourController@destroy', $data->id], 'method' =>'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close() !!}
                                </td>
                                <!-- we will also add show, edit, and delete buttons -->
                            </tr>
                            @endforeach
                    </div>
                </div>
            </thead>
        </tbody>
    </table>
