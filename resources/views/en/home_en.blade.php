@extends('en.layout')

@section('title', 'Your Interim Manager | CCE Management &copy;')

@section('description', 'A global provider for timely limited management resources for companies of any size.')

@section('content')

<div class="body-bg">


<div class="container-fluid">

	<div class="res-bg">
		<h1>Welcome to CCE Management!<br> Your Interim Manager</h1>
	</div>


	<div class="row">
		<div class="col-md-offset-2 col-md-8 background">
		<h1>Welcome to<br> CCE Management.</h1>
		</div>
	</div>

</div>









<div class="container-fluid about-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-about">
				<h2>CCE Management is...</h2>
				<hr>
				<p>A global provider for timely limited management resources for companies of any size. This can support existing management structures in special situations, facilitate change in situations of conflict and crisis and by this ensure the success of the company.</p>
		</div>

	</div>
</div>







<div class="container-fluid exp-home">
	<div class="row">
		<div class="col-md-2 left-about">
			
		</div>
		<div class="col-md-8 center-exp">
				<h2>Experience</h2>
				<hr>
				<p>Founded on more than 35 years of experience in medical technology, <br>Life-Sciences (Pharma-/Diagnostica),  Security Technology, Payment Systems, Telecommunication (SIMs), ID-systems, Semiconductor, Automotive and Defence Industry.
				Expertise of more than 20 years of management experience in R&D, local and global.</p>
		</div>
		<div class="col-md-2 right-about">
			
		</div>
	</div>
</div>





<div class="container-fluid ser-home">
	<div class="row">
		<div class="col-md-2 left-about">
			
		</div>
		<div class="col-md-8 center-ser">
				<h2>Services</h2>

				  @foreach ($englishes as $english) 

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
		<div class="col-md-2 right-about">
			
		</div>
	</div>
</div>



<div class="container-fluid ser-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-ser">
				<h2>Success Stories</h2>


			@foreach ($en_stories as $story) 

			<div class="col-md-12">

    		<div class="panel panel-default">
     			 <div class="panel-heading">
       				 <h4 class="panel-title">
        		 	 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $story->id !!}" aria-expanded="false">{{ $story->title }}<span class="glyphicon glyphicon-chevron-down"></span></a>
       				</h4>
      			</div>
     		 <div id="collapse{!! $story->id !!}" class="panel-collapse collapse">
      
      	     <div class="panel-body">
      	     		<p>{!!html_entity_decode($story->description)!!}</p><br>
      	     </div>
				
			</div>

			</div>
			</div>
			
			@endforeach


        </div>

 			
				
		</div>
	</div>








<div class="container-fluid values-home">
	<div class="row">

		<div class="col-md-offset-2 col-md-8 center-values">

			<h3>CCE-Management</h3>

			<div class="col-md-4 val1">
				<h4>Confidence</h4>
				<p>That enables mutual support even in phases of uncertainty to develop and realize new perspectives </p>
			</div>
			<div class="col-md-4 val2">
				<h4>Competence</h4>
				<p>For sensible, methodically clear approaches in R&D- and project management</p>
			</div>
			<div class="col-md-4 val3">
				<h4>Excellence</h4>
				<p>For the best, pragmatic, company specific solution.</p>
			</div>
			<div class="col-md-12">
			<h5>Your partner of choice.</h5>
			</div>

		</div>


	</div>
</div>




<div class="container-fluid contact-home">
	<div class="row">
		<div class="col-md-offset-2 col-md-6 left-about">
			<div class="row">	
	
				<a href="/contact"><button class="btn btn-contact1">CONTACT US<span class="glyphicon glyphicon-phone"></span></i></button></a>
				<a href="/imprint"><button class="btn btn-contact1">IMPRINT <span class="glyphicon glyphicon-list-alt"></span></button></a>
				<a href="#"><button class="btn btn-contact2">TO TOP <span class="glyphicon glyphicon-chevron-up"></span></button></a>
			
			</div>
		</div>
	</div>
</div>
	
</div>


@endsection