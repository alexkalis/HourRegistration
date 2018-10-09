@include('layouts.app')
        <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Hours</td>
                <td>Salary</td>
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
                        <td><p>{{$total}} </p></td>
                        <td><p>{{$show->day}}</p></td>
                        <td><p>{{$show->date}}</p></td>
                        <td><p>{{$show->beginTime}}</p></td>
                        <td><p>{{$show->endTime}}</p></td>
                        <p></p>
                        <td><a href="/hour/{{$show->id}}/edit" class="btn btn-default">Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['HourController@destroy', $show->id], 'method' =>'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close() !!}
                        </td>
        </tr>
                    </tbody>
                </table>
                <div class="mapouter" style="border:solid"><div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas"
                  src="https://maps.google.com/maps?q={{$show->address}}=&z=13&ie=UTF8&iwloc=&output=embed"
                   frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                 </iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:250px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:300px;}</style></div>
