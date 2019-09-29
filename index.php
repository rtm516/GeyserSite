<!DOCTYPE html>
<html>
    <head>
        <title>GeyserMC</title>
        <meta charset="UTF-8" />
        <script src="https://kit.fontawesome.com/d4a2740f92.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
              $(window).scroll(function() {
                if ($(document).scrollTop() > 225) {
                  $(".navbar").css("background-color", "rgba(0, 0, 0, 0.9)");
                  $(".navbar").css("margin", "0px");
                  $(".navbar").css("padding", "20px 20px 10px 20px");
                } else {
                  $(".navbar").css("background-color", "rgba(255, 255, 255, 0.1)");
                  $(".navbar").css("margin", "10px");
                  $(".navbar").css("padding", "10px 10px 10px 10px");
                }
              });
            });
        </script>
        <link rel="shortcut icon" href="img/favicon.ico"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
            <a class="navbar-brand" href="#"><img src="img/logonav.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="http://ci.geysermc.org"><button class="btn nav-link"><i class="fas fa-cloud-download-alt"></i> Download</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/GeyserMC/Geyser"><i class="fab fa-github"></i> Source</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://discord.geysermc.org"><i class="fab fa-discord"></i> Discord</a>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/GeyserMC/Geyser/wiki#Setup"><i class="fas fa-toggle-on"></i> Installation</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header>
            <div class="section1">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="text-center">Revolutionize Your Minecraft Server</h1>
                            <h5 class="text-center">Enable clients from Minecraft Bedrock Edition to join your Minecraft Java server.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="section2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>What is Geyser?</h1>
                        <p>Geyser is a proxy, bridging the gap between Minecraft: Bedrock Edition and Minecraft: Java Edition servers. The ultimate goal of this project is to allow Minecraft: Bedrock Edition users to join Minecraft: Java Edition servers as seamlessly as possible to allow for true cross-platform.</p>
                    </div>
                    <div class="col">
                        <img style="float: right;" src="img/crossplat0.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <iframe width="500" height="282" src="https://www.youtube.com/embed/OmLxwl7_UzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col">
                        <h1>How do I use it?</h1>
                        <p>Geyser can be downloaded from our Jenkins server <a href="http://ci.geysermc.org">here</a> and setup installations can be found on our <a href="https://github.com/GeyserMC/Geyser/wiki#Setup">wiki</a> or in the tutorial video.. Geyser can be used to join any modern Java server and doesn't require anything extra to be done on their end.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>How does it work?</h1>
                        <p>Geyser is a middleware, which translates all the incoming and outgoing packets. With this being said, Geyser works as a proxy, meaning you can use it to join <i>any</i> modern Minecraft Java server.</p>
                    </div>
                    <div class="col">
                        <img style="float: left;" src="img/crossplat1.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col">
                                    <a href="https://github.com/GeyserMC/Geyser">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body" style="min-width: 175px;">
                                        <h5 class="card-title">Source Code</h5>
                                        <p class="card-text">Click here to view the source code!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col">
                                    <a href="https://discord.geysermc.org/">
                                        <i class="fab fa-discord"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body" style="min-width: 175px;">
                                        <h5 class="card-title">Discord</h5>
                                        <p class="card-text">Click here to join our Discord community!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <div class="row">
                                <div class="col">
                                    <a href="http://ci.geysermc.org/">
                                        <i class="fas fa-cloud-download-alt"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="card-body" style="min-width: 175px;">
                                        <h5 class="card-title">Download</h5>
                                        <p class="card-text">Click here to download Geyser!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">&copy <?php echo date("Y"); ?> GeyserMC</h6>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>