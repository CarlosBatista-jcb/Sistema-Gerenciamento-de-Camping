<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema gerenciamento Camping Aliança </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
</head>
<body>
    <div class="header">
        <center><h1>Fale Conosco</h1></center>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Entre em Contato</h2>
                <form action="submit_contact.php" method="post">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            
        </div>
        
        <div class="whatsapp-button">
            <a href="https://web.whatsapp.com/send?phone=+5541995212462" target="_blank" class="btn btn-success">
                <i class="fab fa-whatsapp"></i>Contato Via WhatsApp
            </a>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        // Google Maps initialization
        function initMap() {
            const mapOptions = {
                center: { lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE },
                zoom: 15,
            };
            const map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }
    </script>
    <div class="col-md-6">
                <h2>Localização</h2>
                <div id="map" style="height: 300px;"></div>
            </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.1946080274633!2d-49.08931962559006!3d-25.53189373692924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcf4597d55a55d%3A0xc324f3a5f780baf7!2sRua%20Tubar%C3%A3o%2C%20156%20-%20S%C3%A3o%20Sebastiao%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Pinhais%20-%20PR%2C%2083075-060%2C%20Brasil!5e0!3m2!1spt-BR!2sde!4v1693503998957!5m2!1spt-BR!2sde" width="1360" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php include 'include/footer.php'; ?>
</body>
</html>

