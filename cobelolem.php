<!DOCTYPE html>
<html>
  <head>
        <title>Đọc truyện cho trẻ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="css/_index.css" type="text/css" rel="stylesheet"/>
    <link href="css/_index.scss" type="text/scss" rel="stylesheet"/>
  </head>
  <body style="width: 100%">

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

    <div class="top_content" >
       <div class="container">
        <div class="row">
          <div class="col">
            <img src="data/picture/u23.png" style="width: 13em; margin-left: -29%; margin-top: 5em; cursor: pointer;">
          </div>
          <div class="col-6">
            <img src="data/picture/Vector-High-Quality-PNG.png" href="http://localhost:8080/nhom5utt/" style="cursor: pointer; ,width: 37em">
          </div>
          <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Đăng nhập / Đăng ký</button>
            <img src="data/picture/u24.png" style="width: 16em; margin-left: 46%; margin-top: 2em; cursor: pointer;">
          </div>
        </div>
      </div>

     <div class='top_menu'>
       <ul class="nav justify-content-center">
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link active" href="#"> Truyện Cổ Tích </a> -->
          <audio id="cotich" src="data/voice/cotich.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('cotich').play()">
            <a href="http://localhost:8080/nhom5utt/?luachon=truyencotich">
              <img src="data/picture/buttons_PNG34.png" style="width: 130px; height: 52px">
            </a>
          </button>
        </li>
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Truyện Dân gian</a> -->
          <audio id="dangian" src="data/voice/dangian.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('dangian').play()">
            <a href="http://localhost:8080/nhom5utt/?luachon=truyendangian">
              <img src="data/picture/buttons_PNG433.png" style="width: 130px;     height: 52px">
            </a>
          </button>
        </li>
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Truyện Hiện Đại</a> -->
          <audio id="truyenhiendai" src="data/voice/truyenhiendai.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('truyenhiendai').play()">
            <a href="http://localhost:8080/nhom5utt/?luachon=truyenhiendai">
              <img src="data/picture/buttons_PNG47.png" style="width: 130px; height: 50px;">
            </a>  
          </button>
        </li>
        <li class="nav-item" style="    margin-right: 20px;">
          <!-- <a class="nav-link" href="#">Tập Thơ</a> -->
          <audio id="taptho" src="data/voice/taptho.m4a"></audio>
          <button style="background: none; border: hidden;" onmouseover="document.getElementById('taptho').play()">
            <a href="http://localhost:8080/nhom5utt/?luachon=taptho">
              <img src="data/picture/buttons_PNG51.png" style="width: 130px;">
            </a>
          </button>
        </li>
      </ul>
     </div>
     <div class="main_content" style="width: 66%;
          margin-top: 1em;
          height: 36em !important;
          background-image: url(data/picture/book.png) ;
          background-size: cover;
          position: relative;
          margin-left: 16%;
          background-repeat: no-repeat;
          z-index: 1;">
          <div class="container" style="padding-top: 4em ; padding-left: 5.5em ;padding-right: 4.5em; height: 34.2em;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="data/images/lolem/1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/images/lolem/2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/images/lolem/3.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/images/lolem/4.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="data/images/lolem/5.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
     </div>
     <div style="margin-left: 51em; margin-top: -8em;"> 
      <button onclick="playAudio()" type="button" style="background: none; border: none; cursor: pointer;"> <img  src="data/picture/Play.png"  style="width: 40px;"></button>
      <button onclick="pauseAudio()" type="button" style="background: none; border: none; cursor: pointer;"> <img src="data/picture/Pause.png" style="width: 40px;"></button> 
      <button onclick="reloadAudio()" type="button" style="background: none; border: none;cursor: pointer;"> <img src="data/picture/Load.png" style="width: 40px;"></button> 
      <button onclick="playAudioThanDen()" style="background: none; border: none;cursor: pointer;" data-toggle="modal" data-target="#thandenModal">
        <img src="data/picture/thanden.gif">
      </button>
    </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="thandenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Thần đèn thách đố</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="carouselExampleControls11111" class="carousel slide" pause="false" ride="false" wrap='false' data-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a><h3>Bà tiên đã tặng gì cho cô bé lọ lem ?</h3></a>
                </br>
                  <button onclick="quest(1,`a`)" id="1a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. Chổi thần</button> 
                  <button onclick="quest(1,`b`)" id="1b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. Đũa thần</button> 
                  <button onclick="quest(1,`c`)" id="1c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Giày thủy tinh</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
                  <a><h3>Cô bé lọ lem phải trở về nhà lúc nào ?</h3></a>
                  </br>
                  <button onclick="quest(2,`a`)" id="2a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. 11 giờ đêm</button> 
                  <button onclick="quest(2,`b`)" id="2b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. 12 giờ đêm</button> 
                  <button onclick="quest(2,`c`)" id="2c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Quên đường về</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
                   <a><h3>Hoàng tử tìm thấy cô bé lọ lem hay không ?</h3></a>
                  </br>
                  <button onclick="quest(3,`a`)" id="3a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. Có tìm thấy</button> 
                  <button onclick="quest(3,`b`)" id="3b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. Không tim thấy</button> 
                  <button onclick="quest(3,`c`)" id="3c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Không cần tìm</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
                  <a><h3 style='text-align: center;''>Chúc mừng bé đã hoàn thành thử thách của Thần Đèn !</h3></a>
                  </br>
                  <img style="margin-left: 12%;" src="data/picture/cup.png">
                </div>
              </div>
            </div>
          </div>
          <img src="data/picture/thanden.png" style="margin-left: -18em;
    margin-top: -333px;
    width: 19em;">
          <div class="modal-footer">          
            <button id="button_next" 
              #href="#carouselExampleControls" #data-slide="next" #role="button"
              onclick="nextQuest()" 
              disabled="true" class="btn btn-primary">Câu tiếp theo >>></button>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom_content" style="margin-top: -16em;">
      <img src="data/picture/u22.png" style="width: 15em;  margin-top: 14em; margin-left: 8em;">
    </div>

    <audio id="myAudio" autoplay="true">
      <source src="data/audio/lolem/lolem1.mp3" type="audio/mpeg" > </source>
    </audio>
    

    <script>

    function nextQuest() {
      $('#carouselExampleControls11111').carousel('next');
      document.getElementById("button_next").disabled = true;
    } 

    var x = document.getElementById("myAudio"); 

    function playAudio() { 
        x.play(); 
    } 

    function pauseAudio() { 
        x.pause(); 
    } 

    function reloadAudio() {
        x.load();
        x.play();
    }

    function playAudioThanDen() {
      x.pause();
      // than den thach do
    }

    function quest(index,value) {
      console.log('quest')
      switch(index) {
        case 1:

          document.getElementById("button_next").disabled = false;
          right(index,'c');
          fail(index,'b');
          fail(index,'a');
          if (value == "c") {
            console.log('tra loi dung');
            // be tr loi dung roi
            
          } else {
            console.log('tra loi sai');
            // be tra loi sai

          }
          break;
        case 2: 
         document.getElementById("button_next").disabled = false;
          right(index,'b');
          fail(index,'c');
          fail(index,'a');
          if (value == "b") {
            console.log('tra loi dung');
            // be tr loi dung roi
            
          } else {
            console.log('tra loi sai');
            // be tra loi sai

          }
          break;
        case 3: 
          document.getElementById("button_next").disabled = false;
          $("#button_next").text("Kết thúc");
          // $("#button_next").onclick(hide());

          right(index,'a');
          fail(index,'c');
          fail(index,'b');
          if (value == "a") {
            console.log('tra loi dung');
            // be tr loi dung roi
            
          } else {
            console.log('tra loi sai');
            // be tra loi sai

          }
          break;
        default:
        

      }
  }

    function right(index,value){
      console.log('value', index)
      $('#'+ index + value).removeClass('btn btn-lg btn-block btn-outline-primary').addClass('btn btn-lg btn-block btn-success');
    }

    function fail(index,value){
      $('#'+ index + value).removeClass('btn btn-lg btn-block btn-outline-primary').addClass('btn btn-lg btn-block btn-danger');
    }
    </script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  </html>