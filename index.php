
<?php include "include/header.php"; ?>

<div class="jumbotron jumbotron-fluid" style="background-image: url(images/bg-in.jpg); background-size:cover; z-index:-1; color:#c0c5db; position:relative; height:550px;">
<div class="container">
  <center><h1 class="display-3" style="letter-spacing:10px; font-family:'AngsanaUPC';"><b>CSS</b></h1>
  <p class="lead" style="letter-spacing:10px;"><i><b>computer science shop.</b></i></p></cemter>
</div>
</div>
<div class="jumbotron" style="background-color:#444954; position:relative; top:-30px; width:100%; height:700px;">

    <h1 class="my-4" style="color:white;letter-spacing:5px; font-weight:bold"> | Welcome to CSS</h1>
  <br>
  <center>
<div class="div-img col-lg-8 text-center" style="display: block;height: auto;max-width: 100%;line-height: 1;top:-5%;left:-1%;width: 100%;height:100%;"><center>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100 " src="images/ban01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 " src="images/ban02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 " src="images/ban03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>
</div>
</div>

<div class="jumbotron" style="background-color:#32423f; position:relative; top:-62px; width:100%; height:900px;">
<div class="container">

      <h1 class="my-4" style="color:red;">Promotion 10%</h1>
      <br><br>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color:#c6b45b;"><?=$list[1]['pname']?></h4>
            <div class="card-body">
              <p class="card-text" style="text-overflow: ellipsis;">
              <strike style="font-size:16pt;"><?=$list[1]['price']?></strike> &nbsp;
              <span style="font-size:16pt; color:red"><?=$list[1]['price']*0.9?> ฿</span>
              <br>
                <?=substr($list[1]['pdetail'],0,500);?>...</p>
            </div>
            <div class="card-footer">
              <a href="<?=$rootFolder?>game1.php?pid=<?=$list[1]['pid']?>" class="btn btn-outline-warning">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"  style="background-color:#6c5bc6;"><?=$list[2]['pname']?></h4>
            <div class="card-body">
              <p class="card-text" style="text-overflow: ellipsis;">
              <strike style="font-size:16pt;"><?=$list[2]['price']?></strike> &nbsp;
              <span style="font-size:16pt; color:red"><?=$list[2]['price']*0.9?> ฿</span>
              <br>
              <?=substr($list[2]['pdetail'],0,520);?>...</p>
            </div>
            <div class="card-footer">
              <a href="<?=$rootFolder?>game1.php?pid=<?=$list[2]['pid']?>" class="btn btn-outline-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"  style=" background-color:#316d38; color:white;"><?=$list[16]['pname']?></h4>
            <div class="card-body">
              <p class="card-text" style="text-overflow: ellipsis;">
              <strike style="font-size:16pt;"><?=$list[16]['price']?></strike> &nbsp;
              <span style="font-size:16pt; color:red"><?=$list[16]['price']*0.9?> ฿</span>
              <br>
              <?=substr($list[16]['pdetail'],0,520);?>...
              </div>
            <div class="card-footer">
              <a href="<?=$rootFolder?>game1.php?pid=<?=$list[16]['pid']?>" class="btn btn-outline-success">Read More</a>
            </div>
          </div>
        </div>
      </div>
</div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <div class="jumbotron" style="background-color:#562828; position:relative; top:150px;left:-3%; width:105.3%; height:120%;">
      <center><span style="color:white;font-size:50px;font-weight:bold">BEST SELL <sup style="font-size:20pt;">1</sup></span></center>
<br><br><br>
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[0]['pid']?>"><img class="card-img-top" src="images/1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$rootFolder?>game1.php?pid=<?=$list[0]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[0]['pname']?></a>
              </h4>
              <p class="card-text">
                <b>Since : </b><?=$list[0]['psince']?><br>
                <b>Developer : </b><?=$list[0]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[0]['price']?> .-</b><br>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[5]['pid']?>"><img class="card-img-top" src="images/6.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="game1.php?pid=<?=$list[5]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[5]['pname']?></a>
              </h4>
              <p class="card-text">
              <b>Since : </b><?=$list[5]['psince']?><br>
                <b>Developer : </b><?=$list[5]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[5]['price']?> .-</b><br>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[6]['pid']?>"><img class="card-img-top" src="images/7.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$rootFolder?>game1.php?pid=<?=$list[6]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[6]['pname']?></a>
              </h4>
              <p class="card-text">
              <b>Since : </b><?=$list[6]['psince']?><br>
                <b>Developer : </b><?=$list[6]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[6]['price']?> .-</b><br>
              </div>
          </div>
        </div>
        <br><br>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[7]['pid']?>"><img class="card-img-top" src="images/8.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$rootFolder?>game1.php?pid=<?=$list[7]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[7]['pname']?></a>
              </h4>
              <p class="card-text">
              <b>Since : </b><?=$list[7]['psince']?><br>
                <b>Developer : </b><?=$list[7]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[7]['price']?> .-</b><br>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[21]['pid']?>"><img class="card-img-top" src="images/22.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$rootFolder?>game1.php?pid=<?=$list[21]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[21]['pname']?></a>
              </h4>
              <p class="card-text">
              <b>Since : </b><?=$list[21]['psince']?><br>
                <b>Developer : </b><?=$list[21]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[21]['price']?> .-</b><br>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?=$rootFolder?>game1.php?pid=<?=$list[12]['pid']?>"><img class="card-img-top" src="images/13.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?=$rootFolder?>game1.php?pid=<?=$list[12]['pid']?>" style="color:#662727;font-weight:bold;"><?=$list[12]['pname']?></a>
              </h4>
              <p class="card-text">
              <b>Since : </b><?=$list[12]['psince']?><br>
                <b>Developer : </b><?=$list[12]['pdevoloper']?><br>
                <b style="color:red;">Price : <?=$list[12]['price']?> .-</b><br>
              </div>
          </div>
        </div>
      </div>
</div>
<div class="jumbotron" style="background-color:#232323; position:relative; top:100px;left:-3%; width:105.3%; height:23%;">
      <div style="color:white">CSS - COMPUTER SCIENCE SHOP<br>
      322132 Web Application Development.<br>
      1/2560<br>
      KKU53 - SC44 - CS31<br>
      </div>
</div>

<?php include "include/footer.php"; ?>