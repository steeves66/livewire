@extends('layouts.app')

@section('title')
	Laravel 8 CRUD Tutorial From Scratch
@endsection

@section('content')
	<div class="row">
        <div class="col-md-12">
            <a href="{{ route('postCreate') }}" class="btn btn-primary pull-right mb-3">Add New</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        @if($post->is_active == 1)
                            <span class="badge badge-pill badge-success p-2">Active</span>
                        @else
                            <span class="badge badge-pill badge-danger p-2">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>
						<a class="btn btn-success" href="{{ route('postEdit', $post->id) }}"> Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">No Posts Found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="row">
        {{ $posts->links() }}
    </div>
@endsection

