@extends('layouts.master')

@section('content')
        <!--Start Dashboard-->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="{{ route('users.index') }}" class="fa fa-times"></a>
                </div>
        
                <h2 class="panel-title">User List</h2>
            </header>
            <div class="panel-body"> 
                <div class="row">
                    <div class="col-sm-6" style="float:right;">
                        <div class="mb-md" style="float:right;">
                            <a href="{{route('users.create')}}" class="btn btn-primary create">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Regiter Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                        <tr class="gradeX">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles[0]->name }}</td>
                            <td>
                            {{date("d M Y h:i a",strtotime($user->created_at))}}
                            </td>
                            <td class="actions">
                                <a href="{{route('users.show',$user->id)}}" class="on-default remove-row"><i class="fa fa-eye"></i></a>
                                <a href="{{route('users.edit',$user->id) }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                 @if($user->is_active == 1)
                                <a href="{{ URL::to('users/change-status/'.$user->id) }}" class="on-default remove-row"><i class="fa fa-lock"></i></a>
                                @else
                                <a href="{{ URL::to('users/change-status/'.$user->id) }}" class="on-default remove-row"><i class="fa fa-unlock"></i></a>
                                @endif
                             <a href="#" data-toggle="modal" data-target="#confirm-delete{{$user->id}}" class="btn btn-danger btn-fill btn-xs">Delete</a>
                                            <div class="modal fade" id="confirm-delete{{$user->id}}" role="dialog" style="text-align: left;">
                                                <div class="modal-dialog" style="width: 35%;">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirm Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>You are about to delete <b><i class="title"></i></b> record, this procedure is irreversible.</p>
                                                            <p>Do you want to proceed?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-fill btn-sm']) !!}
                                                            <button type="button" class="btn btn-default btn-fill btn-sm" data-dismiss="modal">Cancel</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end Dashboard -->
    </section>            
@endsection
