@extends('layouts.master')

@section('content')
        <!--Start Dashboard-->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down" ></a>
                  <a href="{{route('users.index')}}" class="fa fa-times"></a>
                </div>
        <h2 class="panel-title">{{ $user->name }}</h2>
            </header>
            <div class="panel-body"> 
                <div class="row">
            <div class="col-md-6">
                <div class="card"> 
                    <div class="content">
                        <div class="form-group"> 
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Number:</strong>
                            {{ $user->phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Alternate Phone Number:</strong>
                            {{ $user->alternate_phone_number }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $user->address }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $user->city }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $user->state }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $user->country }}
                        </div>
                        <div class="form-group">
                            <strong>Zipcode:</strong>
                            {{ $user->zipcode }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            @if($user->image != '')<img src="{{ url('/users_image/'.$user->image) }}" width="200">@endif
                        </div>
                        
                        <div class="form-group">
                            <strong>Bank Name:</strong>
                            {{ $user->bank_name }}
                        </div>
                        <div class="form-group">
                            <strong>Account No:</strong>
                            {{ $user->acc_no }}
                        </div>
                        <div class="form-group">
                            <strong>IFSC Code:</strong>
                            {{ $user->ifsc_code }}
                        </div>
                        <div class="form-group">
                            <strong>Branch Name:</strong>
                            {{ $user->branch_name }}
                        </div>
                        <div class="form-group">
                            <strong>Branch Code:</strong>
                            {{ $user->branch_code }}
                        </div>
                        <div class="form-group">
                            <strong>Company:</strong>
                            {{ $user->company }}
                        </div>
                        <div class="form-group">
                            <strong>PAN Card No:</strong>
                            {{ $user->pan_card_no }}
                        </div>
                        <div class="form-group">
                            <strong>TDS:</strong>
                            {{ $user->tds }}
                        </div>
                        <div class="form-group">
                            <strong>Documents:</strong>
                            {{ $user->documents }}
                        </div>
                        <div class="form-group">
                            <strong>GSTN No:</strong>
                            {{ $user->gstn_no }}
                        </div>
                        <div class="form-group">
                            <strong>Aadhar Card Photo:</strong>
                            @if($user->aadhar_card_photo != '')<img src="{{ url('/documents/'.$user->aadhar_card_photo) }}" width="200">@endif
                        </div>
                        <div class="form-group">
                            <strong>PAN Card Photo:</strong>
                            @if($user->pan_card_photo != '')<img src="{{ url('/documents/'.$user->pan_card_photo) }}" width="200">@endif
                        </div>
                        <div class="form-group">
                            <strong>Degree:</strong>
                            {{ $user->degree }}
                        </div>
                        <div class="form-group">
                            <strong>Passed Year:</strong>
                            {{ $user->pass_year }}
                        </div>
                        <div class="form-group">
                            <strong>Percentage:</strong>
                            {{ $user->percantage }}
                        </div>
                        <div class="form-group">
                            <strong>College:</strong>
                            {{ $user->college }}
                        </div>
                        <div class="form-group">
                            <strong>Subject:</strong>
                            {{ $user->subject }}
                        </div>
                        <div class="form-group">
                            <strong>Short Description:</strong>
                            {{ $user->short_desc }}
                        </div>
                        <div class="form-group">
                            <strong>About:</strong>
                            {{ $user->about }}
                        </div>
                 
                        <div class="form-group">
                            <strong>Role:</strong>
                            {{$user->roles[0]->name}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
          
@endsection