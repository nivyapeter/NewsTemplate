<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>News</title>
</head>

<body>
    <header id="news-head" class="header-site bg-cyan-300 ">
        <div class="news-main-head">
            <div class="main-text">
                <p class="news-title">News@Media</p>
                <p>Mysoor road, Sulthan bathery</p>
            </div>
            <nav class="nav-bar">
                <ul class="main-nav">
                    <li class="nav-items">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="#">About</a>
                    </li>
                    <li class="nav-items">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner">
        <div class="col-md-12 col-sm-12 col-xs-12 banner-section" id="banner-page">
            <div class="title-container">
                <!-- <div class="row center-text"> -->
                <h1>Welcome to News@Media</h1>
                <p>That every day is a new day, and it's never too late to fix something</p>
                <!-- </div> -->
            </div>

        </div>

    </section>
    <!-- news grid -->
    <section id="newsgrid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="container1">
               <?php
                    $servername = "localhost";
                    $db = "newstemplate";
                    $username = "root";
                    $password = "Vonnue@1234#";
                    
                // create connection
                    $conn = mysqli_connect($servername,$username,$password,$db);
                    if(!$conn) {
                        echo "not connected";

                    } 
                    // $db = mysql_select_db($conn,"newstemplate");
                    $query = mysqli_query($conn,"select * from NEWS");
                    if(!$query) {
                        echo "invalid";
                    }
                    $n = mysqli_fetch_all($query);
                    // echo count($n);
                    for($i=0; $i < count($n); $i++) {
                          $discription = $n[$i][2];
                          $image = $n[$i][1];
                    
                        echo "<div class='news-box'>
                          <div>
                          <img class='news-img' src='$image'>
                              </div>
                              <p>$discription</P>
                          </div>
                          
            ";
                    
                    }
                ?>
                
                </div>  
        </div>
    </section>


</body>

</html>