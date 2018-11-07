    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All schools</div>

                        @foreach ($schools as $school)
                            <div class="alert">
                                {{$school->school}}<br>
                                Id: {{$school->id}}<br>
                                Plaats: {{$school->place}}<br>
                                Adres: {{$school->address}}<br>
                                <a href="/school/edit/{{$school->id}}">Edit</a>
                                <a href="/school/delete/{{$school->id}}">Delete</a><br>

                        @endforeach
                        <a href="/school/create">Een nieuwe school</a>
                    </div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
