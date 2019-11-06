<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula PHP</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script src="https://kit.fontawesome.com/052882cb11.js" crossorigin="anonymous"></script>

<!------------- script do carrossel  ------------------->
    <script type="text/javascript">
        var slides = document.getElementsByClassName("slide");
        var index = 0;
        function goleft() {
            if (index == 0) index = slides.length -1;
            else index--;

            slides[0].style.marginLeft = "-" + index * 600 + "px";
        }
        
        function gorigth() {
            if (index == slides.length -1) index = 0;
            else index++;

            slides[0].style.marginLeft = "-" + index * 600 + "px";
        }

        setInterval(gorigth,2000);  // mudança automatica a cada 2s (2000)
        
    </script>
<!------------- script do carrossel  -------------------->


    </head>
    <body>

<!--------------------- NAV BAR ------------------------->
    <div class="header">
        <h2 class="logo">Camiceria</h2>

        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-ellipsis-h"></i>
        </label>

        <ul class="menu">
            <a href="#">Home</a>
            <a href="#">Camisas</a>
            <a href="#">Ternos</a>
            <a href="#">Gravatas</a>
            <a href="#">Acessórios</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fas fa-times"></i>
            </label>
        </ul>
    </div>

<!--------------------- carrossel ------------------------->

    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img class="figura" src="_imagens/1.png" alt="" >
            </div>
            <div class="slide">
                <img class="figura" src="_imagens/2.png" alt="" >
            </div>
            <div class="slide">
                <img class="figura" src="_imagens/3.png" alt="" >
            </div>

        </div>
        <div onclick="goleft()" class="btnLeft fas fa-chevron-left"></div>
        <div onclick="gorigth()" class="btnRight fas fa-chevron-right"></div>
    </div>


<!-----------------------------  -------------------------------->






    </body>
    </html>