@extends('layouts.app')

@section('stylesheets')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/uniform.css') }}" rel="stylesheet">
<link href="{{ asset('css/select2.css') }}" rel="stylesheet">
<link href="{{ asset('css/maruti-style.css') }}" rel="stylesheet">
<link href="{{ asset('css/maruti-media.css') }}" rel="stylesheet" class="skin-color">
@endsection

@section('content')

<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="/home" title="Go to Dashboard" class="tip-bottom"><i class="icon-th"></i> Home</a> <a href="#" class="current">Accounts</a> </div>
  </div>
  <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li> <a href="/notes.create"> <i class="icon-survey"></i> + Note </a> </li>
          <li> <a href="#"> <i class="icon-client"></i> + Contact</a> </li>
          <li> <a href="#"> <i class="icon-book"></i> + Account </a> </li>
        </ul>
        @include('msgs.flashmessages')
   </div>
    <div class="row-fluid">
<div class="span6">


        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Notes</h5>

          </div>
          <div class="widget-content nopadding">

              {!! Form::open(['route' => 'notes.store', 'class'=>'form-horizontal', 'name' => 'basic_validate', 'id' => 'basic_validate', 'novalidate' => '']) !!}

   
    <div class="control-group">
      {{ Form::label('title','Title', array('class' => 'control-label'))}}
         <div class="controls">
            {{ Form::text('title', null, array('class' => 'span11')) }}
        </div>
    </div>  

    <div class="control-group">
      {{ Form::label('description','Description', array('class' => 'control-label'))}}
         <div class="controls">
            {{ Form::textarea('description', null, array('class' => 'span11')) }}
        </div>
    </div>    

    <div class="control-group">
      {{ Form::label('phone_no','Phone No (For Specific Notes)', array('class' => 'control-label'))}}
         <div class="controls">
            {{ Form::text('phone_no', null, array('class' => 'span11')) }}
        </div>
    </div>  

    <div class="control-group">
      {{ Form::label('account_id','Account ID', array('class' => 'control-label'))}}
         <div class="controls">
            
            <!-- building a dynamics dropdown -->
            
            {!! Form::select('account_id', $accountlist, null, ['class' => 'span11']) !!}

        </div>
    </div>    
    <div class="form-actions">    
      {{Form::submit('Save', array('class' => 'btn btn-success'))}} 
    </div>
              {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footerjs')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.uniform.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.js') }}"></script>
<script src="{{ asset('js/maruti.js') }}"></script>
<script src="{{ asset('js/maruti.form_validation.js') }}"></script>

@endsection
