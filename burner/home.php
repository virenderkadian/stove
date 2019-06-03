<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-image: url("background.png");
  		background-repeat: no-repeat;
  		background-position: top right; 
  		background-size: 600px 600px;
  		margin-left: 60px;
  	}
  	@media screen and (max-width: 767px) {
	    body {
	       
	        background-image: url();
	       /* background-size: auto auto;*/
	       margin-left: 30px;
	    }
	    
    
	}
  	.box{
  		height: 270px;
  		width: 270px;
  		padding-top: 15px;
  		padding-left: 15px;
  		padding-right: 15px;
  		text-align: left;
  		margin-left: 0px;
  		border-radius: 6px;
  		border-style: none;
  		background: white;
  		/*border: 1px solid #606266;*/
    	box-shadow: 5px 5px 10px #606266;



  	}
  	.box:hover{
  		background: #bb5959;
  		color: white;
  	}
  	.box:hover>.clrhov{
  		fill: #ffffff;
  	}
  	@media screen and (max-width: 767px){
  		.box{
  			margin-top: 15px; 
  		}
  	}
  	.stove{
  		/*box-shadow: 5px 5px 0px #606266;*/
  		height:307 ;
  		width: 530px;
  	}
  	.type{
  		text-align: center;
  		width: 1170px;
  		background: #bb5959;
  		padding-top: 45px;
  		padding-left: 15px;
  		padding-right: 15px;
  		border-radius: 6px;
  		color: white;
  		margin-left: -15px;
  	}
  	@media screen and (max-width: 767px) {
	    .type {
	       
	        width: inherit;
	    }
	    .stove{
	  		/*box-shadow: 5px 5px 0px #606266;*/
	  		height:150;
	  		width: 300;
	  		margin-top: -50px;
	  	}
    
	}
	.btn1{
		height: 72px;
		width: 72px;
		background-color: #944747;
		border-radius: 50%;
		color: white; 
		border-style: none;
		margin-left: 80px;
	}
	.btn1:hover{
  		background: white;
  		color: black;
  	}
  	@media screen and (max-width: 767px) {
	    .btn1 {
	       
	        margin-left: auto;
	    }
	    
    
	}
  	.btn2{
		height: 31px;
		width: 31px;
		background-color: #944747;
		border-radius: 50%;
		color: white; 
		border-style: none;
		font-weight: 1000;
	}
	.btn2:hover{
  		background: white;
  		color: #bb5959;
  	}
  	.social{
  		height: 29px;

  		width: 29px;
  	}
  	.modal {
  		
  	}
  	.vertical-alignment-helper {
  	    display:table;
  	    height: 100%;
  	    width: 100%;
  	}
  	.vertical-align-center {
  	    /* To center vertically */
  	    display: table-cell;
  	    vertical-align: middle;
  	    width: 970px;
  	    height: 658px;
  	}
  	@media screen and (max-width: 767px) {
	    .vertical-align-center {
	       
	        width: inherit;
	        height: inherit;
	    }
	    .stove{
	  		/*box-shadow: 5px 5px 0px #606266;*/
	  		height:150;
	  		width: 300;
	  		margin-top: -50px;
	  	}
	  	
    
	}
  	.modal-content {
  	    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
  	    width:inherit;
  	    height:inherit;
  	    /* To center horizontally */
  	    margin: 0 auto;
  	}
  	.Offer{
  		margin-left: 100px
  	}
  	.of-carousel{
  					width: 1170px;
  					margin: 0 -15px;
  					position: relative;
  					/* width: max-content; */
  					height: 200px;
  					padding: 0;
  					/*margin-left: 100px;*/
  					text-align: center;
  			  	}
  	@media screen and (max-width: 767px){
  		.of-carousel{
  			width: inherit;
  			margin-left: 0px;
  		}
  		.Offer{
  			margin-left: 0px;
  		}
  		.modal-content {
  	    /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
  	    width:inherit;
  	    height:inherit;
  	    /* To center horizontally */
  	    margin: 0 auto;
  	}
  	}
  	.carousel-inner{
  					position: relative;
  					width: max-content;
  					height: 100%;
  					left: 0;
  				}
  	.carousel-item{
  					display: inline-block;
  					height: 170px;
  					width: 380px;
  					background-color: #fff;
  					border-radius: 5px;
  					box-shadow: 0px 0px 10px 1px #777, 0px 5px 5px 0 rgba(0, 0, 0, 0.5);
  					margin: 20px;
  			  }
  	.cover{
  				  position: absolute;
  				  height: 100%;
  				  width: 100%;
  				  top: 0;
  				  text-align: center;
  				  background: linear-gradient(to right, rgba(255,255,255,0.9), rgba(255,255,255,0.9) 2%, transparent 10%, transparent 90%, rgba(255,255,255,0.9) 95%, rgba(255,255,255,0.9));
  			  }
  	.modalimage{
  		height: auto;
  		width: 260px;
  		box-shadow: 5px 5px 10px #606266;
  		border-radius: 5px;
  	}
  	.contact:hover{
  		background: #d2d4d8;
  		/*color: black;*/
  	}
  	.modbod{
  		margin-left: 140px;

  	}
  	@media screen and (max-width: 767px){
  		.modbod{
  		margin-left: 0px;

  	}
  	}
  	#more {display: none;}
  	.navbar-nav{
  		margin-left: 125px;
  	}
  	@media screen and (max-width: 767px){
  		.navbar-nav{
  		margin-left: 0px;
  	}
  	}
  	</style>
