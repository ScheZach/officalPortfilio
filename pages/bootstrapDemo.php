<!DOCTYPE html>
<html>
<head>
<title>Zachary Scherer Portfilio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../css/bootExample.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid w3-dark-grey" id="header">
    <h1 class="headerText">Welcome to the Bootstrap 4 demo</h1>
    <p class="text-warning">This site is still in development</p>
</div>
<div id="hLinks" class="w3-bar w3-indigo barLink">
        <a href="../index.php" class="w3-bar-item w3-button w3-hover-blue w3-mobile">home</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue w3-mobile">placeholder</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue w3-mobile">placeholder</a>
        <div class="w3-dropdown-hover">
        <button class="w3-button w3-hover-blue">Bootstrap &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border w3-hover-blue">
          <a href="#" class="w3-bar-item w3-button w3-hover-blue">First example (In Development)</a>
        </div>
</div>
</div>

<div class="grid-container">
<div class="links content">
    <h3>Find me here:</h3>
    <ul>
    <li><p><a class="link" href="https://baylor.joinhandshake.com/users/18651126">Handshake</a></p></li>
    <li><p><a class="link" href="https://github.com/ZSlongtalk">Github</a></p></li>
    </ul>
</div>
<div class="main content">
    <div class="jumbotron">
        <h3>Examples:</h3>
        <div id="slides" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slideImg rounded img-fluid" src="../img/gazzelle.jpg" alt="gazzelle">
            </div>
            <div class="carousel-item">
                <img class="slideImg img-fluid rounded-circle" src="../img/wildabeast.jpg" alt="wildabeast">
            </div>
            <div class="carousel-item">
                <img class="slideImg img-fluid img-thumbnail" src="../img/zebra.jpg" alt="zebra">
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        <p>This carousel uses Bootstrap 4's carousel along with their rounded, rounded-circle, and
             img-thumbnail styles</p>
    </div>
</div>
<div class="footer content">
    <div id="StudentOrg">
        <p><b>Student Organizations/Past Experience</b></p>
        <table>
            <tr>
                <th>Centennial High School</th>
                <th>Baylor University</th>
            </tr>
            <tr>
                <td>Bussiness Professionals Of America (BPA)</td>
                <td>Association of Computing Machinary (ACM)</td>
            </tr>
            <tr>
                <td>National Honor Society (NHS)</td>
                <td>Computing For Compassion (C4C)</td>
            </tr>
            <tr>
                <td><a class="tableLink" href="https://github.com/ZSlongtalk/WDT2018_DC">BPA Web Site Design Team</a></td>
                <td><a class="tableLink" href="https://github.com/ZSlongtalk/b1-web">Web Design class site</a></td>
            </tr>
        </table>
    </div>
</div>
</div>

</body>

</html>