                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title" style="color: white;">
                            Navigation
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li  class="nav-active" style="background-color: #21262d;">
                                        <a href="#">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                        <li  class="nav-active" style="background-color: #21262d;" >
                            <a data-toggle="collapse" href="#users">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span>User</span>
                            <b class="caret"></b>
                            </a>
                    <div class="nav-main" id="users">
                    <ul class="nav">
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ url('users/create') }}">Add</a></li>
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ route('users.index') }}">All Users</a></li>
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ url('users?role=1') }}">Admin</a></li>
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ url('users?role=2') }}">Instructor</a></li>
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ url('users?role=3') }}">Members</a></li>
                        <li class="nav-active"style="background-color: #21262d;" ><a href="{{ url('users?role=4') }}">Authors</a></li>
                    </ul>
                </div>
                                    </li>

                                    <li  class="nav-active" style="background-color: #21262d;" >
                                        <a href="{{route('categories')}}">
                                            <i class="fa fa-share-square-o" aria-hidden="true"></i>
                                            <span>Category</span>
                                        </a>
                                    </li>

                                    
                                     <li class="nav-active" style="background-color: #21262d;" >
                                        <a href="#">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>Employee Semester</span>
                                        </a>
                                    </li>

                                     <li class="nav-active" style="background-color: #21262d;">
                                        <a href="#">
                                            
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span>Notifications</span>
                                        </a>
                                    </li>

                                    <li class="nav-active" style="background-color: #21262d;">
                                        <a href="#">
                                            <i class="fa fa-ticket" aria-hidden="true"></i>
                                            <span>Attendance Report</span>
                                        </a>
                                    </li>
                                  
                                    
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                
                </aside>