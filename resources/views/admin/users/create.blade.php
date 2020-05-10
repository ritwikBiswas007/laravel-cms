<!-- Page Heading -->
@extends('layouts.admin')

@section('title')
Create User
@endsection

@section('users')
active
@endsection

@section('create-users')
active
@endsection



@section('body')


<h1 class="h3 mb-4 text-gray-800">Create User</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create</h6>
    </div>
    <div class="card-body">

        @if (count($errors) > 0)

        @foreach ($errors->all() as $item)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Error!</strong> {{ $item}}
        </div>
        @endforeach

        @endif





        {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store', 'files'=>'true']) !!}
        {{ csrf_field() }}

        <div class="form-group">

            {!! Form::label('name','Full Name') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('role_id','Select User Role') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active', ['1' => 'Active', '0' => 'Inactive', ],
            null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Profile Pic') !!}
            {!! Form::file('photo_id') !!}
        </div>


        <div class="form-group">

            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>"form-control",
            'autocomplete'=>'false'])
            !!}



        </div>

        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>


@endsection