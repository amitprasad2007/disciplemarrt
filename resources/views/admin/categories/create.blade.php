<?php
use \App\Http\Controllers\admin\CategoriesController;

$catecontroller = new CategoriesController();

?>
@extends('layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">         
            <div class="col-md-10">
                <div class="card">
                    <div class="header">Add Category</div>
                    <div class="content">
                        {!! Form::open(array('route'=>'admin.categories.store','class'=>'form-horizontal','autocomplete'=>'off','enctype'=>'multipart/form-data','id'=>'planner-form')) !!}
                            <div class="form-group">
                                <label class="col-sm-3 control-label"> Category Parent Name </label>
                                <div class="col-sm-6">
                                    <select name="parent_id" class="form-control selectpicker" required="required">
                                        <option value="0">Select Parent Category</option>
                                        @foreach($categories as $cat)
                                                <?php
                                                    $sub_cats = $catecontroller->category_drop_down($cat['id']);    
                                                ?>
                                                <option value="{{ $cat['id'] }}" <?php if(isset($category) && $category->parent_id == $cat['id']) { echo 'selected'; } ?>>{{ $cat['name'] }}</option>
                                                @if(count($sub_cats)>0)
                                                    @foreach($sub_cats as $sub_cat)
                                                <?php
                                                    $sub_sub_cats = $catecontroller->category_drop_down($sub_cat['id']);    
                                                ?>
                                                        <option value="{{ $sub_cat['id'] }}" <?php if(isset($category) && $category->parent_id == $cat['id']) { echo 'selected'; } ?>>---{{ $sub_cat['name'] }}</option>
                                                        
                                                        @if(count($sub_sub_cats)>0)
                                                            @foreach($sub_sub_cats as $sub_sub_cat)
                                                                <option value="{{ $sub_sub_cat['id'] }}" <?php if(isset($category) && $category->parent_id == $cat['id']) { echo 'selected'; } ?>>------{{ $sub_sub_cat['name'] }}</option>
                                                            @endforeach;
                                                        @endif;
                                                    @endforeach;
                                                @endif; 
                                            
                                        @endforeach;
                                    </select>
                                </div>
                            </div>
                            @include('admin.categories._partials.form')
                            <!--<div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> Category Image </label>
                                <div class="fileupload fileupload-new col-sm-9" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 80px;"><img src="" alt="" /></div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: auto; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select new image</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input required="required" type="file" class="" name="image" >
                                        </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-fill btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@stop