<?php
    // $servername = "localhost";
    // $username = "user";
    // $password = "user";
    // $dbname = "mail";
    $ip = $_SERVER["REMOTE_ADDR"];
    $date = date("Y-m-d H:i:s");
    $genderBrut= $_POST['gender'];
    $gender=filter_var($genderBrut, FILTER_SANITIZE_STRING);
    $nameBrut =  $_POST['name'];
    $name=filter_var($nameBrut, FILTER_SANITIZE_STRING);
    $emailBrut= $_POST['email'];
    $email = filter_var ($emailBrut, FILTER_SANITIZE_EMAIL);
    $countryBrut = $_POST['country'];
    $country = filter_var($countryBrut, FILTER_SANITIZE_STRING);
    
    if (empty($_POST['subject']) ){
        $subject = "Autres";
    }else{

    $subjectBrut=$_POST['subject'];
    $subjectBrut= join(", ", $subjectBrut);
    $subject=filter_var($subjectBrut, FILTER_SANITIZE_STRING);
    }
    
    $messageBrut = $_POST['message'];
    $message=filter_var($messageBrut, FILTER_SANITIZE_STRING);


    $bot = $_POST['zipcode'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackers Poulette</title>
    <meta name="Description" content="Hackers Poulette - Raspberry Pi">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Hackers Poulette</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">

                    <li class="nav-item">
                            <a class="nav-link" href="index-en.php#home">
                               <span></span>
                               <span></span>
                               <span></span>
                               <span></span>
                            Home</a>
                    
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-en.php#technologie">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-en.php#produces">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-en.php#contact">
                            <span></span>
                               <span></span>
                               <span></span>
                               <span></span>    
                            Contact</a>
                        </li>
                        <!-- <li class="nav-item bouton bouton--border">
                            <span>
                            <a class="nav-link" href="index.php#home">Home<span></span></a>
                        </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bouton bouton--border" href="index.php#technologie">Technologie<span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bouton bouton--border" href="index.php#produces">Produits<span></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bouton bouton--border" href="index.php#contact">Contact<span></span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
      <section class="formulaire">
          <div class="container-fluid">
      <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="headerText" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">
                            <fieldset class="scheduler-border">
                              <legend class="scheduler-border">Welcome <?php echo $name; ?></legend>
                                <p>
                                <p style="text-decoration:underline;"><strong> We get the following informations : </strong></p>
                                <p> <label for="name"><b>Your IP: </b><em></em></label>
                                <label><?php  echo $ip; ?> </label></p>
                                <p> <label for="gender"><em></em></label>
                                <label><?php  echo $gender; ?> </label></p>
                                <p> <label for="name"><b>Name: </b><em></em></label>
                                  <label><?php echo $name; ?> </label>
                                </p>
                                <p>
                                <label for="email"><b>E-Mail: </b></label>
                                <label><?php echo $email; ?> </label>
                                </p>
                                <p>
                                <label for="country"><b>Country: </b></label>
                                <label><?php echo $country; ?> </label>
                                </p>
                                <p>
                                <label for="subject"><b>Subject: </b></label>
                                <label><?php echo $subject; ?> </label>
                                </p>
                                <p>
                                <label for="message"><b>Your message: </b></label>
                                <label><?php echo $message; ?> </label>
                                </p>
                                <?php
                          if ($bot ==""){
                                if ($gender == ""){
                                        echo "<p><b> Gender is missing or invalid and the mail has not been send..</b><p>";
                                }
                                else if ($name == ""){
                                        echo "<p><b> Name is missing or invalid and the mail has not been send..</b><p>"; 
                                }
                                else if ($country == ""){
                                        echo "<p><b> Country is missing or invalid and the mail has not been send..</b><p>";
                                }
                                else if ($email == ""){
                                        echo "<p><b> Email is missing or invalid and the mail has not been send.</b><p>";
                                }
                                else if ($message == ""){
                                        echo "<p><b> Message is missing or invalid and the mail has not been send.</b><p>";
                                }
                                else{
                                        if(isset($_POST['message'])){
                                            $entete  = 'MIME-Version: 1.0' . "\r\n";
                                            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                            $entete .= 'From: ' . $email . "\r\n";

                                            $message_to_send = '

                                            <p><b>Nom-Prénom : </b>' . $gender. " ". $name . '<br>
                                            <b>Pays : </b>' .$country. '<br>
                                            <b>Email : </b>' . $email . '<br>
                                            <b>Sujet : </b>' . $subject. '<br>
                                            <b>Message : </b>' . $message . '</p>';

                                            $retour = mail('bacqestelle@gmail.com', 'Formulaire de contact', $message_to_send, $entete);
                                            if($retour) {
                                                echo '<p><b>Your message has been send.</b></p>';
                                            }
                                        }
                                }
                          }
                          else{
                            echo '<p><b>Your message has been send.(bot)</b></p>';
                          }


                          // Create connection
                          $conn = mysqli_connect($servername, $username, $password, $dbname);
                          // Check connection
                          if (!$conn) {
                                  die("Connection failed: " . mysqli_connect_error());
                          }
                          if ($bot ==""){
                              if ($gender == ""){
                                echo "<p><b> Gender is missing, we can not save in our data base</b><p>";
                              }
                              else if ($name == ""){
                                echo "<p><b> Name is missing, we can not save in our data base</b><p>"; 
                              }
                              else if ($country == ""){
                                echo "<p><b> Country is missing, we can not save in our data base</b><p>";
                              }
                              else if ($email == ""){
                                echo "<p><b> Email is missing, we can not save in our data base</b><p>";
                              }
                              else if ($message == ""){
                                echo "<p><b> Message is missing, we can not save in our data base</b><p>";
                              }
                              else{
                                      $sql = "INSERT INTO mail (date_post, gender, name, country, email, subject, message)
                                      VALUES ('$date', '$gender', '$name', '$country', '$email', '$subject', '$message')";

                                      if (mysqli_query($conn, $sql)) {
                                      echo '<p><b>Save in our data base</b></p>';
                                      } else {
                                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                      }

                                      mysqli_close($conn);
                              }
                          }
                          else{
                              
                            $sql = "INSERT INTO ipbot (date, IP_BOT)
                            VALUES ('$date', '$ip')";

                            if (mysqli_query($conn, $sql)) {
                            echo '<p><b>Save in our data base (BOT).</b></p>';
                            } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }

                            mysqli_close($conn);

                          }
                          ?>
                            </fieldset>
                        </div>
                          </section>
                        </div>
                      </div>
                    </div>
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


    <script src="assets/scripts/script.js"></script>
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
    <script type="text/javascript">
        $(document).scroll(function () {
            $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
        });
    </script>
    </body>

</html>
