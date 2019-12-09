@extends('layouts.master')

@section('content')
        <!--Start Dashboard-->
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
        
                <h2 class="panel-title">Semester List</h2>
            </header>
            <div class="panel-body"> 
                <div class="row">
                    <div class="col-sm-6" style="float:right;">
                        <div class="mb-md" style="float:right;">
                            <a href="#" class="btn btn-primary create">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                        <tr>
                            <th>Semester Name</th>
                            <th>Year</th>
                            <th>Version</th>
                            <th>Schedule</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="gradeX">
                            <td>hell</td>
                            <td>216</td>
                            <td>v-8</td>
                            <td><a href="#" class="btn btn-info">Schedule</a></td>
                            <td class="actions">
                                
                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </section>
        <!-- end Dashboard -->
    </section>            
@endsection
