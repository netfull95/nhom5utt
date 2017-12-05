<!DOCTYPE html>
<html>
  <head>
  	    <title>Đọc truyện cho trẻ</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  	<link href="css/_index.css" type="text/css" rel="stylesheet"/>
  	<!-- <link href="css/_index.scss" type="text/scss" rel="stylesheet"/> -->
  </head>
  <body style="width: 100%">
	<div id="nightmode" >
    </div>				
	  	<!-- modal -->
			<div class="modal fade"  id="myModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content" style="background-image: url('data/picture/u130.png'); ">
			    	<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Đăng nhập</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="false">Đăng ký</a>
					  </li>
					  <button type="button" class="close" data-dismiss="modal" style="margin-left: 11em"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
					      <form role="form">
					      <div class="modal-body">
					        
					          <div class="form-group">
					            <label for="exampleInputEmail1" style="    font-size: 30px;">Tên đăng nhập</label>
					            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Tên đăng nhập" style="    height: 60px;">
					            <label for="exampleInputPassword1" style="    font-size: 30px;">Mật khẩu</label>
					            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu" style="    height: 60px;">
					          </div>
					          <img src="data/picture/u135.png" style="margin-left: -24em; margin-top: -256px; width: 27em;">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default " style="font-size: 20px;">Đăng nhập</button>
					        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 20px;">Thoát</button>
					        
					      </div>
					      </form>
						</div>
						<div class="tab-pane fade" id="signin" role="tabpanel" aria-labelledby="signin-tab">
							<form role="form">
					      <div class="modal-body">
					          <img src="data/picture/login.png" style="width: 29em;">
					          <div class="form-group form-group-sm">
					            <label for="exampleInputEmail1" style="    font-size: 30px;">Tên tài khoản</label>
					            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên đăng nhập" style="    height: 60px;">
					          </div>
					          <div class="form-group">
					            <label for="exampleInputPassword1" style="    font-size: 30px;">Mật khẩu</label>
					            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu" style="    height: 60px;">
					          </div>
					          <img src="data/picture/iron-man.png" style="    margin-left: 28em; margin-top: -22em; width: 20em;">
					          <hr>
					          <div class="form-group">
					            <label for="exampleInputPassword1" style="    font-size: 30px;">Tên bé</label>
					            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Tên bé" style="    height: 60px;">
					          </div>
					          <div class="form-group">
					            <label for="exampleInputPassword1" style="    font-size: 30px;">Ngày sinh bé</label>
					            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ngày sinh bé" style="    height: 60px;">
					          </div>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default " style="font-size: 20px;">Đăng ký</button>
					        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 20px;">Thoát</button>
					        
					      </div>
					      </form>
						</div>
					</div>
			    </div>
			  </div>
			</div>
	<!--  -->

  	<div class="top_content" id='topContent' style=" width: 100%;
	height: 1000px;
	position: relative;
    z-index: 1;
    background-image: url(data/picture/bg2.png) ;
   	background-repeat: repeat-x;
   	opacity: 1 !important">
  		<div class="container">
		  <div class="row">
		    <div class="col">
		     	<img src="data/picture/u23.png" id="imgSunMoon" data-toggle="tooltip" data-placement="top" title="Thay đổi chế dộ xem" onclick="changeSetting()" style="width: 13em; margin-left: -29%; margin-top: 5em; cursor: pointer;">
		    </div>
		    <div class="col-6">
  	 			<img src="data/picture/Vector-High-Quality-PNG.png" style="width: 37em">
		    </div>
		    <div class="col">
          		<audio id="dangnhap" src="data/voice/Đăng nhập.m4a"></audio>
		     	<button type="button" class="btn btn-primary" onmouseover="document.getElementById('dangnhap').play()" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
		     		Đăng nhập / Đăng ký
		     	</button>

		     	<audio id="mute" src="data/voice/Tắt âm thanh.m4a"></audio>
				<button type="button" data-toggle="tooltip" data-placement="bottom" title="Tắt âm thanh" onclick="pauseAudioIntro()" onmouseover="document.getElementById('mute').play()" type="button" style="background: none; border: none; ;">
		     		<img src="data/picture/mute.ico" style="width: 2em; margin-left: 1em;" >
		     	</button>
		     	<img src="data/picture/u24.png" style="width: 16em; margin-left: 46%; margin-top: 2em;">
		    </div>
		  </div>
		</div>
	
		<!--  -->
     <div class='top_menu'>
       <ul class="nav justify-content-center">
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link active" href="#"> Truyện Cổ Tích </a> -->
          <audio id="cotich" src="data/voice/cotich.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('cotich').play()">
          	<a href="?luachon=truyencotich">
            	<img src="data/picture/buttons_PNG34.png" style="width: 130px; height: 52px">
            </a>
          </button>
        </li>
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Truyện Dân gian</a> -->
          <audio id="dangian" src="data/voice/dangian.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('dangian').play()">
          	<a href="?luachon=truyendangian">
            	<img src="data/picture/buttons_PNG433.png" style="width: 130px;     height: 52px">
            </a>
          </button>
        </li>
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Truyện Hiện Đại</a> -->
          <audio id="truyenhiendai" src="data/voice/truyenhiendai.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('truyenhiendai').play()">
          	<a href="?luachon=truyenhiendai">
            	<img src="data/picture/buttons_PNG47.png" style="width: 130px; height: 50px;">
            </a>	
          </button>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Tập Thơ</a> -->
          <audio id="taptho" src="data/voice/taptho.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('taptho').play()">
          	<a href="?luachon=taptho">
            	<img src="data/picture/buttons_PNG51.png" style="width: 130px;">
           	</a>
          </button>
        </li>
      </ul>
     </div>
     <div class="main_content" style="width: 74%;
          margin-top: 1em;
          height: 36em !important;
          background-image: url(data/picture/u3.png) ;
          background-size: cover;
          position: relative;
          margin-left: 13%;
          background-repeat: no-repeat;
          z-index: 1;">
          <div style="    width: 12em; margin-left: 41em; padding-top: 4em;">
          	<!-- <img src="data/picture/search.png"> -->
          	<input type="text" class="form-control" placeholder="Tìm kiếm" name="" style="background-color: white;
			    background-image: url('data/picture/search.png');
			    background-position: 10px 10px; 
			    background-repeat: no-repeat;
			    padding-left: 40px; border-radius: 9.25rem !important;">

          </div>
          <div class="container" style="padding-top: 1em ; padding-left: 11em ;padding-right: 9em;">
        	<?php
				include("content.php");
			?>
          </div>
     </div>
    </div>

    <div class="bottom_content" style="margin-top: -16em;">
      	<img src="data/picture/u22.png" style="width: 310px; margin-top: 11em; margin-left: 8em;">
    </div>
		
	<audio id="myAudio1" >
      <source src="data/audio/intro/Sóc nhí - Trang chủ_4.mp3" type="audio/mpeg" > </source>
    </audio>
     <audio id="myAudioIntro">
      <source src="data/audio/intro/Sóc nhí - Trang chủ_2.mp3" type="audio/mpeg" > </source>
    </audio>
    <audio id="nightmodeOn" src="data/voice/chế độ ban đêm.m4a"></audio>
    <audio id="nightmodeOff" src="data/voice/chế độ ban ngày.m4a"></audio>
	


    <script>
   
	    var x = document.getElementById("myAudioIntro"); 
	    var y = document.getElementById("myAudio1"); 
	    var nightmodeOn = document.getElementById("nightmodeOn");
	    var nightmodeOff = document.getElementById("nightmodeOff");

    	if (window.location.href == "http://localhost:8080/nhom5utt/") {
    		x.play();
    		y.play();
    	}


	    function pauseAudioIntro() { 
	        x.pause(); 
	    } 

	    function changeSetting() {
	    	console.log('vao day', document.getElementById("imgSunMoon").src)
	    	if (document.getElementById("imgSunMoon").src == "http://localhost:8080/nhom5utt/data/picture/u23.png") {
	    		document.getElementById("imgSunMoon").src = "http://localhost:8080/nhom5utt/data/images/home/moon.png";
	    		document.getElementById("nightmode").style = "position: fixed; width: 100vw; height: 100vh; z-index: 9999999; background: rgba(214, 162, 22, 0.46); pointer-events: none;";
	    		nightmodeOn.play();
	    	} else {
	    		document.getElementById("nightmode").style = "display: none";
	    		document.getElementById("imgSunMoon").src = "http://localhost:8080/nhom5utt/data/picture/u23.png";
	    		nightmodeOff.play();

	    		// nightmode(false);
	    	}
	    }

	    // function nightmode(value) {
	    // 		console.log('vao day roscscsi');

	    // 	if (value) {
	    // 		console.log('true');
	    // 		$('#topContent').removeClass('top_content').addClass('top_content2');
	    // 	} else {
	    // 		console.log('false');
	    // 		$('#topContent').removeClass('top_content2').addClass('top_content');
	    // 	}
	    // }
    </script>


  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  </html>