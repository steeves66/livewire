@if (Session::has('success'))
<div class="alert alert-success alert-block" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ Session::get('success') }}</strong>
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger alert-block" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ Session::get('error') }}</strong>
</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning alert-block" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ Session::get('warning')}}</strong>
</div>
@endif

@if (Session::has('info'))
<div class="alert alert-info alert-block" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ Session::get('info') }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
</div>
@endif

@if (Session::has(''))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> {{ Session::get(' ') }} </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif