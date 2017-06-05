

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='shortcut icon' type='image/x-icon' href='storage/images/favicon.ico' sizes='16x6' />
        
        <meta name="description" content="@yield('description')" />

        <meta name="author" content="www.ivanovdesign.com">
        
        <meta name="keywords" content="CCE Management, Interim Management, Management Consulting, Management Germany, Project Menagement">

        <title>@yield('title')</title>
  
              
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 
        
    </head>
    <body>
        
        <!-- main navigation -->

    

        
      <div class="container-fluid">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="/">
    <img class="logo" src="storage/images/logo final.png" width="30" height="30" alt="">
  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/contact">CONTACT</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li><a href="{!! url('de/');!!}"><img id="flag" src="storage/images/germ.png"></a></li>
         
        <li><a href="{!! url('/en');!!}"><img id="flag" src="storage/images/brit.png"></a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
           
     
    </nav>

    </div> <!-- /container  -->




        <!-- end -->

        @yield('content')  


 <div class="container-fluid footer">
    <footer class="footer">
        <p><a href="/">&copy; CCE Management 2017</a> | <a href="/contact">Contact</a></p>
    </footer>
 </div>             

  <script
     src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
     crossorigin="anonymous"></script>

  <script src="/js/bootstrap.js" crossorigin="anonymous"></script>   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
  <script src="/js/search.js"></script>


  
    </body>
</html>
