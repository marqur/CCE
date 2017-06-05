@extends('de.layout_de')

@section('title', 'KONTAKT | CCE Management')

@section('description', 'Kontakt Seite für CCE Management, Ein globaler Anbieter von zeitlich befristeten Managementressourcen für Unternehmen jeder Größe.')


@section('content')
<div class="container cont">
</div>

<div class="container">
	<div class="row contact">
		<div class="col-md-6">
			<h1>Contact Us</h1>
			<div class="hr"><hr class="hr-home"></div>
			@if (Session::has('success_de'))
   			 <div class="alert alert-info">{{ Session::get('success_de') }}</div>
			@endif
			<div class="row">
			
			<div class="col-md-6">
			<form class="forma" action="{{ route('sendmail') }}" method="post">
				<p>Name:</p>
				<input type="text" name="name">
				<p>Email:</p>
				<input type="email" name="email">
				<p>Your message here:</p>
				<textarea type="text" name="textarea" id="textarea"></textarea>
				<button class="btn" type="submit">Send</button>
				{{ csrf_field() }}
			</form>
			</div>
			<div class="col-md-6">
			<h3><span class="glyphicon glyphicon-map-marker"></span> Address</h3>
			<p>Heisenbergweg 31<br>D-85540 Haar<br>Germany</p>
			<h3><span class="glyphicon glyphicon-earphone"></span> Phone</h3>
			<p>+49 171 5286698</p>
			</div>
			</div>
		</div>
		<div class="col-md-6">
			<img class="portret img img-responsive" src="../storage/images/portret.jpg">
			<p class="signature"><i>Ulrich Kolzenburg, Interim Manager</i></p>
		</div>
	</div>
</div>



@endsection