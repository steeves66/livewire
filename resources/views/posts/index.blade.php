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
                    	<div class="row">
    						<a class="btn btn-success" href="{{ route('postEdit', $post->id) }}"> Edit</a>
    						<button class="btn btn-warning" data-toggle="modal" data-target="#delete_post_{{ $post->id }}">Delete</button>
    						<div class="modal fade" id="delete_post_{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ route('postDelete', $post->id) }}" id="form_delete_post_{{ $post->id }}" method="post">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">?</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to delete "<b>{{ $post->title }}</b>" post?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes! Delete It</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
						</div>
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

