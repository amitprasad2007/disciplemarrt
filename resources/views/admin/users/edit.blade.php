@extends('layouts.master')
@section('content')
<section class="panel">
<div class="content">

	<div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div>
                        <h4 class="title">Basic Profile</h4>
                    </div>
                    <div class="content">
                        {!! Form::Model($user,array('route'=> array('users.update',$user->id),'method'=>'PUT','class'=>'','autocomplete'=>'off','enctype'=>'multipart/form-data','id'=>'planner-form')) !!}

                        <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Name</label>
            {!! Form::text('name', null, array('required' => 'required', 'placeholder' => 'Name', 'class' => 'form-control'))  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Phone Number</label>
            {!! Form::text('phone_number', null, array('required' => 'required', 'placeholder' => 'Phone Number', 'class' => 'form-control'))  !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Email</label>
            {!! Form::email('email', null, array('required' => 'required', 'placeholder' => 'Email', 'class' => 'form-control'))  !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Address</label>
            {!! Form::textarea('address', null, array('required' => 'required', 'rows' => '3', 'placeholder' => 'Address', 'class' => 'form-control'))  !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>City</label>
            {!! Form::text('city', null, array('required' => 'required', 'placeholder' => 'City', 'class' => 'form-control'))  !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>State</label>
            {!! Form::text('state', null, array('required' => 'required', 'placeholder' => 'State', 'class' => 'form-control'))  !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Country</label>
            {!! Form::text('country', 'India', array('required' => 'required', 'placeholder' => 'Country', 'class' => 'form-control', 'readonly' => 'readonly'))  !!}
        </div>
    </div>
       <div class="col-md-6">
        <div class="form-group">
            <label>Role</label>
           <input type="text" name="role" class="form-control" value="{{$user->roles[0]->name}}">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            @if($user->image != '') <label> User Image </label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 120px; height: 80px;"><img src="{!! asset('users_images/'.$user->image) !!}" alt="" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: auto; line-height: 20px;"></div>
                <div>
                    <span class="btn btn-file btn-primary btn-fill btn-sm"><span class="fileupload-new">Select new image</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file" name="image" >
                    </span>
                    <a href="#" class="btn btn-danger btn-fill btn-sm fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>@endif
        </div>
    </div>
</div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                        <div class="clearfix"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @if($user->role == 2)
                <div class="card">
                    <div class="header">
                        <h4 class="title">Bank Profile</h4>
                    </div>
                    <div class="content">
                        {!! Form::Model($user,array('route'=> array('users.update',$user->id),'method'=>'PATCH','class'=>'','autocomplete'=>'off','enctype'=>'multipart/form-data','id'=>'planner-form')) !!}
                        @include('admin.users._partials.bank')
                        <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                        <div class="clearfix"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Business Profile</h4>
                    </div>
                    <div class="content">
                        {!! Form::Model($user,array('route'=> array('users.update',$user->id),'method'=>'PATCH','class'=>'','autocomplete'=>'off','enctype'=>'multipart/form-data','id'=>'planner-form')) !!}
                        @include('admin.users._partials.business')
                        <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                        <div class="clearfix"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Academic Info</h4>
                    </div>
                    <div class="content">
                        {!! Form::Model($user,array('route'=> array('users.update',$user->id),'method'=>'PATCH','class'=>'','autocomplete'=>'off','enctype'=>'multipart/form-data','id'=>'planner-form')) !!}
                        @include('admin.users._partials.academic')
                        <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                        <div class="clearfix"></div>
                        {!! Form::close() !!}
                    </div>
                </div>
                @endif
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">                      
                        <img src="{!! asset('design/admin/assets/img/full-screen-image-3.jpg') !!}" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="javascript:void(0)">
                                @if($user->image)
                                <img id="blah1" class="avatar border-gray" alt="..." src="{!! asset('users_image/'.$user->image) !!}" />
                                @else
                                <img id="blah1" class="avatar border-gray" alt="..." src="{!! asset('users_image/no-user-image.gif') !!}" />
                                @endif
                                <h4 class="title">{{ $user->name }}<br />
                                    <small>{{ $user->email }}</small><br />
                                    <small>{{ $user->phone_number }}</small>
                                </h4>
                            </a>
                        </div>                   
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
 </div>
        </section>  
<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                //$('#blah').attr('src', e.target.result);
                $('#blah1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function get_thumb(input) {
        readURL(input);
    }

</script>


@endsection