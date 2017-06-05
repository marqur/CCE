@extends('en.layout')

@section('title', 'SUCCESS STORIES | CCE Management')

@section('content')

<div class="container cont">
</div>

<div class="container-fluid stories-bg">
<div class="container">
	<div class="row stories">

		<h1>Success Stories</h1><br><hr>

    @foreach ($en_stories as $story) 
						
		<div class="col-md-5 story-block">
			<div class="row">
				<div class="col-md-12 head-story">
					<h3>{{ $story->title }}</h3>
				</div>
				<div class="col-md-12 body-story">
					<p>{!!html_entity_decode($story->description)!!}
					</p>
					<a target="blank" href="{!! $story->pdf !!}" download><button class="btn btn-stories">DOWNLOAD</button></a><br>
				</div>
			</div>
		</div>

	@endforeach

	</div>
</div>
</div>




@endsection