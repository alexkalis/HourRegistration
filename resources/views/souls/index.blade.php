@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All souls</div>
                    <div class="alert">
                        <div class="alert">
                            @if (session()->has('soul'))
                                <h2>souls</h2>
                                {{session::get('soul[]')}}

                        </div>
                    @foreach ($souls as $soul)
                        {{$soul->name}}<br>
                        {{$soul->souls}}<br>
                        <a href="{{Route('add.souls', ['id' => $soul->id])}}">Add souls to the session</a><br>
                    @endforeach
                @endif

                    </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