</head>
<body style="margin-left: 60px">

	<nav class="navbar">
	  <div class="container-fluid">
	    <div class="navbar-header" style="">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    	        <span class="icon-bar navbar-inverse"></span>
	    	        <span class="icon-bar navbar-inverse"></span>
	    	        <span class="icon-bar navbar-inverse"></span>                        
	    	      </button>
	      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
	      	<img src="icons8-fire_element.svg">
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    <ul class="nav navbar-nav " style="font-size: 18px;">
	      <li ><a href="#" style="color:#bb5959 ">Home</a></li>
	      <li><a href="#" style="color:#000000">Product</a></li>
	      <li><a href="#" style="color:#000000 ">Team</a></li>
	      <li><a href="#" style="color:#000000 ">Blogs</a></li>
	      <li>
	      	<button class="contact" type="button" data-toggle="modal" data-target="#Modal2" style="color:#000000; border-style:none; background-color: white;margin-bottom: 0;height: 50px;">
	      Contact Us
	  		</button>
	  	  </li>
	    </ul>
	    </div>
	  </div>
	</nav>
	<div class="container " style="margin-left: 0;margin-top: 100 ; height: 515;text-align: left;">
		<div class="row">
			<div class="col-sm-5">
				<div>
					<span style="text-align: left; width: 489px;height: 127px; font-size: 46px;color:#090909 ">
						<h1 style="font-size: 46px;color:#090909 ">Bringing families together… since 1990</h1>
					</span>
					<span style="text-align: left; width: 561px;height: 101px; font-size: 46px;color:#090909 ">
						<h1 style="font-size: 18px;color:#646464 ">Gas stove’s basic desctoption showing what can be achieved using this revolutionary gas stove and all of its main <span id="dots">...</span><span id="more"> ferature can come in this hero section</span></h1>
					</span>
					<button onclick="showmore()" id="myBtn" style="background-color: #bb5959; width: 172;height: 48; border-radius: 10px;border-style: none;margin-top: 24px; color: white;font-size: 18px">
						Show me more
					</button>

					
				</div>
			</div>
		</div>
		
	</div>
	<div class="container text-center" style="margin-top: 11px;width: 100%;text-align: center;">
		<div class="row " style="text-align: center">
			<div style="text-align: center; height:64 ;">
				<span style=" color: black;font-weight: bold;font-size: 36px;width:480 px;">
					<h1>Lets understand the working</h1>
				</span>
				<span style="font-size: 18px;height:64 ;color: #646464;width: 480px">
				The Gas stove that we make is divided into several different pieces<br> and here is the part by part description of the same
				</span>
			</div>
		
		</div>
		<div class="row" style="margin-top: 180px; text-align: left;">
			<div class="col-sm-3">
				<button class="box" style="border-style: none;" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Burner</span>
					<br><br>
					<img src="Burner.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
					
				</button>
				
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Mixing Tubes</span>
					<br><br>
					<img src="Mixing Tube.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Gas Stove cock</span>
					<br><br>
					<img src="Gas Stove cock.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Gas Regulator</span>
					<br><br>
					<img src="Regulator.svg"><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
					
				</button>
				
			</div>
		</div>
		<div class="row" style="margin-top: 30px; text-align: left;">
			<div class="col-sm-3">
				<button class="box active" type="button" data-toggle="modal" data-target="#Modal1" >
					<span style="font-size: 20px">Gas Pipe/Hose</span>
					<br><br>
					<img src="Pipes.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
					
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Regulator Knob</span>
					<br><br>
					<img src="Regulator Knob.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Jet</span>
					<br><br>
					<img src="Jet.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Panspot</span>
					<br><br>
					<img src="Panspot.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
					
				</button>
				
			</div>
		</div>
		<div class="row" style="margin-top: 30px; text-align: left;">
			<div class="col-sm-3">
				<button class="box active" type="button" data-toggle="modal" data-target="#Modal1" >
					<span style="font-size: 20px">CRC gas stove pipe</span>
					<br><br>
					<img src="CRC.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
					
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Dip Tray</span>
					<br><br>
					<img src="Dip Tray.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>
			<div class="col-sm-3">
				<button class="box" type="button" data-toggle="modal" data-target="#Modal1">
					<span style="font-size: 20px">Body</span>
					<br><br>
					<img src="Body.svg"><br><br>
					<span style="font-size: 14px">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
				</button>
				
			</div>


			<div style="text-align: center;margin-top: 508px;">
				<div  style="text-align: center;">
					<img class="stove" style="" src="Stove iso.png">
					
				</div>
		
			</div>
		</div>
		<div class="container" style="margin-top: 275px">
			<div class="row " style="text-align: center">
				<div class="type" style="">
					<span style=" color: white;font-weight: bold;font-size: 36px;">
						<h1>Types of Stoves Available</h1>
					</span>
					<span style="font-size: 18px;height:64 ;color: white;">
					Take your pick from the supply chain and participate in agribusiness projects that are<br> backed up not only by Zou, but also by the best land, family heritage, innovation and<br> overall superior expertise.
					</span>
			
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-12">
							<button class="btn1">01</button>
						
							<button class="btn1">02</button>
						
							<button class="btn1">03</button>
						
							<button class="btn1">04</button>
						</div>
					</div>
					<div style="margin-top: 40px;">
						<img src="Burner1.svg">
					</div>
						<div class="row" style=" margin-top: 35px">
							  			<div class="" style="">
							  				<button class="btn2" ><</button>
							  			
							  				<button class="btn2" >></button>
							  			</div>
							  		</div>
				
					</div>
		
				<!-----here-->
		
			</div>
			<div class="Offer" style=" margin-top: 120px;height:101px ;width: 411px;margin-bottom: 30px">
				<span>
					<h1 style="font-size: 36;text-align: left;">Some of the Services offered by us…</h1>
				</span>
			</div>
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	<!-- multiple divs here -->
	  		<div class="of-carousel" style="overflow: hidden; ">
	  			<div class="carousel-inner">
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Buy Individual Parts</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Bulk Orders</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Contact For Repairs</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Buy Individual Parts</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Bulk Orders</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  				<div class="carousel-item">
	  					<h1 style="padding-left: 15px;padding-top: 10px;font-size: 24px; text-align: left;"> Contact For Repairs</h1>
	  					<span style="padding-left: 15px;padding-top: 10px;font-size: 14px; text-align: left;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</span>
	  				</div>
	  			</div>
	  			<div class="cover"></div>
	  		</div>
	  		<div class="row" style="">
	  			<div class="" style="">
	  				<button class="btn2" id="slide-left"><</button>
	  			
	  				<button class="btn2" id="slide-right">></button>
	  			</div>
	  		</div>
	  	</div>
