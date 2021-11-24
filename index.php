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
            <div class="container">
            <?php
for ($x = 0; $x <= 10; $x++) {
   echo "<div class='news-box'>
   <div>
   <img class='news-img' src='./img/download.jpeg'>
    </div>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, aliquid? Consequuntur molestiae necessitatibus, amet cumque autem architecto totam inventore aliquid.</P>
   </div>";
}
?>
                
            </div>
        </div>
    </section>




</body>

</html>