@extends('layouts.app')
@section('content')
    <div class="main-content">
                <div class="container-fluid">
                    <h3 class="page-title">Maak een school aan</h3>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="panel">
                                <div class="panel-body">
                                    @if(count($errors)>0)
                                        @foreach($errors->all() as $error)
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <i class="fa fa-times-circle"></i> {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                    <form action="{{  Route('createSchool') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="h2">De school: *</label>
                                            <input type="text" class="form-control" name="school" placeholder="Naam" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="h2">Het adres: *</label>
                                            <input type="text" class="form-control" name="address" placeholder="Adres"required/></input>
                                        </div>
                                        <div class="form-group">
                                            <label class="h2">De plaats: *</label>
                                            <input type="text" class="form-control" name="place" placeholder="Plaats" required/>
                                        </div>
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-primary btn-lg" action="">Maak een evenement aan.</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
