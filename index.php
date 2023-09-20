<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
    


    <title>Sistema de Gerenciamento de Camping</title>
    
   
</head>
<body>



<!-- Certifique-se de que jQuery e Bootstrap JavaScript estão incluídos -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample" data-slide-to="1"></li>
        <li data-target="#carouselExample" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slides1.jpg" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="images/slides2.jpg" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="images/slides3.jpg" class="d-block w-100" alt="Slide 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>



    <section class="contato" id="contato">
        <div class="heading">
            <h2 data-anime="top">Contato</h2>
            <p data-anime="top" style= "letter-spacing: 0.2em; font-size: 25px;">Onde nos encontrar:</p>
            <div class="redes-sociais">
                <ul data-anime="buttom" class="icons">
                    <li ><a href="https://www.instagram.com/boralacomcarlosejanu/" class="fab fa-instagram fa-2x" target="_blank"></a></li>
                    <li><a  href="https://www.facebook.com/carlosejanubatista" class="fab fa-facebook fa-2x" target="_blank"></a></li>
                    <li><a  href="https://www.youtube.com/@carlosejanu" target="_blank" class="fab fa-youtube fa-2x"></a></li>
                    <li><a  href="mailto:cbsites10@gmail.com" class="far fa-envelope fa-2x"></a></li>
                    
                </ul>
                <p data-anime="bottom" style="margin-top: 50px;">Se você quiser conversar, <br> Por favor, entre em contato!</p>
            </div>
        </div>
    </section>
   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.1946080274633!2d-49.08931962559006!3d-25.53189373692924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf4597d55a55d%3A0xc324f3a5f780baf7!2sRua%20Tubar%C3%A3o%2C%20156%20-%20S%C3%A3o%20Sebastiao%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Pinhais%20-%20PR%2C%2083075-060%2C%20Brasil!5e0!3m2!1spt-BR!2sde!4v1693503998957!5m2!1spt-BR!2sde" width="1360" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    

    <?php include 'include/footer.php'; ?>
</body>
</html>
