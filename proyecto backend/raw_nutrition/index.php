<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--LLAMADO DEL CSS A ESTE HTML-->

    <link rel="stylesheet" href="css/style.css">
   
    <!--IMPORTACION DE LIBRERIAS-->

    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/img.png/rawR.png" type="image/x-icon">
    
    <!--NOMBRE DEL PROYECTO FRONTEND-->

    <title>Raw Nutricion Cbum</title>
</head>
<body>    
      <header>
        <img src="img/img.png/rawlogo.png" alt="logo_empresa">
        <nav>
            <ul>
                <li>
                    <a href="">MAIN</a>
                </li>
                <li>
                    <a href="">SUPPLEMENTS</a>
                </li>
                <li>
                    <a href=""> ATHLETES</a>
                </li>
                <li>
                    <a href="">CONTACT</a>
                </li>
            </ul>

            <i class="fa-solid fa-cart-shopping fa-beat"></i>
            
        </nav>
    </header>
    <section id="main-frame">
        
        <div class="product">
            <h3>CBUM</h3>
            <img src="img/img.png/rawnutrition_4.png" alt="producto foco">
        </div> 

        <div class="description">
            <form action="aplication/home.php" method="post">
                <h1>RAW <span>CBUM</span> <br>
                <span class="subtitle">cinnamon crunch cereal</span> </h1>
                <p>
                made from 100% grass-fed whey protein isolate, itholate 
                protein is clean, premium protein delivers all the essential
                amino acids your body needs to support muscle growth 
                and repair. Whit a whopping  25 grams of protein per serving,
                it´s the perfect supplemetnt to help you recover from tough
                workouts and build lean muscle mass.</p>
            
                <button type="submit" name="check">Add To Card</button>
            </form>
        </div>
        <!--SECTION SUPPLEMENTS-->
     
        <div class="shop_supplements">
            <!--<h2>Other supplements</h2>-->
            <div class="shop_s">
                <img src="img/img.png/pre_w.png" alt="pre-entreno">
                <span>Thavage pre-workout</span>
            </div>
            <div class="shop_s">
                <img src="img/img.png/creatina.png" alt="galletas">
                <span>creatine</span>
            </div>
            <div class="shop_s">
                <img src="img/img.png/rawnutrition_1.png" alt="proteina">
                <span>Cbum itholate protein</span>
            </div>
        </div>
    </section>

    <!--SECTION ATHLETES-->
    
    <section id="athletes"> 
        <div class="mr_olympia">
            <h2>ATHLETES</h2>
            <p> Christopher Adam Bumstead (born 2 February 1995) is a Canadian IFBB professional bodybuilder.
                Bumstead is the reigning Mr. Olympia Classic Physique winner, having won the competition in 2019, 2020, 2021 and 2022.
                He was also the runner-up in 2017 and 2018. He is often referred to by his nickname Cbum.

                Bumstead maintains a large online presence with content focusing on his lifestyle and bodybuilding.</p>
        </div>    
        <div class="cbum">
            <img src="img/img.png/ChrisBums.png" alt="no se encontro">
        </div>
    </section>

    <!--SOCIAL MEDIA-->

    <footer>
        <div class="social_media">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-youtube"></i>
            
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

