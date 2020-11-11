<?php
$servername = "localhost";
$username = "gif";
$password = "Scbwd2blah123";
$database = "porngifs";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET["p"])){
  $page = $_GET["p"];
}else{
  $page = 1;
}

$records = 9;
$offset = ($page - 1) * $records;

$total_pages_sql = "SELECT COUNT(*) FROM gifs";
$res3 = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($res3)[0];
$total_pages = ceil($total_rows/$records);

$query = "SELECT * FROM gifs ORDER BY id DESC LIMIT $offset, $records";
$result = $conn->query($query);



?> 


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Porn Gifs: Best XXX and Blowjob Gifs</title>
    <meta name="description" content="Visit here is get the newest and top porn and blowjob gifs the internet has to offer.
    Porn Gifs is updated multiple times a day with only the best XXX and blowjob gifs.  Check it out now!">
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
      Horizontal Header Ad
    </div>
    <div class="row">
    <div class="col">
      Vertical Sidebar Ad
    </div>
    <div class="col-9">
      <div class="jumbotron">
        <h1 class="display-4">The Best and Newest Porn Gifs, XXX Gifs and Blowjob Gifs</h1>
        <p class="lead">
          This is Porn Gif, XXX Gif and Blowjob Gif the best X rated gif media site on the internet.
          Here you can find the best and top rated porn gifs and blowjob gifs that the porn industry
          has to offer.  Find it here at Porn Gif and Blowjob Gif.
        </p>
        <hr class="my-4">
        <p>
          Porn Gif and Blowjob Gif provides top quality media taken from the best and top rated porn videos 
          and porn movies in the industry in gif format.  Porn videos and porn movies can take a lot of resources
          to load and maintain on a slow or limited internet connect.  Here at Porn Gif and Blowjob Gif we 
          have a solution for your porno needs even if you have a limited network resources.  Also easily download
          and save the porn and blowjob gifs on your hardware without having to use your network connection at all.
        </p>
        <a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more</a>
      </div>
    
    </div>
       
      <div class="col">
      Vertical Sidebar Ad
    </div>
    
    </div>
    <div class="row">
      Horizontal Header Ad
    </div>
    
    <div class="row">
    <div class="col">
      Vertical Sidebar Ad
    </div>
    <div class="col-9">
    <h1 class="text-center">Most Recent Porn and Blowjob Gifs</h1>
      <div class="row">
        Content Header Ad Space
      </div>
    <div class="card-columns">

<?php
  while($row = $result->fetch_assoc()){

?>
<div class="card">
    <a href="gif.php?id=<?php echo $row["id"]?>"><img src="http://porngifs.lovestoblog.com/gifs/<?php echo $row["id"]?>.gif" class="card-img-top" alt="<?php echo $row["title"]?>"></a>
    <div class="card-body">
      <h5 class="card-title"><?php echo $row["title"]?></h5>
      <p class="card-text"><?php echo $row["description"]?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><?php echo $row["created"]?></small>
    </div>
</div>

<?php
}
?>
</div>




<div class="row">
        Content Footer Ad Space
      </div>



      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="?p=1">First</a></li>
          
          <li class="page-item <?php if($page<=1){ echo "disabled"; } ?>">
            <a class="page-link" href="<?php if($page <= 1){ echo '#'; } else { echo "?p=".($page - 1); } ?>">Previous</a>
          </li>

          <li class="page-item <?php if($page >= $total_pages){ echo 'disabled'; } ?>">
            <a class="page-link" href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?p=".($page + 1); } ?>">Next</a>
          </li>
          
          <li class="page-item"><a class="page-link" href="?p=<?php echo $total_pages ?>">Last</a></li>
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
  Horizontal Footer Add

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








<?php
$conn->close();

?>