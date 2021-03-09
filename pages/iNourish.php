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
<link rel="stylesheet" type="text/css" href="../css/nourish.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>

    $(document).ready(function() {
        $("#item1").hide();
        $("#item2").hide();
        $("#item3").hide();

        $("#iter1").click(function() {
            $("#item1").slideToggle("slow");
        });

        $("#iter2").click(function() {
            $("#item2").slideToggle("slow");
        });

        $("#iter3").click(function() {
            $("#item3").slideToggle("slow");
        });
    });

</script>
<style>

    #headerTxt {
        font-size: 3.5em;
        text-shadow: 5px 8px 2px #444444;
    }

    h4 {
        text-align: center;
    }

    #mainHeader {
        text-align: center;
    }

    .iter:hover {
        color: #999999;
    }

    .iterItem {
        margin: .3em;
        border: .2em solid #BBBBBB;
        padding: 1.7em;
        background-color: #DDD;
    }

    .itemColor {
        margin: .3em;
        border: .2em solid #00B8E6;
        border-radius: .7em;
        padding: .3em;
        color: #DDD;
        background-color: #007399;
    }

    a:hover {
        color: #AAA;
    }

</style>


</head>
<body>
    <div class="container-fluid w3-dark-grey" id="header">
        <h1 id="headerTxt" class="headerText"><b>iNourish</b></h1>
        <p class="text-warning">Improve your diet one day at a time</p>
    </div>
    <div class="grid-container">
        <div class="links content">
            <h4>Important Links: </h4>
        </div>
        <div class="main content">
            <h2 id="mainHeader">Iterations</h2>
            <div class="smallGrid">
                <div class="info1 gridArea">
                    <h4 id="iter1" class="iter">Iteration 1 &#9660;</h4>
                    <div id="item1" class="iterItem">
                        <a class="itemColor" href="https://drive.google.com/drive/folders/1xZ9k4wycXfLj-JrSHV5dzcHJVjk0IoM5?usp=sharing" target="_blank">Iteration 1 PDF</a>
                    </div>
                </div>
                <div class="info2 gridArea">
                    <h4 id="iter2" class="iter">Iteration 2 &#9660;</h4>
                    <div id="item2" class="iterItem">
                        <h4 class="itemColor">Nothing here</h4>
                    </div>
                </div>
                <div class="info3 gridArea">
                    <h4 id="iter3" class="iter">Iteration 3 &#9660;</h4>
                    <div id="item3" class="iterItem">
                        <h4 class="itemColor">Nothing here</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer content">
            <h4>This project is created by Zachary Scherer and Josh Mckone</h4>
        </div>
    </div>
</body>
</html>