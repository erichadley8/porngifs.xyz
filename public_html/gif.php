<?php

$servername = "localhost";
$username = "gif";
$password = "Scbwd2blah123";
$database = "porngifs";

$conn = mysqli_connect($servername, $username, $password, $database);

$id = $_GET["id"];

$query = "SELECT * FROM gifs WHERE id=$id";

$res = mysqli_query($conn, $query);

$row = mysqli_fetch_row($res);

$id = $row[0];
$title = $row[1];
$description = $row[2];
$categoryId = $row[3];
$created = $row[4];


$query2 = "SELECT * FROM gifs";

$res2 = mysqli_query($conn,$query2);

$num_rows = mysqli_num_rows($res2);

$previous = $id - 1;
$next = $id + 1;

if($id==1){
  $previous = $num_rows;
  $next = $id + 1;
}
if($id==$num_rows){
  $previous = $id - 1;
  $next = 1;
}

mysqli_free_result($res);
mysqli_close($con);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Porn Gifs: Best XXX and Blowjob Gifs | <?php echo $title ?></title>
    <meta name="description" content="<?php echo $description?> | Porn Gifs and Blowjob Gifs">
  
    <script data-ad-client="ca-pub-2176049440410237" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Top Quality Porn Gifs and Blowjob Gifs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categories.php">Categories</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="container-fluid">
    
    <div class="row">
    
      <div class="col-6">
      <!-- JuicyAds v3.1 -->
      <script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
      <ins id="882686" data-width="728" data-height="102"></ins>
      <script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882686});</script>
      <!--JuicyAds END-->
      </div>

      <div class="col-6">

      <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882687" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882687});</script>
<!--JuicyAds END-->
    </div>
    </div>
    <div class="row">
    <div class="col">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882688" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882688});</script>
<!--JuicyAds END-->
</div>
<div class="col">
     <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882689" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882689});</script>
<!--JuicyAds END-->


    </div>
    <div class="col-5">
      <div class="jumbotron">
        <h1 class="display-4">Top Quality Porn Gif and Blowjob Gif</h1>
        <p class="lead">Porn Gifs and Blowjob Gifs offer you several different options to do
          with the XXX and porn content as you so pleasure.  Please feel free to share, Download
          and embed of porn gifs.
        </p>
        <hr class="my-4">
        
        <button class="btn btn-primary btn-lg" href="gifs/<?php echo $id?>.gif" download role="button">Download</button>
        

        <button class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModal">Embed</button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Copy Code</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <textarea class="form-control" rows="3"><iframe src="http://porngifs.lovestoblog.com/gifs/<?php echo $id;?>.gif"></iframe></textarea>
                </div>
              </div>
            </div>
          </div>


      </div>
    
    </div>
       
      <div class="col">
     <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882691" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882691});</script>
<!--JuicyAds END-->

    </div>
    <div class="col">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882692" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882692});</script>
<!--JuicyAds END-->
    </div>
    
    </div>
    <div class="row">
      <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882693" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882693});</script>
<!--JuicyAds END-->

      </div>

      <div class="col-6">
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882696" data-width="728" data-height="102"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882696});</script>
<!--JuicyAds END-->
      </div>
    </div>
    
    <div class="row">
    <div class="col">
      <!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882697" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882697});</script>
<!--JuicyAds END-->
<!-- JuicyAds v3.1 -->
<script type="text/javascript" data-cfasync="false" async src="https://poweredby.jads.co/js/jads.js"></script>
<ins id="882698" data-width="160" data-height="612"></ins>
<script type="text/javascript" data-cfasync="false" async>(adsbyjuicy = window.adsbyjuicy || []).push({'adzone':882698});</script>
<!--JuicyAds END-->
      
      
          </div>
    <div class="col-9">
      <div class="row">
        Content Header Ad Space
      </div>
    <div class="container">
    <h1><?php echo $title?></h1>
        <h2><?php echo $description?></h2>
        
        <img src="http://porngifs.lovestoblog.com/gifs/<?php echo $id?>.gif" style="width:100%" alt="<?php echo $title?>"/>
    </div>





<div class="row">
        Content Footer Ad Space
      </div>


      <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="gif.php?id=<?php echo $previous ?>">Previous</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="gif.php?id=<?php echo $next ?>">Next</a>
    </li>
  </ul>
</nav>
    </div>
    <div class="col">
      Vertical Sidebar Ad    
    </div>

    
  </div>


  <div class="row">
      Horizontal Carosual Ad
    </div>
  <div class="row">
    <div class="col">
      Vertical Carosual Ad
    </div>
    <div class="col-9">

      
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="http://porngifs.lovestoblog.com/images/1.jpg" height="600" class="d-block w-100" alt="Blowjob gif">
          <div class="carousel-caption d-none d-md-block">
            <h5>The Porn Gif and Blowjob Gifs Carousel</h5>
            <p>
              Cycle through Porn Gifs and Blowjob Gifs that show the best pornstars
              doing their sexual deeds.
            </p>
          </div>
        </div>


        <?php
          $query2 = "SELECT * FROM gifs ORDER BY id ASC LIMIT 4";
          $result2 = $conn->query($query2);
          while($row = $result2->fetch_assoc()){
                    
        ?>

        <div class="carousel-item">
          <a href="gif.php?id=<?php echo $row["id"] ?>"><img src="http://porngifs.lovestoblog.com/gifs/<?php echo $row["id"] ?>.gif" height="600" class="d-block w-100" alt="<?php echo $row["title"] ?>"></a>
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $row["title"] ?></h5>
            <p><?php echo $row["description"] ?></p>
          </div>
        </div>

        <?php 
          }
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    
    
    
    </div>
    <div class="col">
      Vertical Carosual Ad
    </div>
  </div>




  <div class="row">
      Horizontal Footer Ad
    </div>


      

    </div>

    
     
    <footer>
        <ul class="nav justify-content-center navbar-dark bg-dark">
          <li class="nav-item">
            <a class="nav-link" href="#">Sitemap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Terms of Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy and Policy</a>
          </li>
        </ul>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
