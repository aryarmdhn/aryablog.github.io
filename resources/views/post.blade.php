@extends('layouts.main')

@section('container')

<main>	
	<a href="/blog" class="btn btn-success"><i class="bx bx-arrow-back">Back</i></a>
	<div class="table-data">
		<div class="order">
			<div class="head">
				
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