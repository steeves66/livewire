<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Company Form - Laravel 8 CRUD</title>
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left mb-2">
					<h2>Show Company</h2>
					<p> or <a class="btn btn-primary btn-sm" href="{{ route('index') }}">
						Back</a>
					</p>
				</div>
<!-- 				<div class="pull-right"> -->
<!-- 					<a class="btn btn-primary btn-sm" href="{{ route('index') }}"> -->
<!-- 						Back</a> -->
<!-- 				</div> -->
			</div>
		</div>
		
		@if(session('status'))
		<div class="alert alert-success mb-1 mt-1">{{ session('status') }}</div>
		@endif
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Company Name:</strong> 
						<input type="text" name="name" class="form-control" 
						placeholder="Company Name" value="{{ $company->name }}" readonly> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Company Email:</strong> 
						<input type="email" name="email" class="form-control" 
						placeholder="Company Email" value="{{ $company->email }}" readonly>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Company Address:</strong> 
						<input type="text" name="address" class="form-control" 
						placeholder="Company Address" value="{{ $company->address }}" readonly>
					</div>
				</div>
			</div>

</body>
</html>