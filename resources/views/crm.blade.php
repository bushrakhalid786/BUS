@extends('layouts.app')

@section('stylesheets')
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
@endsection

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Dashboard" class="tip-bottom"><i class="icon-th"></i> Home</a> <a href="#" class="current">Accounts</a> </div>
  </div>
  <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li> <a href="/accountadd"> <i class="icon-book"></i> + Account </a> </li>
          <li> <a href="/contactadd"> <i class="icon-client"></i> + Contact</a> </li>
          <li> <a href="/notes/create"> <i class="icon-survey"></i> + Note </a> </li>
        </ul>
   </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-list-alt"></i></span> 
            <h5>Accounts</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Account Name</th>
                  <th>Contact Person</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>City</th>
                  <th>Account Manager</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                

                @foreach($accounts as $account)

                <tr class="gradeX">
                  <td>{{$account->account_id}}</td>
                  <td>{{$account->account_name}}</td>
                  <td>{{$account->contact_person}}</td>
                  <td class="center">{{$account->email}}</td>
                  <td>{{$account->phone_no}}</td>
                  <td>{{$account->city_id}}</td>
                  <td>{{$account->account_manager_id}}</td>
                  <td><button class="btn btn-info btn-mini">Detail</button>   <button class="btn btn-danger btn-mini">Delete</button>  <button class="btn btn-inverse btn-mini">Notes</button> ({{$account->account_id}})</td>
                </tr>


                @endforeach
              </tbody>
            </table>
          </div>
        </div>

       

       

        
      </div>
    </div>
  </div>
</div>
@endsection

@section('footerjs')
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.tables.js"></script>
@endsection
