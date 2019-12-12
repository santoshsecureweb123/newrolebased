<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="/" class="waves-effect"> <span class="badge badge-primary badge-pill float-right">2</span>  <span> Dashboard </span>
                    </a>
                </li>
                <li> 
                    <a href="{{route('allskill')}}" class="waves-effect"><span> Skils </span>
                    </a>
                </li>


            
                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><span> User <span class="float-right menu-arrow"></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('allUser')}}">All User</a></li>
                        <li><a href="{{route('addnew')}}">Add New User</a></li>
                       
                    </ul>
                </li>
            
               <!--  <li> 
                    <a href="javascript:void(0);" class="waves-effect"><span> Email <span class="float-right menu-arrow"></span> </span></a>
                    <ul class="submenu">
                        <li><a href="email-inbox.html">Inbox</a>
                        </li>
                        <li><a href="email-read.html">Email Read</a>
                        </li>
                        <li><a href="email-compose.html">Email Compose</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>