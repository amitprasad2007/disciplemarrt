@extends('layouts.master')
@section('content')
<section class="panel">
<div class="content">
    <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
                <h2 class="panel-title">Add User</h2>
            </header>
            <div class="panel-body"> 
<form method="POST" action="{{ route('users.store') }}">
     @csrf

   <div class="form-group ">
    <label class="col-sm-3 control-label "> Name </label>
    <div class="col-sm-6">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <div >{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label"> Email </label>
    <div class="col-sm-6">        
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <div >{{$message}}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label"> Password </label>
    <div class="col-sm-6">        
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="Password">
        @error('password')
        <div >{{$message}}</div>
        @enderror
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label"> Role </label>
    <div class="col-sm-6">
    {!! Form::select('roles',array($roles),array('class' => 'form-control','multiple')) !!}
    </div>
</div>
     <div class="form-group">
     <label class="col-md-3"></label>
         <div class="col-md-6">
        <button type="submit" class="btn btn-fill btn-info">Add</button>
           <a href="{{ route('users.index') }}" class="btn btn-fill btn-danger">Cancel</a>
                 </div>
                    </div>
                        </form>
     </div>
                
  </div>
        </section>  
@endsection