@extends('layouts.admin')




@section('content')


    <h3>Create Users</h3>


     {{-- Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) --}}
        
     {!! Form::open(['method'=>'POST', 'route'=> ['admin.users.store'], 'files'=>true]) !!}

        <div class="form-group">
             {!! Form::label('name', 'Name:') !!}
             {!! Form::text('name', null, ['class'=>'form-control'])!!}
       </div>

       <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', [ 1 => 'Active', 0 => 'Not Active'], 0 , ['class'=>'form-control']) !!}
         </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control'])!!}
         </div>


        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control','autocomplete'=>'new-password'])!!}
         </div>

         <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
         </div>
    {!! Form::close() !!}

    @include('includes.form_errors')

    



 @stop