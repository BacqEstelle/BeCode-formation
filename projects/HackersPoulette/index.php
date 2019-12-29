<!-- <?php
    if(isset($_POST['subject'])) {
        $vals = $_POST['subject'];
        var_dump($vals);
    foreach($vals as $key => $val){
        echo 'Val = ' . $val . '<br />';
    }
    exit(); 
    }
?> -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackers Poulette</title>
    <meta name="Description" content="Hackers Poulette - Raspberry Pi">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
     <div id="progBar-tl-h"></div>
     <div id="progBar-tr-h"></div>
     <div id="progBar-br-h"></div>
     <div id="progBar-bl-h"></div>
     <div id="progBar-tl-w"></div>
     <div id="progBar-tr-w"></div>
     <div id="progBar-br-w"></div>
     <div id="progBar-bl-w"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Hackers Poulette</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home"  alt="home">
                               <span></span>
                               <span></span>
                               <span></span>
                               <span></span>
                            Accueil</a>
                    
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#technologie"  alt="techno">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Technologie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produces"  alt="produces">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"  alt="contact">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-en.php"  alt="english">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            English</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="jumbotron jumbotron-fluid height100p banner" id="home">
        <div class="container h200 ">
            <div class="contentBox h100">
                <div>
                        <img src="assets/img/logo.png" class="rounded mx-auto d-block img-fluid" alt="Logo Hackers Poulettes" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="0">
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <q>Vous donnerez vie à la technologie</q></p>
                        <div class="flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                            <div class="indicator"><a href="#technologie" alt="down">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    

    <section class="sec2" id="technologie">
        <div class="container h100">
            <div class="contentBox h100">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">La technologie a portée de main</h1>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                    Hackers Poulette est une entreprise qui vend des kits et accessoires pour Raspberry Pi à monter soi-même.
                    Vous y trouverez un large choix de kits, matériels et accessoires pour monter ou ameliorer votre Raspberry
                    Les plus grandes marques du marchés sont disponibles dans notre catalogue en ligne aux meilleurs prix.
                    En plus d'être une société de vente, nous vous fournissons aussi notre expérience et notre aide grace
                    à des tutoriaux disponibles lors de vos achats.
                    </p>
                        <div class="flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="indicator"><a href="#produces"  alt="down">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="produces">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Nos produits</h2>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0"> 
                        Notre jeune société est fière de vous présenter son matériel dernière technologie ainsi que les différents
                        accessoires dont vous avez besoin.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card" >
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp01.jpeg" class="card-img-top" alt="Raspberry PI V-1.0">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-1.0</h2>
                            <p>Le Raspberry Pi Zero est la moitié du modèle A+, avec le double de fonctionnalités! Un petit Raspberry Pi abordable pour tout projet !</p>
                            <ul>
                                <li>1GHz single-core CPU</li>
                                <li>512MB RAM</li>
                                <li>Mini HDMI port</li>
                                <li>Micro USB OTG port</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card">
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp02.jpeg" class="card-img-top" alt="Raspberry PI V-2.3">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-2.3
                            </h2>
                            <p >Pibow Coupé de couleur "Ninja" est un petit accesoire très accrocheur pour Raspberry Pi 2.3</p>
                            <ul>
                                <li>Broadcom BCM2711, Quad core Cortex-A72 (ARM v8) 64-bit SoC @ 1.5GHz</li>
                                <li>1GB, 2GB or 4GB LPDDR4-3200 SDRAM (depending on model)</li>
                                <li>2.4 GHz and 5.0 GHz IEEE 802.11ac wireless, Bluetooth 5.0, BLE</li>
                                <li>Gigabit Ethernet</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card">
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp03.jpeg" class="card-img-top" alt="Raspberry PI V-4.2">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-4.2</h2>
                            <p >Le Raspberry Pi 4.2 est le dernier et plus stable modèle de la quatrième generation Raspberry Pi.</p>
                            <ul>
                                <li>Quad Core 1.2GHz Broadcom BCM2837 64bit CPU</li>
                                <li>1GB RAM</li>
                                <li>BCM43438 wireless LAN and Bluetooth Low Energy (BLE) on board</li>
                                <li>100 Base Ethernet</li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card">
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp01.jpeg" class="card-img-top" alt="Raspberry PI V-1.0">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-1.0 PRO</h2>
                            <p>Le Raspberry Pi Zero est la moitié du modèle A+, avec le double de fonctionnalités! Un petit Raspberry Pi en version PRO abordable pour tout projet! </p>
                            <ul>
                                <li>1GHz single-core CPU</li>
                                <li>512MB RAM</li>
                                <li>Mini HDMI port</li>
                                <li>Micro USB OTG port</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card">
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp02.jpeg" class="card-img-top" alt="Raspberry PI V-2.3">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-2.3 PRO</h2>
                            <p >Pibow Coupé de couleur "Ninja" est un petit accesoire très accrocheur pour Raspberry Pi 2.3 PRO</p>
                            <ul>
                                <li>Broadcom BCM2711, Quad core Cortex-A72 (ARM v8) 64-bit SoC @ 1.5GHz</li>
                                <li>1GB, 2GB or 4GB LPDDR4-3200 SDRAM (depending on model)</li>
                                <li>2.4 GHz and 5.0 GHz IEEE 802.11ac wireless, Bluetooth 5.0, BLE</li>
                                <li>Gigabit Ethernet</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" style="width: 18rem;">
                            <input class ="check" type="checkbox" label="open-card">
                        <div class="toggle">+</div>
                            <div class="imBx">
                                    <img src="assets/img/rasp03.jpeg" class="card-img-top" alt="Raspberry PI V-4.2">
                            </div>
                        <div class="details">
                            <h2>Raspberry Pi V-4.2 PRO</h2>
                            <p >Le Raspberry Pi 4.2 est le dernier et plus stable modèle de la quatrième generation Raspberry Pi en version PRO.</p>
                            <ul>
                                <li>Quad Core 1.2GHz Broadcom BCM2837 64bit CPU</li>
                                <li>1GB RAM</li>
                                <li>BCM43438 wireless LAN and Bluetooth Low Energy (BLE) on board</li>
                                <li>100 Base Ethernet</li>
                            </ul>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

