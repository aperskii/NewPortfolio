<?php

$conn = mysqli_connect('hostname','username','database_password','database_name') or die('connection failed');

if (isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $msg = mysqli_real_escape_string($conn,$_POST['message']);

    $select_message = mysqli_query($conn,"SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die ('query failed');

    if( mysqli_num_rows($select_message) > 0){
        $message[]= 'message send already!';
    }else {
        mysqli_query($conn,"INSERT INTO `contact_form`(name , email , number , message) VALUES ('$name','$email', '$number', '$msg')") or die ('query failed');
        $message[]= 'message send successfully!';
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio Yassine</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>

<?php
if (isset($message)){
    foreach($message as $message){
        echo '
            <div class="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i></div>  
        ';
    }
}
?>

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo"><img src="./images/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#certificat">Certificates</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="follow">
            <a href="https://www.facebook.com/aperskii" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/YBerqiqch" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/yassineovico/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/yassine-berqiqch" class="fab fa-linkedin"></a>
            <a href="https://github.com/aperskii" class="fab fa-github"></a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="images/user-img.jpg" alt="">
        </div>
        <div class="content">
            <h3 data-aos="fade-up">Hi , I am Yassine Berqiqch</h3>
            <span data-aos="fade-up">Web Designer & Developer</span>
            <p data-aos="fade-up">“Knowledge is power.”</p>
            <a href="#about" class="btn" data-aos="fade-up">About me</a>
        </div>
    </section>


    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"> <span>Biography</span></h1>
        <div class="biography">
            <p data-aos="fade-up">I am Full Stack Developer ,working in HTML, CSS , PHP and Javascript frameworks like Node ,Being A passionate learner, I constantly explore in different fields to strengthen my IT skills.My greatest strength is my confidence in challenging the status quo.</p>
            <div class="bio">
                <h3 data-aos="zoom-in"><span>Name : </span>Yassine Berqiqch</h3>
                <h3 data-aos="zoom-in"><span>Email : </span>yassine.berqiqch@gmail.com</h3>
                <h3 data-aos="zoom-in"><span>Address : </span>Rabat , Morocco</h3>
                <h3 data-aos="zoom-in"><span>Phone : </span>+212-679-962777</h3>
                <h3 data-aos="zoom-in"><span>Age : </span>25 Years</h3>
                <h3 data-aos="zoom-in"><span>Experience : </span>1+ Year of experience</h3>
            </div>
            <a href="/files/Lebenslauf.pdf" class="btn" data-aos="flip-down">Download CV</a>
        </div>

        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>Skills</span></h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span><span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span><span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JavaScript</span><span>65%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>PHP</span><span>60%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>C#</span><span>60%</span></h3>
                </div>
            </div>
        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"><span>Education & Experience</span></h1>
            <div class="row">

                <div class="box-container">
                    <h3 class="title" data-aos="fade-right">Education</h3>

                    <div class="box" data-aos="fade-right">
                        <span>( 2015 - 2018 )</span>
                        <h3>Software engineering</h3>
                        <p>University Diploma in Technology Rabat , Marocco</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2011 - 2014 )</span>
                        <h3>Baccalaureate</h3>
                        <p>Science Physics and Chemistry Rabat , Marocco</p>
                    </div>

                </div>

                <div class="box-container">
                    <h3 class="title" data-aos="fade-left">Experience</h3>

                    <div class="box" data-aos="fade-left">
                        <span>( 2018 - 2019 )</span>
                        <h3>Full Stack Developer</h3>
                        <p>ClicPneu.ma , Rabat Marocco</p>
                    </div>

                    <div class="box" data-aos="fade-left">
                        <span>( 2017 - 2018 )</span>
                        <h3>Software Developer</h3>
                        <p>STE BAS 3, Rabat, Marocco</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"><span>Services</span></h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-code"></i>
                <h3>Web Developer</h3>
                <p>Web Developer Front-End & Back-End</p>
            </div>


            <div class="box" data-aos="zoom-in">
                <i class="fab fa-bootstrap"></i>
                <h3>Bootstrap</h3>
                <p>Responsive and Mobile Websites</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fab fa-wordpress"></i>
                <h3>Wordpress</h3>
                <p>Blog Tool, Publishing Platform, and CMS</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-laptop-code"></i>
                <h3>Software developer</h3>
                <p>Creating, Designing, Building, Deploying, and Maintaining/p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-bullhorn"></i>
                <h3>Digital Marketing</h3>
                <p>Online Marketing , Social Media</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphique Designer</h3>
                <p>Designing Flyers, Banners, Logo, Graphics, Artwork</p>
            </div>

        </div>

    </section>

    <section class="certificat" id="certificat">
        <h1 class="heading" data-aos="fade-up"><span>Certificates</span></h1>
        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <img src="./images/azure.jpg" alt="">
                <h3>Microsoft Azure Fundamentals</h3>
                <a href="./files/az900.pdf" class="btn">Download</a>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="./images/microsoft.jpg" alt="">
                <h3>Microsoft 365 Fundamentals</h3>
                <a href="./files/ms900.pdf" class="btn">Download</a>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="./images/html.jpg" alt="">
                <h3>HTML Training Course</h3>
                <a href="./files/html.pdf" class="btn">Download</a>
            </div>

        </div>
    </section>

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"><span>Contact Me</span></h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="Your Name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="Your Email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min ="0" name="number" placeholder="Phone Number" class="box" required>
            <textarea data-aos="fade-up" class="box" name="message" id="" placeholder="Your Message" cols="30" rows="10" required></textarea>

            <input type="submit" data-aos="zoom-in" value="Send Message" name="send" class="btn">
        </form>

        <div class="box-container">
        
            <div class="box" data-aos="zoom-in-up">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+212-679-962777</p>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>yassine.berqiqch@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Rabat , Marocco</p>
            </div>

        </div>
    </section>

    <div class="credit"> &copy; Copyright @ <?php echo date('Y'); ?> By <span>Yassine Berqiqch</span> </div>


</body>
<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>

</html>