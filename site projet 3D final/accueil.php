<?php
require_once('conn.php');
$sql = "SELECT id, pseudo, password, email FROM `users`";
$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>racing</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="traittop"></div>
<div class="traitbas"></div>
<div class="content">
    <div class="backg">
    </div>
    <embed class="fumer" src="img/fumer.swf"width="100 " height="75">
    <div class="beat"><p class="em">Beat'em all</p></div>
    <div class="left">
        <div class="profile">
            <img class="insigne"src="img/insigne%20de%20rank.png" alt="">
            <h2 class="pseudo"><p><?=['$pseudo']?><p></h2>
            <h3 class="rang">Rang : I</h3>
        </div>
        <div class="actu2">
            <div class="actu">
                <img src="img/cotdroit.png" alt="" class="cotdroit">
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src="index.js"></script>
                <h1 class="act">Actualités</h1>
                <div class="info">
                    <p class="txt">Nouvelle mise à jour dans 1 semaine <br> Soyez nombreux à assister au lancement de la nouvelle voiture et aux nombreux circuit.
                        <br><img class="imgactu"src="img/rally.jpg" alt=""></p>
                </div>
                <img src="img/cotgau.png" alt="" class="cotgau">
            </div>
        </div>
    </div>
    <div class="over">
        <div class="barrelat">

            <div class="rank">
                <h1 class="titreR">Rank</h1>
                <div class="numero1">
                    <a class="tooltips" href="#">
                        <img src="img/ornbeige.png" alt="" class="orn">
                        <span><img class="icon" src="img/t%C3%A9l%C3%A9chargement.jpeg" alt=""><p>theee best</p><button class="but">défier</button></span></a>
                </div>
                <div class="numero2">
                    <a class="tooltips" href="#">
                        <img src="img/orngris.png" alt="" class="orn">
                        <span><img class="icon" src="img/t%C3%A9l%C3%A9chargement%20(1).jpeg" alt=""><p>le mec qui a le seum parcequ'il est 2iem</p><button class="but">défier</button></span></a>
                </div>
                <div class="numero3">
                    <a class="tooltips" href="#">
                        <img src="img/ornbeige.png" alt="" class="orn">
                        <span><img class="icon" src="img/t%C3%A9l%C3%A9chargement%20(2).jpeg" alt=""><p>3iem voila voila</p><button class="but">défier</button></span></a>
                </div>
                <div class="numero4">
                    <a class="tooltips" href="#">
                        <img src="img/orngris.png" alt="" class="orn">
                        <span><img class="icon" src="img/t%C3%A9l%C3%A9chargement%20(3).jpeg" alt=""><p>presque nul mais bon</p><button class="but">défier</button></span></a>
                </div>
                <div class="numero5">
                    <a class="tooltips" href="#">
                        <img src="img/ornbeige.png" alt="" class="orn">
                        <span><img class="icon" src="img/t%C3%A9l%C3%A9chargement%20(4).jpeg" alt=""><p>sale naab</p><button class="but">défier</button></span></a>
                </div>
                <div class="more">
                    <img src="img/more.png" alt="" class="plus">
                    <p class="see">See more</p>
                </div>
            </div>

        </div>
        <div class="twitter">
            <a class="twitter-timeline" href="https://twitter.com/DirtyRacing_FR" data-widget-id="720340855546978305"   width="100"
               height="270">Tweets de @DirtyRacing_FR</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div>
    </div>
    <div class="bas">
        <script src="index.js"></script>
        <img class="cotbas"src="img/cotbas.png" alt="">
    </div>
    <div class="map">
        <script src="index.js"></script>
        <img class="circuit" src="img/circuit.png" alt="">
    </div>

</div>
</body>


</html>


