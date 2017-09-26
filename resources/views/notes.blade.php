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
    <div id="breadcrumb"> <a href="/home" title="Go to Dashboard" class="tip-bottom"><i class="icon-th"></i> Home</a> <a href="/crm" title="Go to Accounts" class="tip-bottom"><i class="icon-th-alt"></i> Accounts</a><a href="#" class="current">Notes</a> </div>
  </div>
  <div class="container-fluid">
      <div class="quick-actions_homepage">
        <ul class="quick-actions">
          <li> <a href="/notes/create"> <i class="icon-survey"></i> + Note </a> </li>
          <li> <a href="/contactadd"> <i class="icon-client"></i> + Contact</a> </li>
          <li> <a href="/accountadd"> <i class="icon-book"></i> + Account </a> </li>
        </ul>

         @include('msgs.flashmessages')


   </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th-list"></i></span> 
            <h5>Notes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Account Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                

                @foreach($notesjoin as $nj)

                <tr class="gradeX">
                  <td>{{$nj->note_id}}</td>
                  <td>{{$nj->title}}</td>
                  <td>{{$nj->description}}</td>
                  <td>{{$nj->account_name}}</td>
                  <td>{{$nj->created_at}}</td>
                 <td>
                
               <!-- Mini form to perform delete -->
                {!! Form::open(['route' => ['notes.destroy', $nj->note_id], 'method' => 'DELETE']) !!}
                 <!-- <a href="/notes/{{$nj->note_id}}"> -->
                        {!! Html::linkRoute('notes.edit','Detail', array($nj->note_id), array('class' => 'btn btn-info btn-mini')) !!}
                 

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-mini']) !!}

                {!! Form::close() !!}


                 </td>
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
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.uniform.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/maruti.js') }}"></script>
<script src="{{ asset('js/maruti.tables.js') }}"></script>
@endsection
