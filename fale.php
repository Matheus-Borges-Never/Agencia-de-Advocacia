<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Teste Advogacia - Fale Conosco</title>        
        <link rel="icon" href="img/icone.jpg">
        <link rel="stylesheet" type="text/css" href="css.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>

<!-- Navbar -->
<nav class="navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Flag Brasil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="navbar-brand" id="offcanvasNavbarLabel">Flag Brasil</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="empresa.html">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="galeria.html">Galeria de Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="fale.php">Fale Conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="quiz.html">Quiz</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!--Topo da Pagina-->
<div class="topo-empresa header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mande uma Mensagem e Fale Conosco</h1>
            </div>
        </div>
    </div>
</div>

<!-- Formulario -->
<!-- Esse é o formulario, não foi inserido PHP para enviar as respostas para algum email,
pois não irá subir para um servidor web. -->
<div id="contacts" class="formulario mt-4">
        <div class="container">
            <div class="row">
            <div class="col-12 formulario-titulo"><h1>Mande uma Mensagem</h1><br /><br /></div>
                <div class="col-lg-12 " data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">
                    <form id="contact" action="" method="POST" role="form" novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome" autocomplete="on" required="">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="Sobrenome" autocomplete="on" required="">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu Email" required="">
                            </div>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="message" id="message" placeholder="Mensagem" required="" style="resize: none"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" id="salvar" class="btn btn-primary d-block mx-auto mt-3">Enviar</button>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Contato -->
    <div class="container contato" style="max-width: 100%;">
        <div class="row contato-text">
            <div class="col-md-3 contato-text">
                <h2>Telefone:</h2><br>
                <h4>(16) 98801-6082</h4>
            </div>
            <div class="col-md-3 contato-text">
                <h2>Endereço:</h2><br>
                <h4>R. Prof. Geraldo Foroni, 667 - Prolongamento Vila Duque de Caxias Franca-SP </h4>
            </div>
            <div class="col-md-6">
                <!-- mapa -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.546282517209!2d-47.40319998507574!3d-20.52481778627353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a6489438d9b7%3A0xb9b42118fe54ee09!2sR.%20Prof.%20Geraldo%20Foroni%2C%20667%20-%20Prolongamento%20Vila%20Duque%20de%20Caxias%2C%20Franca%20-%20SP%2C%2014401-024!5e0!3m2!1spt-BR!2sbr!4v1649862856770!5m2!1spt-BR!2sbr"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="empresa.html" class="nav-link px-2 text-muted">Empresa</a></li>
                <li class="nav-item"><a href="galeria.html" class="nav-link px-2 text-muted">Galeria</a></li>
                <li class="nav-item"><a href="fale.php" class="nav-link px-2 text-muted">Fale Conosco</a></li>
                <li class="nav-item"><a href="quiz.html" class="nav-link px-2 text-muted">Quiz</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Design: Matheus Borges</p>
        </footer>
    </div>

    <!-- Whatsapp -->
    <div id="gb-widget-6077"
    style="bottom: 21px; left: 23px; opacity: 1; transition: opacity 0.5s ease 0s; box-sizing: border-box; position: fixed !important; z-index: 16000160 !important; /*! direction: ltr; */">
    <div>
      <div class="q8c6tt-2 whats-tam"><a href="https://wa.me/5516988016082" target="_blank" color="#4dc247" id=""
          class="q8c6tt-0 whats-cor"><svg viewBox="0 0 32 32"
            style="width: 100%; height: 100%; fill: rgb(255, 255, 255); /*! stroke: none; */"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path
              d="M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z">
            </path>
          </svg></a></div><a type="link"
        href="http://getbutton.io/?utm_campaign=multy_widget&amp;utm_medium=widget&amp;utm_source=chaiadministrado1.hospedagemdesites.ws"
        class="sc-7dvmpp-1 gCdMUP"></a>
    </div>
  </div>




    
    </body>
</html>