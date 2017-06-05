@extends('en.layout')

@section('title', 'IMPRINT | CCE Management')

@section('description', 'Imprint page for CCE Management, a global provider for timely limited management resources for companies of any size.')

@section('content')
<div class="container cont">
</div>

<div class="container-fluid imprint-home">
	<div class="row">
		<div class="col-md-2"></div>

		<div class="imprint-middle col-md-8">
				@foreach ($imprints as $im) 

				{{ $im->text }}

				@endforeach

				<a href="https://webftp.all-inkl.com/"><button class="btn btn-default pull-right">Host Login</button></a>

       <div id="header">
      <h1><a title="zur Startseite" href="index.php">WebFTP - ALL-INKL.COM</a></h1>
    </div>
    <div class="clearer"></div>
    <div id="login">
      <h2>Login</h2><div class="box error" onclick="javascript:this.style.display='none'">Please activate Javascript and refresh the browser window!</div>      <div class="panel">
        <form onsubmit="return loginfunc();" action="https://webftp.all-inkl.com/index.php" method="post" name="loginform">
            <div class="fieldwrap">
                <span class="label">Username: </span>
                <input name="user" type="text" class="txt" value="" size="30" tabindex="1" />
            </div>
            <div class="fieldwrap">
                <span class="label">Password: </span>
                <input class="txt" tabindex="2" name="pass" type="password" size="30"/>
            </div>
            <div class="fieldwrap">
                <span class="label">Directory: </span>
                <input class="txt" tabindex="3" name="pfad" type="text" size="30" value="/"/>
                <input name="ssl" id="ssl" type="checkbox"checked="checked" tabindex="4"/><label for="ssl"><span style="font-weight: bold;">SSL</span></label>
            </div>
            <div class="fieldwrap">
                <span class="label">FTP mode: </span>
                <input id="bin" name="ftpmode" type="radio" value="FTP_BINARY" tabindex="5"/><label for="bin"><span>binary</span></label>
                <input id="ascii" name="ftpmode" type="radio" value="FTP_ASCII" tabindex="5"/><label for="ascii"><span>ASCII</span></label>
                <input id="auto" name="ftpmode" type="radio" checked="checked" value="FTP_AUTO" tabindex="5"/><label for="auto"><span>auto (recommended)</span></label>
            </div>
            <div class="fieldwrap">
                <span class="label">Language: </span>
                <input id="de" tabindex="6" name="language" type="radio" value="deutsch"/><label for="de"><span class="lang-de">Deutsch</span></label>
                <input id="en" tabindex="6" name="language" type="radio" checked="checked" value="englisch"/><label for="en"><span class="lang-en">English</span></label>
                <input id="pl" tabindex="6" name="language" type="radio" value="polnisch"/><label for="pl"><span class="lang-pl">Polski</span></label>
            </div>
            <div class="clearer"></div>
            <input name="login" type="hidden" value="1"/>
            <input class="submitbtn" tabindex="8" name="submit" type="image" alt="Login" src="layout/all-inkl-design/buttons/en/login.png"/>
        </form>
      </div>
    </div>
      </div>
    </div>

		</div>
<div class="col-md-2"></div>
	
	</div>
</div>




@endsection