</div>




		<div class="container">
			<div class="row" style="margin-top: 150px;text-align: center;">
				<div class="type" style="height:auto;">
					<div>
						<span style=" color: white;font-weight: bold;font-size: 36px; ">
						The Fututre of stove <b>Asilverse Stove</b>
					</span>
				
					</div>
					<br>
					<div style=" ">
						<button style="background-color: white; width: 172;height: 48; border-radius: 10px;border-style: none;margin-top: 24px; color: #bb5959;font-size: 18px">
							Inquire
						</button>
					</div>
					<br>
				</div>
			
			</div>
		</div>	
			<hr>
		<div class="container" style="margin-top: 80px;height: auto;">
			<div class="row">
				<div class="col-sm-4" style="text-align: left;">
					<a href="#" class="social" style="height: 29px;width: 29px ;">
						<img src="icons8-facebook.svg" style="height: 29px;width: 29px;margin-left: 8px">
					</a>
					<a href="#" class="social" style="height: 29px;width: 29px;margin-left: 8px">
						<img src="icons8-instagram_new.svg" style="height: 29px;width: 29px;margin-left: 8px">
					</a>
					<a href="#" class="social" style="height: 29px;width: 29px;margin-left: 8px">
						<img src="icons8-twitter.svg" style="height: 29px;width: 29px;margin-left: 8px">

					</a>
				</div>
				<div class="col-sm-8" style="text-align: right;">
					<span style="font-size: 18px;color: black">
						© Copyright 2018. Asilverse (ABN 45 4545 87363).
					</span>
				</div>
			</div>
		</div>
		<div style="height: 300px">
		
		</div>

