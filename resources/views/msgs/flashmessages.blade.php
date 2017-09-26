@if (Session::has('success'))
			  <div class="alert alert-success">
              <button class="close" data-dismiss="alert">×</button>
              <strong>Success: </strong> {{ Session::get('success')}}
                       </div>
@endif

@if (isset($errors) && $errors->any())
    

            <div class="alert alert-error">
            <button class="close" data-dismiss="alert">×</button>
                <strong>Error:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        
@endif