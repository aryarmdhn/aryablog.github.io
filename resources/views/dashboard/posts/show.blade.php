@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1><i class='bx bxs-user-circle' ></i>{{ auth()->user()->name }}</h1>
</div>
@endsection

@section('container2')
<main>
	<form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
	<a href="/dashboard/blog" class="btn btn-success"><i class="bx bx-arrow-back">Back</i></a>
	<a href="/dashboard/blog/{{ $post->slug }}/edit" class="btn btn-pending"><i class="bx bx-edit">Edit</i></a>
		@method('delete')
		@csrf
		<button class="btn btn-delete" onclick="return confirm('Apakah kamu yakin ingin menghapus post ini?')"><i class="bx bx-x-circle">Delete</i></button>
	</form>
	<div class="table-data">
		<div class="order">
			<div class="head">
				<i class='bx bx-search' ></i>
				<i class='bx bx-filter' ></i>
			</div>
			<div>
				
			</div>
			<table>
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-md-8">
							<h1 class="mb-3">{{ $post->title }}</h1> 
				
						
							@if ($post->image)
							<div class="img-container1">
								<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
							</div>
								@else
								<div class="img-container">
									<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
								</div>
							@endif
							
				
							<article class="my-3 fs-5">
								<p>{!! $post->body !!}</p>
							</article>
								
								
						</div>
					</div>
				</div>
			</table>
		</div>
	</div>
</main>
@endsection