<!-----------------------------------------------------Modal------------------------------------------------------------------------------------->


		<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    	<div class="vertical-alignment-helper">
	        	<div class="modal-dialog vertical-align-center">
	            	<div class="modal-content">
	                	<div class="modal-header">
	                    	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

	                    	</button>
	                     	<div class="row" >
	                     		<div style="margin-top: 25px; text-align: left; padding-left: 15px;padding-top: 15px">
	                     			<span style="text-align: left;">
	                     				<img src="Burner.svg">
	                     			</span>
	                     			<span style="text-align: left;font-size: 24px;margin-left: 10px"> Burner</span>
	                     		</div>
	                     	</div>

	                	</div>
	                	<div class="row" style="text-align: center;">
	                		<div class="col-sm-4">
	                			<img src="Double.svg" class="modalimage">
	                		
	                		</div>
	                		<div class="col-sm-4" class="modalimage">
	                			<img src="Double.svg" class="modalimage">
	                		</div>
	                		<div class="col-sm-4" class="modalimage">
	                			<img src="Double.svg" class="modalimage">
	                		</div><br><br>
	                		<div style="text-align: center; margin-top: 15px">
	                			<p style="padding-left: 15px; text-align: center;"></p>
	                		</div>
	                	</div>
	                	<div class="modal-body">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione . Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores . Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
	                	</div>
	                	<div class="modal-footer">
	                    	<button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 120px;">Close</button>
	                	</div>
	            	</div>
	        	</div>
	    	</div>
		</div>



		<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    	<div class="vertical-alignment-helper">
	        	<div class="modal-dialog vertical-align-center">
	            	<div class="modal-content" style="background-color: #bb5959;height: auto;">
	                	<div class="modal-header">
	                    	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

	                    	</button>
	                	</div>
	                
	                	<div class="modal-body" >
	                  		<div class="modbod">
	                		<div class="row">
	                			<div class="col-sm-6">
	                				<div style="font-size:18 ;color: white;">
	                					Name
	                				</div>
	                				<div>
	                					<input type="" name="" style="height: 40px;width: 294px;background-color: #da8686;border-style: none;font-size: 18px;color: white;">
	                				</div>
	                			</div>
	                			<div class="col-sm-6">
	                				<div style="font-size:18 ;color: white;">
	                					Subject
	                				</div>
	                				<div>
	                					<input type="" name="" style="height: 40px;width: 294px;background-color: #da8686;border-style: none;font-size: 18px;color: white;">
	                				</div>
	                			</div>
	                		</div>
	                		<div>
	                			<div style="font-size:18 ;color: white;">
	                				Message
	                			</div>
	                			<div>
	                				<input type="" name="" style="height: 264px;width:initial; background-color: #da8686;border-style: none;font-size: 18px;color: white;">
	                			</div>
	                	</div>
	                	<div>
	                		<button style="background-color: white; width: 172;height: 48; border-radius: 10px;border-style: none;margin-top: 24px; color: #bb5959;font-size: 18px">
						Send
							</button>
	                	</div>
	                </div>
	            </div>
	            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 120px;">Close</button>
	            </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------------------script------------------------------------------------------------------------->


	<script>
		var count = $('.carousel-inner').children().length
		var time=35
		console.log('Left threshold', ((1-count)*time))
		function right(){
			$('#slide-left').off('click')
			console.log('To left, got', $('.carousel-inner')[0].style.left)
			if(Number($('.carousel-inner')[0].style.left.slice(0, -1)) > ((-count)*time))
				$('.carousel-inner').animate({left: '-=35%'}, 500, function(){$('#slide-left').on('click', left)})
			else
				$('#slide-left').on('click', left)
		}
		function left(){
			$('#slide-right').off('click')
			console.log('To right, got', $('.carousel-inner')[0].style.left)
			if(Number($('.carousel-inner')[0].style.left.slice(0, -1)) <= -5)
				$('.carousel-inner').animate({left: '+=35%'}, 500, function(){$('#slide-right').on('click', right)})
			else
				$('#slide-right').on('click', right)
		}
		$('#slide-left').on('click', left)
		$('#slide-right').on('click', right)
	</script>
				





				<script>
				function showmore() {
				  var dots = document.getElementById("dots");
				  var moreText = document.getElementById("more");
				  var btnText = document.getElementById("myBtn");

				  if (dots.style.display === "none") {
				    dots.style.display = "inline";
				    btnText.innerHTML = "Show me more"; 
				    moreText.style.display = "none";
				  } else {
				    dots.style.display = "none";
				    btnText.innerHTML = "Read less"; 
				    moreText.style.display = "inline";
				  }
				}
				</script>    



</body>
</html>