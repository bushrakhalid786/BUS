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
          <li> <a href="/notes/create"> <i class="icon-survey"></i> + Note </a> </li>
          <li> <a href="#"> <i class="icon-client"></i> + Contact</a> </li>
          <li> <a href="/notes.create"> <i class="icon-book"></i> + Account </a> </li>
        </ul>
   </div>
    <div class="row-fluid">
<div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Account Information</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="/accountadd" method="post" class="form-horizontal" name="basic_validate" id="basic_validate" novalidate>
              {{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Company Name :</label>
                <div class="controls">
                  <input name="account_name" type="text" class="span11" placeholder="Company Name">
                </div>
             
              </div>
              <div class="control-group">
                <label class="control-label">Main Contact Person :</label>
                <div class="controls">
                  <input name="contact_person" type="text" class="span11" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Phone:</label>
                <div class="controls">
                  <input name="phone_no" type="text" class="span11" placeholder="Company Main Line">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email :</label>
                <div class="controls">
                  <input name="email" type="text" class="span11" placeholder="Company Main Email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Address:</label>
                <div class="controls">
                  <input name="address" type="text" class="span11">
                  <span class="help-block">Physical and Billing Address</span> </div>
              </div>

              <div class="control-group">
                <label class="control-label">City</label>
                <div class="controls">
                  <div class="select2-container select2-container-active select2-dropdown-open" id="s2id_autogen1">    <a href="#" onclick="return false;" class="select2-choice" tabindex="0">   <span>Select</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a>    </div><select name="city_id" style="display: none;">
                    <option value=2>Abu Dhabi / Al Ain</option>
                    <option value=1>Dubai / Northern Emirates</option>
                  </select>
                </div>
              </div>

               <div class="control-group">
                <label class="control-label">Sales Region</label>
                <div class="controls">
                  <div class="select2-container select2-container-active select2-dropdown-open" id="s2id_autogen1">    <a href="#" onclick="return false;" class="select2-choice" tabindex="0">   <span>Select Sales Region</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a>    </div><select name="region_id" style="display: none;">
                    <option value=2>Abu Dhabi / Al Ain</option>
                    <option value=1>Dubai / Northern Emirates</option>
                  </select>
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </form>
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
<script src="js/jquery.validate.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.form_validation.js"></script>
@endsection
