@extends('layouts.master')

@section('title') Home Page  @endsection

@section('content')
    <div class="row">
        @if (count($errors) > 0)
            <div class="alert alert-warning fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6" style="border-right: 1px solid #dadada ">
            <h3>Sign Up</h3>
            <hr>
            {!! Form::open(['route' => 'signup']) !!}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }} ">
                {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} ">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Sign Up</button>

            {!! Form::close() !!}
        </div>

        <div class="col-md-6">
            <h3>Sign In</h3>
            <hr>
            {!! Form::open(['route' => 'signin']) !!}
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Sign In</button>

            {!! Form::close() !!}
        </div>

    </div>
@endsection