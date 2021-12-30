
<!-- 

// session_start();
 
//     require_once('connexion.php');

//     $sql =  "SELECT * FROM visiteurs";

//     $query = $db->prepare($sql);

//     $query->execute();
//     $result = $query->fetchAll( PDO::FETCH_ASSOC);


 -->

 <?php

$serveur="localhost";
$user="root";
$pw="";
$bdd="portfolio";

try {
   $cnportfolio = new PDO ("mysql:host=$serveur;$user;$pw;$bdd");
   $cnportfolio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "la connexion a ete etablie";
}
catch (PDOException $e) { 
   echo "la connexion a echo:" . $e->getMessage();
}
if(isset($_POST['btsubmit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $describe = $_POST['describe'];

    $sql = ("INSERT INTO `utilisateurs`(`name`, `email`, `subject`, `describe`,) VALUES"(name, email, subject, describe));

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kledjess portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio</span></pan>.</a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                 <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!--home section-->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is </div>
                <div class="text-2">Traoré Klêdjéni Arouna </div>
                <div class="text-3">And I'm a <span class="typing"></span>
                </div>
               
                <!-- <img src="images/huepix120.png" alt="kledjessimg"> -->
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

 <!-- About section start -->
 
 <section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About me</h2>
        <div class="about-content">
            <div class="column left">
               <img src="images/canv.png" alt="">
            </div>
              <div class="column right">
                  <div class="text">I'm Klêdjeni and I'm a <span class="typing-2"></span> </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nostrum, maxime quam at quibusdam nihil placeat, dolorem pariatur et similique magnam dolor eum magni dolores asperiores! Libero quae non id animi dolor error corporis, ex soluta quis! Rerum officia vitae et eum ut saepe numquam accusamus, magnam voluptate quod! Soluta expedita voluptatem, cum odit id earum architecto animi repellat quia.</p>
                    <a href="#">Download CV</a>
              </div>
        </div>
    </div>
</section>

 <!-- services section start -->
 
 <section class="services" id="services">
    <div class="max-width">
        <h2 class="title">My services</h2>
        <div class="serv-content">
          <div class="card">
              <div class="box">
                  <i class="fas fa-paint-brush"></i>
                  <div class="text">Web Design</div>  
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aut voluptas similique. Culpa, recusandae dolore.</p>
              </div>
          </div>

          <div class="card">
            <div class="box">
                <i class="fas fa-chart-line"></i>
                <div class="text">Advertising</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aut voluptas similique. Culpa, recusandae dolore.</p>
            </div>
           </div>
        
        <div class="card">
            <div class="box">
                <i class="fas fa-code"></i>
                <div class="text">Apps Design</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque aut voluptas similique. Culpa, recusandae dolore.</p>
            </div>
        </div>
           </div>
        </div>
    </div>
</section>

<!---skills section start-->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title"> My Skills</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">My creative skills & experiences.</div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit ratione accusantium consectetur! Maxime, temporibus sequi aliquam cupiditate magni, mollitia quas nulla praesentium vero, eligendi corrupti corporis est neque ipsum ipsam distinctio optio delectus voluptate consectetur! Dolor magni laborum, exercitationem earum numquam dolore animi reiciendis, ducimus quia eligendi culpa? Dolor incidunt accusantium ratione atque consectetur molestiae animi sequi culpa, ex saepe.</p>
                    <a href="#">Read more</a>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span></span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span></span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JAVASCRIPT</span>
                        <span></span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span></span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MYSQL</span>
                        <span></span>
                    </div>
                    <div class="line mysql"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- teams section start -->
<section class="teams" id="teams">
    <div class="max-width">
        <h2 class="title">My teams</h2>
        <div class="carousel owl-carousel">
            <div class="card">
              <div class="box">
                <img src="images/aroun.jpg" alt="">
                <div class="text">Someone name</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="card">
                <div class="box">
                  <img src="images/profil.jpg" alt="">
                  <div class="text">Someone name</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="images/photo.jpg" alt="">
                  <div class="text">Someone name</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="images/profil.jpg" alt="">
                  <div class="text">Someone name</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <img src="images/profil.jpg" alt="">
                  <div class="text">Someone name</div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
              </div>
        </div>
    </div>
</section>

<!-- contact section start -->
<section class="contact" id="contact">
    <div class="max-width">
        <h2 class="title">Contact me</h2>
           <div class="contact-content">
            <div class="column left">
                <div class="text">Get in Touch</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga rem architecto nostrum fugiat voluptate similique ut odit repellat. Sit, eligendi.</p>
                <div class="icons">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <div class="info">
                            <div class="head">Name</div>
                            <div class="sub-title"> Traoré Klêdjéni Arouna </div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="info">
                            <div class="head">Address</div>
                            <div class="sub-title">Abidjan, Abobo</div>
                        </div>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <div class="head">Email</div>
                            <div class="sub-title"><a href="mailto:kledjeniarouna.1995@gmail.com"> kledjeniarouna.1995@gmail.com</a></div>
                        </div>
                    </div>
                </div>
           </div>

           <div class="column right">
        <div class="text">Message me</div>

        <form action="#" method="post">
            <div class="fields">
                <div class="field name">
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="field email">
                    <input type="email" placeholder="Email" required>
                </div>
            </div>
                <div class="field">
                    <input type="text" placeholder="Subject" required>
                </div>
                <div class="field textarea">
                 <textarea cols="30" rows="10"placeholder="Describe project..." required></textarea>
                </div>
                
                <p class="blue">*<strong> Ces informations sont requises.</strong></p>
                <div class="button">
                    <button type="submit" name="btsubmit" value="Send message">Send message</button>
                </div>
        </form>
           </div>
        </div>
    </div>
</section>

<!-- footer section start -->
<footer>
    <span>Created By <a href="#">kledjess</a> | <span class="far fa-copyright"></span> 2021 all rights reserved. </span>
</footer>

    <script src="script.js"></script>
</body>
</html>  