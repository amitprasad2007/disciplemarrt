@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card"> 
                   <h2 class="panel-title">Categories List</h2>
                    <div class="row">
                    <div class="col-sm-6" style="float:right;">
                        <div class="mb-md" style="float:right;">
                            <a href="{{route('categories.create')}}" class="btn btn-primary create">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                    <div class="content">
                        <div class="toolbar"></div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Parent Category Name</th>
                                        <th>Category Name</th>
                                        <th class="disabled-sorting text-left">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $slno = 1; ?>
                                    @if($categories)
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$slno}}</td>
                                        <td>@if($category->parent_category) {{$category->parent_category}} @else {{ 'NA' }} @endif</td>
                                        <td>{{$category->name}}</td>             
                                        <td>
                                            @if($category->is_active == 0)
                                            <a class="btn btn-danger btn-fill btn-xs" href="#">Inctive</a>
                                            @else
                                            <a class="btn btn-success btn-fill btn-xs" href="#">Active</a>
                                            @endif
                                            <a class="btn btn-info btn-fill btn-xs" href="#">Show</a>
                                            <a class="btn btn-primary btn-fill btn-xs" href="#">Edit</a>                                            
                                            <a href="#" data-toggle="modal" data-target="#confirm-delete{{$category->id}}" class="btn btn-danger btn-fill btn-xs">Delete</a>
                                            <div class="modal fade" id="confirm-delete{{$category->id}}" role="dialog" style="text-align: left;">
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
                                                            {!! Form::open(['method' => 'DELETE','style'=>'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-fill btn-sm']) !!}
                                                            <button type="button" class="btn btn-default btn-fill btn-sm" data-dismiss="modal">Cancel</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $slno = $slno + 1; ?>    
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection