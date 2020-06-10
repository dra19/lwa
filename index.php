<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="fav.png" type="image/jpg" size="50px">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LWA</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <style>
        .kotak {
		width: 350px;
		background: white;
		border-radius: 10px;
		/*meletakkan form ke tengah*/
		margin: 80px auto;
	}
    </style>
</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo teal-text text-lighten-2">LWA</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" class="modal-trigger">About</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">About</a></li>
                <li><a href="#">versi 1.0</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div id="index-banner">
    	<div class="section no-pad-bot">
    		<div class="container">
    			<h3 class="center brand-logo teal-text text-lighten-2">Langsung <i class="material-icons">play_arrow</i> WA</h3>
    			<center><i>Kirim pesan WA ke nomor yang tidak dikenal tanpa save kontak.</i></center>
    			<div class="row kotak">
    				<form method="post">
    					<?php
    					if(@$_POST){
    						$nohp  = $_POST['nohp']; 
    						if(!preg_match('/[^+0-9]/',trim($nohp))){

    							if(substr(trim($nohp), 0, 3)=='62'){
    								$hp = trim($nohp);
    							}
    							elseif(substr(trim($nohp), 0, 1)=='0'){
    								$hp = '62'.substr(trim($nohp), 1);
    							}
    						}
    						echo "<script>window.location = 'https://api.whatsapp.com/send?phone=$hp'</script>";
    					}
    					?>
    					<div class="row">
    						<div class="input-field col s12">
    							<i class="material-icons prefix">account_circle</i>
    							<input name="nohp" id="number" type="tel" pattern="[0-9].{8,20}"
    							title="Nomor harus valid!" class="validate" required>
    							<label for="number">Nomor HP</label>
    							<span class="helper-text" data-error="Nomor tidak valid!" data-success="Ok.">format
    							nomor : 08xxxxxx</span>
    						</div>
    					</div>
    					<div class="row">
    						<div class="input-field col s12 center">
    							<button type="submit" class="btn waves-effect waves-light teal lighten-1 pulse">Kirim Pesan <i class="material-icons right">send</i></button>
    						</div>
    					</div>
    				</form>
    			</div>
    			<div class="container">
    				<div class="kotak">
    					<small style="align-content:left">
    						<i>
    							<ul>Petunjuk :
    								<li>-Ketik/paste nomor hp tujuan dengan format 08xxxxxx</li>
    								<li>-Kirim pesan</li>
    								<li>-Pilih buka dengan Whatsapp</li>
    							</ul>
    						</i>
    					</small>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            Made with <i class="material-icons">favorite_border</i> by <a class="brown-text text-lighten-3"
                href="https://instagram.com/indra.naser">Indra Naser</a>
        </div>
    </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script src="materialize/js/init.js"></script>
</body>

</html>