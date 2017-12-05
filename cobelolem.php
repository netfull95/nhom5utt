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

    <div class="top_content" style=" width: 100%;
    height: 1000px;
    position: relative;
    z-index: 1;
    background-image: url(data/picture/bg2.png) ;
    background-repeat: repeat-x;opacity: 1 !important">
       <div class="container">
        <div class="row">
          <div class="col">
            <img src="data/picture/u23.png" id="imgSunMoon" data-toggle="tooltip" data-placement="top" title="Thay đổi chế dộ xem" onclick="changeSetting()" style="width: 13em; margin-left: -29%; margin-top: 5em; cursor: pointer;">
          </div>
          <div class="col-6">
            <a href="http://localhost:8080/nhom5utt/">
              <img src="data/picture/Vector-High-Quality-PNG.png" style="cursor: pointer; width: 37em">
            </a>
          </div>
          <div class="col">
            <audio id="dangnhap" src="data/voice/Đăng nhập.m4a"></audio>

            <button type="button" class="btn btn-primary" onmouseover="document.getElementById('dangnhap').play()" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Đăng nhập / Đăng ký</button>
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
      <audio id="playAudio" src="data/voice/Phát truyện.m4a"></audio>
      <button data-toggle="tooltip" data-placement="top" title="Phát truyện" onclick="playAudio()" type="button"  onmouseover="document.getElementById('playAudio').play()" style="background: none; border: none; cursor: pointer;"> <img  src="data/picture/Play.png"  style="width: 40px;"></button>

      <audio id="pauseAudio" src="data/voice/Dừng truyện.m4a"></audio>
      <button data-toggle="tooltip" data-placement="top" title="Dừng truyện" onclick="pauseAudio()"  onmouseover="document.getElementById('pauseAudio').play()" type="button" style="background: none; border: none; cursor: pointer;"> <img src="data/picture/Pause.png" style="width: 40px;"></button>

      <audio id="reloadAudio" src="data/voice/Phát lại.m4a"></audio> 
      <button data-html="true" data-toggle="tooltip" title="Phát lại truyện" onclick="reloadAudio()" onmouseover="document.getElementById('reloadAudio').play()"type="button" style="background: none; border: none;cursor: pointer;"> <img src="data/picture/Load.png" style="width: 40px;"></button> 

      <audio id="playAudioThanDen" src="data/voice/thần đèn thách đố.m4a"></audio>
      <button onclick="playAudioThanDen()" onmouseover="document.getElementById('playAudioThanDen').play()" style="background: none; border: none;cursor: pointer;" data-toggle="modal" data-target="#thandenModal">
        <img data-html="true" data-toggle="tooltip" data-placement="top" title="Thần đèn thách đố" src="data/picture/thanden.gif">
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
                  <audio id="quest1a" src="data/voice/bà tiên đã tang gì cho cô bé lọ lem.m4a"></audio>
                  <a onmouseover="document.getElementById('quest1a').play()"><h3>Bà tiên đã tặng gì cho cô bé lọ lem ?</h3></a>
                </br>
                  <audio id="a chổi thần" src="data/voice/a chổi thần.m4a"></audio>
                  <button onmouseover="document.getElementById('a chổi thần').play()" onclick="quest(1,`a`)" id="1a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. Chổi thần</button> 

                  <audio id="b đũa thần" src="data/voice/b đũa thần.m4a"></audio>
                  <button onmouseover="document.getElementById('b đũa thần').play()" onclick="quest(1,`b`)" id="1b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. Đũa thần</button> 

                  <audio id="c giày thủy tinh" src="data/voice/c giày thủy tinh.m4a"></audio>
                  <button onmouseover="document.getElementById('c giày thủy tinh').play()" onclick="quest(1,`c`)" id="1c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Giày thủy tinh</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Second slide"> -->
                  <audio id="cô bé lọ lem trở về nhà lúc nào" src="data/voice/cô bé lọ lem trở về nhà lúc nào.m4a"></audio>
                  <a onmouseover="document.getElementById('cô bé lọ lem trở về nhà lúc nào').play()"><h3>Cô bé lọ lem phải trở về nhà lúc nào ?</h3></a>
                  </br>

                  <audio id="a 11 giờ đêm" src="data/voice/a 11 giờ đêm.m4a"></audio>
                  <button onmouseover="document.getElementById('a 11 giờ đêm').play()" onclick="quest(2,`a`)" id="2a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. 11 giờ đêm</button> 

                  <audio id="b 12h đêm" src="data/voice/b 12h đêm.m4a"></audio>
                  <button onmouseover="document.getElementById('b 12h đêm').play()" onclick="quest(2,`b`)" id="2b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. 12 giờ đêm</button> 

                  <audio id="c quên đường về" src="data/voice/c quên đường về.m4a"></audio>
                  <button onmouseover="document.getElementById('c quên đường về').play()" onclick="quest(2,`c`)" id="2c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Quên đường về</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
                    <audio id="hoàng tử có tìm thấy cô bé lọ lem không" src="data/voice/hoàng tử có tìm thấy cô bé lọ lem không.m4a"></audio>
                   <a onmouseover="document.getElementById('hoàng tử có tìm thấy cô bé lọ lem không').play()"><h3>Hoàng tử tìm thấy cô bé lọ lem hay không ?</h3></a>
                  </br>

                  <audio id="a có tìm thấy" src="data/voice/a có tìm thấy.m4a"></audio>
                  <button onmouseover="document.getElementById('a có tìm thấy').play()" onclick="quest(3,`a`)" id="3a" type="button" class="btn btn-lg btn-block btn-outline-primary">A. Có tìm thấy</button> 

                  <audio id="b không tìm thấy" src="data/voice/b không tìm thấy.m4a"></audio>
                  <button onmouseover="document.getElementById('b không tìm thấy').play()" onclick="quest(3,`b`)" id="3b" type="button" class="btn btn-lg btn-block btn-outline-primary">B. Không tim thấy</button> 

                  <audio id="c không cần tìm" src="data/voice/c không cần tìm.m4a"></audio>
                  <button onmouseover="document.getElementById('c không cần tìm').play()" onclick="quest(3,`c`)" id="3c"  type="button" class="btn btn-lg btn-block btn-outline-primary">C. Không cần tìm</button> 
                </div>
                <div class="carousel-item">
                  <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
                  <audio id="chúc mừng bé đã hoàn thành thử thách thần đèn" src="data/voice/chúc mừng bé đã hoàn thành thử thách thần đèn.m4a"></audio>

                  <a onmouseover="document.getElementById('chúc mừng bé đã hoàn thành thử thách thần đèn').play()"><h3 style='text-align: center;''>Chúc mừng bé đã hoàn thành thử thách của Thần Đèn !</h3></a>
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
            <audio id="câu tiếp theo" src="data/voice/câu tiếp theo.m4a"></audio>
            <button id="button_next" 
              #href="#carouselExampleControls" #data-slide="next" #role="button"
              onclick="nextQuest()" 
              onmouseover="document.getElementById('câu tiếp theo').play()"
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
    <audio id="nightmodeOn" src="data/voice/chế độ ban đêm.m4a"></audio>
    <audio id="nightmodeOff" src="data/voice/chế độ ban ngày.m4a"></audio>
    <audio id="quest1" src="data/voice/bà tiên đã tang gì cho cô bé lọ lem.m4a"></audio>

    <audio id="right" src="data/voice/đúng rồi chúc mừng bé.m4a"></audio>
    <audio id="wrong" src="data/voice/ôi tiếc quá bé trả lời sai mất rồi.m4a"></audio>
    <!-- <audio id="nightmodeOff" src="data/voice/chế độ ban ngày.m4a"></audio> -->
    

    <audio id="giay" src="data/voice/phương án giày thủy tinh là phương án đúng nhé.m4a"></audio>
    <audio id="venha" src="data/voice/cô bé lọ lem trở về nhà lúc 12h đêm.m4a"></audio>
    <audio id="timthay" src="data/voice/hoàng tử tìm thấy cô bé lọ lem và.m4a"></audio>
    
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
      quest1.play();
      // than den thach do
    }

    function quest(index,value) {
      var rightaa = document.getElementById("right");
      var wrongaa = document.getElementById("wrong");

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
            // var 
            rightaa.play();

            rightaa.addEventListener('ended', function() {
              document.getElementById("giay").play();
            } ) 
            
          } else {
            console.log('tra loi sai');
            wrongaa.play();
            wrongaa.addEventListener('ended', function() {
              document.getElementById("giay").play();
            } ) 

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
            rightaa.play();

            rightaa.addEventListener('ended', function() {
              document.getElementById("venha").play();
            } ) 
            
          } else {
            console.log('tra loi sai');
            // be tra loi sai
            wrongaa.play();
            wrongaa.addEventListener('ended', function() {
              document.getElementById("venha").play();
            } )
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
            rightaa.play();
            
            rightaa.addEventListener('ended', function() {
              document.getElementById("timthay").play();
            } ) 

          } else {
            console.log('tra loi sai');
            // be tra loi sai
            // wrongaa.play();
            // wrongaa.addEventListener('ended', function() {
              document.getElementById("timthay").play();
            // } )
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


    var nightmodeOn = document.getElementById("nightmodeOn");
    var nightmodeOff = document.getElementById("nightmodeOff");
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


  </script>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
  </html>