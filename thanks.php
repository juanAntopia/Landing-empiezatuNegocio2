<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content=" ¡No Contrates Plomeros, Contrata Especialistas! ">
	<meta name="author" content="Perla Holguín">
    <title> GreenMatik</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/simpletextrotator.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">
    <!--animaciones  para la página-->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
    <link rel="stylesheet" href="css/style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140736847-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140736847-4');
</script>
   

</head>
<body>
     <section class="gracias">
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-xs-12 col-md-12 text-center">
                    <img src="images/icons/logo.png" alt="GreenMatik Logo" width="150"><br><br>
                </div> <br>
               <div class="row">
                   <div class="col-3"></div>
                   <div class="col-6"> <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                          <img class="card-img-top" src="images/icons/gracias2.png" alt="Card image cap" >
                          <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>
                      
                        <!-- Card content -->
                        <div class="card-body text-center">
                            <img src="images/icons/gracias3.png" alt="">
                          <!-- Title -->
                          <h2 class="card-title text-center">Gracias !</h2>
                          <!-- Text -->
                          <p class="card-text">Gracias por solicitar nuestro servicio Nos pondremos en contacto contigo lo antes posible.  Un correo de confirmación llegara a tu email.</p>
                          <!-- Button --> <br>
                          <a href="index.php" class="btn-regresar2">Aceptar</a> <br><br><br>
                      
                        </div>
                      
                      </div></div>
                   <div class="col-3"></div>
               </div>
            </div>
        </div>
     </section>
</body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
            AOS.init();
        </script>
  
<script>
        $(".rotate").textrotator({
             animation: "dissolve",
             separator: "|",
             speed: 2000
         });
     </script>
     <script>
  
            function startTimer(duration, display) {
              var timer = duration, minutes, seconds;
              var x =  setInterval(function () {
                    minutes = parseInt(timer / 60, 10)
                    seconds = parseInt(timer % 60, 10);
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
                    display.textContent = minutes + ":" + seconds;
                      if (--timer < 0) {
                      clearInterval(x); 
                      document.getElementById("time").innerHTML = "EXPIRADO";
                    }
                }, 1000);
            }
            
            window.onload = function () {
              
                var fiveMinutes = 60 * 5,
                    display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
              
            };
        
        
        
        
            
            </script>
  
</html>