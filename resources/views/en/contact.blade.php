@extends('en.layout')

@section('title', 'CONTACT | CCE Management')

@section('description', 'Contact page for CCE Management, a global provider for timely limited management resources for companies of any size.')

@section('content')

<img class="cont img-responsive" src="storage/images/ipad7.jpg">

<div class="container">
	<div class="row contact">
		<div class="col-md-6">
			<h1>Contact Us</h1>
			<div class="hr"><hr class="hr-home"></div>
			@if (Session::has('success'))
   			 <div class="alert alert-info">{{ Session::get('success') }}</div>
			@endif
			<div class="row">
			
			<div class="col-md-6">
			<form class="forma" action="{{ route('sendmail') }}" method="post">
				<p>Name:</p>
				<input type="text" name="name">
				<p>Email:</p>
				<input type="email" name="email">
				<p>Your message here:</p>
				<textarea id="textarea"  type="text" name="textarea"></textarea><br>
				<button class="btn" type="submit">Send</button>
				{{ csrf_field() }}
			</form>
			
	
			</div>
			<div class="col-md-6">
			<h2><span class="glyphicon glyphicon-map-marker"></span> Address</h2>
			<p>Heisenbergweg 31<br>D-85540 Haar<br>Germany</p>
			<h2><span class="glyphicon glyphicon-earphone"></span> Phone</h2>
			<p>+49 171 5286698</p>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<img class="portret img img-responsive" src="storage/images/portret.jpg">
			<p class="signature"><i>Ulrich Kolzenburg, Interim Manager</i></p>

		</div>
	</div>
</div>



@endsection