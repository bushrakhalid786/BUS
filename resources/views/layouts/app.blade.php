<!DOCTYPE html>
<html lang="en">
<head>
 <title>BUS - Business Unification System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
@yield('stylesheets')
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/home">BUS</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text"> {{ Auth::user()->name }} </span></a></li>
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#">new message</a></li>
      </ul>
    </li>
    <li class=""><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
  </ul>
</div>


<!--close-top-Header-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li class="active"><a href="/home"><i class="icon icon-th"></i> <span>DASHBOARD</span></a> </li>
    <li class="submenu"> <a href="/crm"><i class="icon icon-list-alt"></i> <span>CRM</span></a>
      <ul>
        <li><a href="/crm">Accounts</a></li>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/notes">Notes</a></li>
        
      </ul>
    </li>
    
    <li class="submenu"> <a href="/sales"><i class="icon icon-briefcase"></i> <span>SALES</span></a>
      <ul>
        <li><a href="/leads">Leads</a></li>
        <li><a href="/opportunities">Opportunities</a></li>
        <li><a href="/copportunities">Closed Opportunities</a></li>
       
      </ul>
    </li>

    <li class="submenu"> <a href="/operations"><i class="icon icon-wrench"></i> <span>OPERATIONS</span> </a>
      <ul>
        <li><a href="/sow">Scope of Work</a></li>
        <li><a href="/operations">Programs</a></li>
        <li><a href="/schedules">Schedules</a></li>
       
      </ul>
    </li>
    <li class="active"><a href="/calender"><i class="icon icon-calendar"></i> <span>CALENDAR</span></a> </li>
    <li class="active"><a href="/todo"><i class="icon icon-list"></i> <span>TO DO</span></a> </li>
  </ul>
  
</div>


 @yield('content')


<div class="row-fluid">
  

</div>

@yield('footerjs')
</body>
</html>
