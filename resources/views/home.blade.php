@extends('layouts.app')

@section('stylesheets')
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
@endsection

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
    <div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="/accountadd"> <i class="icon-book"></i> + Account </a> </li>
          <li> <a href="/contactadd"> <i class="icon-client"></i> + Contact</a> </li>
          <li> <a href="#"> <i class="icon-piechart"></i> + Opportunity </a> </li>
          <li> <a href="#"> <i class="icon-pdf"></i> + Scope of Work </a> </li>
          <li> <a href="#"> <i class="icon-tag"></i> + Task </a> </li>
        </ul>
   </div>
   
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Site Analytics</h5>
          <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Update stats</a></div>
        </div>
        <div class="widget-content">
          <div class="row-fluid">
            <div class="span8">
              <div class="chart"></div>
            </div>
            <div class="span4">
              <ul class="stat-boxes2">
                <li>
                  <div class="left peity_bar_neutral"><span><span style="display: none;">2,4,9,7,12,10,12</span>
                    <canvas width="50" height="24"></canvas>
                    </span>+10%</div>
                  <div class="right"> <strong>15598</strong> Visits </div>
                </li>
                <li>
                  <div class="left peity_line_neutral"><span><span style="display: none;">10,15,8,14,13,10,10,15</span>
                    <canvas width="50" height="24"></canvas>
                    </span>10%</div>
                  <div class="right"> <strong>150</strong> New Users </div>
                </li>
                <li>
                  <div class="left peity_bar_bad"><span><span style="display: none;">3,5,6,16,8,10,6</span>
                    <canvas width="50" height="24"></canvas>
                    </span>-40%</div>
                  <div class="right"> <strong>4560</strong> Orders</div>
                </li>
                <li>
                  <div class="left peity_line_good"><span><span style="display: none;">12,6,9,13,14,10,17</span>
                    <canvas width="50" height="24"></canvas>
                    </span>+60%</div>
                  <div class="right"> <strong>936</strong> Register </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
  </div>
</div>
</div>
</div>
@endsection

@section('footerjs')
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.chat.js"></script> 
 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
@endsection