<section class="contact" id="contact">
<div class="container h100">
<div class="contentBox h100">
    <div>
    <div class="headerText text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Contactez nous !</h2>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                        N'hésitez pas à nous contacter si vous avez la moindre question via ce formulaire de contact.
                        Nous nous empresserons de répondre dans les plus brefs délais.
                        </p>
        </div>


        <div class="container h100">
                <form method="post" target="_blank" rel="noopener" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" action="validation.php" onsubmit="return validate();">
                        <div class="form-row">
                          <div class="form-group col-md-12"> 
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Madame" >
                            <label class="form-check-label" for="gender">Madame</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Monsieur">
                            <label class="form-check-label" for="gender">Monsieur</label>
                          </div>
                          <p style="color: white; font-weight: bolder;" id="error_gender"></p> 
                          </div>
                          <div class="form-group col-md-6">
                            <label for="name">Nom Prénom</label>
                            <input type="text" class="form-control" id="name" placeholder="Nom" name="name" >
                            <p style="color: white; font-weight: bolder;" id="error_name"></p> 
                        </div>
                          <div class="form-group col-md-6">
                          <label for="country">Pays</label>
                            <select id="country" class="form-control"  name="country" >
                              <optgroup label="Europe">
                                <option value="Belgique">Belgique</option>
                                <option value="France">France</option>
                                <option value="Luxembourg">Luxembourg</option>
                              </optgroup>
                              <optgroup label="Asie">
                                <option value="Chine">Chine</option>
                                <option value="Japon">Japon</option>
                                <option value="Corée du sud">Corée du Sud</option>
                              </optgroup>
                              <optgroup label="Amérique">
                                <option value="Canada">Canada</option>
                                <option value="Etats-Unis">Etats-Unis</option>
                              </optgroup>
                            </select>
                          </div>
                          <p style="color: white;" id="error_country"></p> 
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="example@youmail.com" name="email">
                          <p style="color: white; font-weight: bolder;" id="error_email"></p> 
                        </div>
                        <div class="form-group" id="zip-code">
                          <label for="zipcode">ZipCode</label>
                          <input type="number" class="form-control" id="zipcode" placeholder="5520" name="zipcode">
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <select id="subject" class="form-control" autofocus multiple name="subject[]">
                              <optgroup label="Technique">
                                <option value="reclamation">Réclamation</option>
                                <option value="remboursement">Remboursement</option>
                                <option value="technique-autres">Autres ...</option>
                              </optgroup>
                              <optgroup label="Achat">
                                <option value="lieu-vente">Lieu de vente</option>
                                <option value="transport">Transport</option>
                                <option value="achat-autres">Autres ...</option>
                              </optgroup>
                              <optgroup label="Autres">
                                <option value="autres-autres">Autres ...</option>
                              </optgroup>
                            </select>
                
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="message">Votre Message:</label>
                                <textarea class="form-control" style="height: 300px;" rows="14" id="message" placeholder="Votre texte ici ..." name="message"></textarea>
                            </div>
                            <p style="color: white; font-weight: bolder;" id="error_message"></p> 
                        </div>
                        <input type="submit" name ="submit" class="btn btn-primary" value="Envoyer">
                </form>
            </div>

        </div>
        </div>
        </div>
    </section>    
    <footer>
        <div class="container2">
            <div class="social-buttons">
                <a href="#"><i class="fa fa-facebook-f"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github-alt"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
            <p class="cpryt">&copy; Copyright by <a href="#">Jonathan Petroons & Bacq Estelle</a> | Template Bootstrap
                Group-Project</p>
        </div>

    </footer>
    <button id="buttonTop" aria-label="buttonTop"><i class="fa fa-arrow-circle-up"></i></button>

    <script src="assets/scripts/script.js"></script>

    <script> 
    $(document).ready(function(){

$(window).scroll(function(){

    if($(this).scrollTop() > 40){
        $('#buttonTop').fadeIn();
    } else {
        $('#buttonTop').fadeOut();
    }
});

$('#buttonTop').click(function (){
    $('html, body').animate({scrollTop :0},800);
});
});
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(window).scroll(function(){
            var scroll = $(window).scrollTop(),
            dh = $(document).height(),
            wh = $(window).height();
            scrollPercent = (scroll / (dh-wh)) * 100;
            scrollPercent_50 = (scroll / (dh-wh))* 195/2;
            $('#progBar-tl-h').css('height', scrollPercent + '%');

            $('#progBar-tr-h').css('height', scrollPercent + '%');

            $('#progBar-br-h').css('height', scrollPercent + '%');

            $('#progBar-bl-h').css('height', scrollPercent + '%');

            $('#progBar-tl-w').css('width', scrollPercent + '%');

            $('#progBar-tr-w').css('width', scrollPercent + '%');

            $('#progBar-br-w').css('width', scrollPercent + '%');

            $('#progBar-bl-w').css('width', scrollPercent + '%');
        })
    </script>
    <script>
        $(document).scroll(function () {
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
    <script>
                        function validate()
                {
                var error="";
                var gender = document.getElementById( "gender" );
                if( gender.checked == "" )
                {
                error = " You Have To Write Your Gender. ";
                document.getElementById( "error_gender" ).innerHTML = error;
                return false;
                }

                var name = document.getElementById( "name" );
                if( name.value == "" )
                {
                error = " You Have To Write Your Name. ";
                document.getElementById( "error_name" ).innerHTML = error;
                return false;
                }
                var country = document.getElementById( "country" );
                if( country.checked == "" )
                {
                error = " You Have To Write Your Country. ";
                document.getElementById( "error_country" ).innerHTML = error;
                return false;
                }
                var email = document.getElementById( "email" );
                if( email.value == "" || email.value.indexOf( "@" ) == -1 )
                {
                error = " You Have To Write Valid Email Address. ";
                document.getElementById( "error_email" ).innerHTML = error;
                return false;
                }
                var message = document.getElementById( "message" );
                if( message.value == "" )
                {
                error = " You Have To Write Your Message. ";
                document.getElementById( "error_message" ).innerHTML = error;
                return false;
                }


                else
                {
                return true;
                }
                }


    </script>
</body>

</html>