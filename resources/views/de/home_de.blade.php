@extends('de.layout_de')


@section('title', 'CCE Management &copy;')

@section('description', 'Ein globaler Anbieter von zeitlich befristeten Managementressourcen für Unternehmen jeder Größe.')

@section('content')

<div class="body-bg">


<div class="container-fluid">

	<div class="res-bg">
		<h1>Willkommen bei CCE Management!<br> Your Interim Manager</h1>
	</div>


	<div class="row">
		<div class="col-md-offset-2 col-md-8 background">
			<h1>Willkommen bei<br> CCE Management.</h1>
		</div>
	</div>

</div>









<div class="container-fluid about-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-about">
				<h3>CCE Management ist...</h3>
				<hr>
				<p>Ein globaler Anbieter von zeitlich befristeten Managementressourcen für Unternehmen jeder Größe. Diese können bestehende Managementstrukturen in Sonder­situationen verstärken, in Konflikt- und in Krisensituationen verändern und so den Unternehmenserfolg sichern.</p>
		</div>

	</div>
</div>







<div class="container-fluid exp-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-exp">
				<h3>Erfahrung</h3>
				<hr>
				<p>Entstanden aus mehr als 35 Jahren Erfahrung in Medizintechnik, Life-Sciences (Pharma-/Diagnostica),  Sicherheitstechnik, Zahlungsverkehrssystemen, Telekommunikation (SIMs), Ausweissystemen, Halbleitertechnik, Automobil und Verteidigungstechnik.</p>
		</div>

	</div>
</div>



<div class="container-fluid ser-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-ser">
				<h3>Dienstleistungen</h3>

				  @foreach ($services as $english) 

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $english->id !!}" aria-expanded="false">{{ $english->title }}<span class="glyphicon glyphicon-chevron-down"></span></a>
        </h4>
      </div>
      <div id="collapse{!! $english->id !!}" class="panel-collapse collapse">
        <div class="panel-body">{!!html_entity_decode($english->content)!!}</div>
      </div>
    </div>

 				@endforeach
				
		</div>

	</div>
</div>





<div class="container-fluid ser-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-ser">
				<h3>Success Stories</h3>

			<div class="row">
			<div class="col-md-2"></div>

			@foreach ($de_stories as $story1) 

			<div class="col-md-4">

    		<div class="panel panel-default">
     			 <div class="panel-heading">
       				 <h4 class="panel-title">
        		 	 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse100" aria-expanded="false">{{ $story1->title }}<span class="glyphicon glyphicon-chevron-down"></span></a>
       				</h4>
      			</div>
     		 <div id="collapse100" class="panel-collapse collapse">
      
      	     <div class="panel-body">
      	     		<p>{!!html_entity_decode($story1->description)!!}</p><br>
					<a target="blank" href="{!! $story1->pdf !!}" download><button class="btn btn-stories">DOWNLOAD</button></a>
      	     </div>
				
			</div>

			</div>

			</div>
			
			@endforeach


        </div>
       </div>

 			
				
		</div>

	</div>





<div class="container-fluid values-home">
	<div class="row">
		<div class="col-md-2 left-about">
			
		</div>
		<div class="col-md-8 center-values">
		<h3>CCE-Management</h3>

			<div class="col-md-4 val1">
				<h4>Confidence</h4>
				<p>Das erlaubt, in gegenseitiger Unterstützung auch in Phasen von Unsicherheit Perspektiven zu entwickeln und konsequent umzusetzen. </p>
			</div>
			<div class="col-md-4 val2">
				<h4>Competence</h4>
				<p>Für sinnvolle, methodisch klar hinterlegte Ansätze in F&E- und Projektmanagement.</p>
			</div>
			<div class="col-md-4 val3">
				<h4>Excellence</h4>
				<p>Für die beste, pragmatische, unternehmensspezifisch passende Lösung.</p>
			</div>
				<div class="col-md-12">
			<h5>Ihr Partner der Wahl.</h5>
			</div>

		</div>
		<div class="col-md-2 right-about">
			
		</div>
	</div>
</div>




<div class="container-fluid contact-home">
	<div class="row">
		<div class="col-md-offset-2 col-md-6 left-about">
			<div class="row">	
	
				<a href="/de/contact"><button class="btn btn-contact1">KONTAKTIERE UNS <span class="glyphicon glyphicon-phone"></span></i></button></a>
			
	
				<a href="/de/impressum"><button class="btn btn-contact1">IMPRESSUM <span class="glyphicon glyphicon-list-alt"></span></button></a>
			
			
				<a href="#"><button class="btn btn-contact2">NACH OBEN <span class="glyphicon glyphicon-chevron-up"></span></button></a>
			
			</div>
		</div>
	</div>
</div>
	
</div>

@endsection