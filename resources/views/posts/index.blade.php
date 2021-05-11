<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Laravel 8 CRUD Tutorial From Scratch</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
	
		@if(session('success'))
		<div class="alert alert-success mb-1 mt-1">{{ session('success') }}</div>
		@endif
	
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Laravel 8 CRUD Example Tutorial</h2>
					</div>
					<div class="pull-left">
						<a class="btn btn-success" href="{{ route('create') }}">Add Compagny</a>
					</div>
				</div>
			</div>
			
			<table class="table table-bordered">
				<tr>
					<th>S.No</th>
					<th>Company Name</th>
					<th>Company Email</th>
					<th>Company Address</th>
					<th width="280px">Action</th>
				</tr>
				@foreach($companies as $company)
				<tr>
					<td>{{ $company->id }}</td>
					<td>{{ $company->name }}</td>
					<td>{{ $company->email }}</td>
					<td>{{ $company->address }}</td>
					<td>
						<div class="row">
    						<a class="btn btn-primary" href="{{ route('edit', $company->id) }}">Edit</a>
    						<a class="btn btn-success" href="{{ route('show', $company->id) }}">Show</a>
    						<form action="{{ route('destroy', $company->id) }}" method="GET">
    							@csrf
    							@method('DELETE')
    							<button type="submit" class="btn btn-danger">Delete</button>
    						</form>
						</div>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</body>
</html>