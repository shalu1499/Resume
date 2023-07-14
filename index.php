<?php
include 'database.php';
?>
<!--********** INSERT_QUERY ***********-->
<?php 
$id = "";
$name = "";
$mobile="";
$email = "";
$subject ="";
$msg="";

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    

    $insert="INSERT INTO `email_table` ( `name`,`mobile`, `email`, `subject`,`msg`) VALUES ('$name', '$mobile','$email','$subject','$msg')";
    $result = mysqli_query ($conn,$insert);

}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  
  <body>
    <!-- navbar -->
    
  <!--------------------------- Navbar --------------------------->
  <section id="Home">
    <header class="header-menu">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <h1 class="text-light">Prabh</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-stream  navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto menu_nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#Home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item mt-3 mt-lg-0">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </section>

  <!-------------------------- Navbar --------------------------------->
    <!-- navbar -->

    <div class="container-fluid banner-img">
        <div class="row">
            <div class=" text-center my-5 align-self-center">
                <h1 class="text-light">Hello There <b> Prabhjot Kaur</b></h1> 
                <div class="warper">
                    <div class="static"> I'm a</div>
                        <ul class="dynamic-txts fw-bold ">
                            <li><span>Graphic Designer</span></li>
                            <li><span>Web Developer</span></li>
                            <li><span>Freelancer work</span></li>
                        </ul>
                </div>
                <div class="incon">
                    <a href="https://www.facebook.com/people/Prabh-Jassi/pfbid04RwqvFuX1q6UNS2ErP46qfQX9BWWprLr1TKdCtGW8MXzzyV622YHfsovZ13GUjCgl/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/shally7047/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://in.pinterest.com/shelly869900/"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="https://www.behance.net/prabhjotkaur46"><i class="fa-brands fa-behance"></i></a>
                    <a href="https://www.linkedin.com/in/prabh-kaur-b24323282/"><i class="fa-brands fa-linkedin"></i></a>
                     </div>
            </div>
        </div>
    </div>
    <!-- ABOUT ME -->
    <section id="About" >
    <div class="container my-5" >
        <div class="row">
            <h1><span>|</span> ABOUT ME</h1>
            <div class="col-lg-6 my-4 ">
                <img src="img/banner.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 align-self-center">
                <h1 class="">I'M Prabh</h1>
                <h3 class="mb-3">A Lead <span> UX & UI </span> designer based in<span> India</span></h3>
                <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions. Check out my Portfolio.</p>

                <p>Birthday | 14th March 1999</p>
                <p>Email | prabhjassi1499@gmail.com</p>
                <p>Phone | 8699001794</p>
                <p>Freelance | Avaialble</p>
                <button class="btn btn-outline-warning fw-bold">Go To CV</button>
            </div>
        </div>
    </div>
</section>
    <!-- ABOUT ME -->
    <!-- MY SKILLS -->
    <div class="container my-5 skills" id="skills">
        <h1><span>|</span> MY SKILLS</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>html-5</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                    </div>               
                </div> 
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>Css-3</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 98%">98%</div>
                    </div>               
                </div> 
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>JavaScript</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%">85%</div>
                    </div>               
                </div> 
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>JQuery</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                    </div>               
                </div> 
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>AJAX</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                    </div>               
                </div> 
                <div class="names my-3" data-aos="fade-right" data-aos-delay="80" data-aos-duration="1000">
                    <h3>PHP</h3>
                    <div class="progress w-75">
                     <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                    </div>               
                </div> 
            </div>
            <div class="col-lg-6 text-center">
              <div class="row">
                <div class="col-lg-6 p-3">
                    <img src="img/Adobe_Photoshop.png" class="img-fluid" alt="">
                    <h3 class="my-2">Adobe_Photoshop</h3>
                </div>
                <div class="col-lg-6 p-3">
                    <img src="img/Adobe_Illustrator.png" class="img-fluid" alt="">
                    <h3 class="my-2">Adobe_Illustrator</h3>
                </div>
                <div class="col-lg-6 p-3">
                    <img src="img/corel2.png" class="img-fluid" alt="">
                    <h3 class="my-2">CorelDraw</h3>
                </div>
                <div class="col-lg-6 p-3">
                    <img src="img/Adobe_After_Effects_CC_icon.svg.png" class="img-fluid" alt="">
                    <h3 class="my-2">Adobe_After_Effect</h3>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- MY SKILLS -->

    <!-- MY Work -->
    <div class="container-fluid my-5" id="work">
        <h1><span>|</span> MY Work</h1><hr>
        <div class="row  text-center">
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post46.jpg" class="img-fluid" alt="">
                <!-- <a href="Work experience.html" class="btn btn-outline-warning my-3 fw-bold" >Work experience</a> -->
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post_nav5.jpg" class="img-fluid" alt="">
                <!-- <a href="Festival.html" class="btn btn-outline-warning my-3 fw-bold">Festival</a> -->
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/my-work-egg.jpg" class="img-fluid" alt="">
                <!-- <a href="Art Work.html" class="btn btn-outline-warning my-3 fw-bold">Art Work</a> -->
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/Cycle/cycle_post84.jpg" class="img-fluid" alt="">
                <!-- <a href="daily thoughts.html" class="btn btn-outline-warning my-3 fw-bold">daily thoughts</a> -->
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post14.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post34.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/Cycle/cycle_post22.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post_independence3.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post32.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/Cycle/cycle_post87.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post47.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/my-work-pta nhi ki.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post50.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/Gtb_work.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post45.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 my-2">
                <img src="img/gtb_post_shivaratri.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- MY Work -->

    <!-- CSS_WORK -->
    <div class="container-fluid">
        <h1 class="m-3"><span>|</span>ALL CSS WORK</h1>
        <div class="row">
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/bubble.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">BUBBLE</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/bubble.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/hi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">CSS Shapes Design</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/Doremon-hi.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/card.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">CARD Design</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/card.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
            <div class="card m-2">
                <img src="img/text.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Glowing Text</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/glowing-text.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
              </div>

              <!-- NEXT -->
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/glow-text.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Glow TEXT</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/Glowing-text-2.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/in.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Infinty</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/infinty.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/menu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Menu Hover Effect</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/menu-hover.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
            <div class="card m-2">
                <img src="img/menu2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Menu Slider</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/menu-slider.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
              </div>

              <!-- NEXT -->
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/new-menu.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">New Menu Style</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/navbar.html" class="btn btn-outline-warning">Go To Project</a>
                 </div>
               </div>
                <div class="card m-2">
                  <img src="img/newcard.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">New Design Of Card</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/new_card.html" class="btn btn-outline-warning">Go To Project</a>
                 </div>
               </div>
               <div class="card m-2">
                    <img src="img/text-br.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Text Style</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/One_more_text.html" class="btn btn-outline-warning">Go To Project</a>
                    </div>
                </div>
               <div class="card m-2">
                    <img src="img/ware text.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Water Text Style</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/water-hello.html" class="btn btn-outline-warning">Go To Project</a>
                    </div>
                </div>
            </div>
              <!-- NEXT -->
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/wave.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Wave text style</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/wave-animation.html" class="btn btn-outline-warning">Go To Project</a>
                 </div>
               </div>
                <div class="card m-2">
                  <img src="img/text animation.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Text Animation</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/words-animation.html" class="btn btn-outline-warning">Go To Project</a>
                 </div>
               </div>
               <div class="card m-2">
                    <img src="img/text animation2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Text Animation</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/words-line-hidden.html" class="btn btn-outline-warning">Go To Project</a>
                    </div>
                </div>
               <div class="card m-2">
                    <img src="img/card hover.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">CARD Hover Design</h4>
                    <a href="file:///E:/Prabh_GTB/Prabh-all-work/one-new-hover.html" class="btn btn-outline-warning">Go To Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CSS_WORK -->

    <!-- LATEST BLOGS -->
    <div class="container my-5" id="projects">
        <h1 class="my-3"> <span>|</span>My web projects</h1>
        <div class="row">
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/COFFEE.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Coffee Web Site</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap with JavaScript</small></p>
                    <a href="file:///E:/prabh_all_data/coffee-web/index.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/cold-coffee.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Starbucks Web Page</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap with JavaScript <br> Hover and Click Effect</small></p>
                    <a href="file:///E:/prabh_all_data/cold_coffee/index.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/gtb-banner.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Full Website with all pages</h4>
                    <p class="card-text"><small class="text-body-secondary">HTML5,CSS3, Bootstrap, JavaScript <br> Zoom-In Zoom-Out Effects </small></p>
                    <a href="file:///E:/prabh_all_data/G.T.B/GTB.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
              </div>

              <!-- NEXT -->
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/cycle-banner.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Cycle Website</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap with JavaScript <br>
                    With All Pages, About, Gallery, Products, Contact.</small></p>
                    <a href="file:///E:/prabh_all_data/modle/index.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/boo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Simple Bootstrap Web Page</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap5</small></p>
                    <a href="file:///E:/prabh_all_data/Prabh-all-work/bootstrap-css.html" class="btn btn-outline-warning">Go To Project</a>
                </div>
            </div>
            <div class="card m-2">
                <img src="img/clock.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Clock</h4>
                    <p class="card-text"><small class="text-body-secondary">HTML5,CSS3, JavaScript </small></p>
                    <a href="file:///E:/prabh_all_data/Prabh-all-work/clock.html" class="btn btn-outline-warning">Go To Project</a>
                  </div>
                </div>
              </div>

              <!-- NEXT -->
            <div class="card-group">
                <div class="card m-2">
                  <img src="img/par.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Parallax Web Page</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap with JavaScript</small></p>
                    <a href="file:///E:/prabh_all_data/all-Parallax/parallax.html" class="btn btn-outline-warning">Go To Project</a>
                 </div>
               </div>
               <div class="card m-2">
                    <img src="img/cycle-php.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h4 class="card-title">Cycle Website With PHP</h4>
                    <p class="card-text"><small class="text-body-secondary">Using HTML5, CSS3, and Bootstrap with JavaScript <br> Hover and Click Effect</small></p>
                    <a href="http://localhost/Shine_production/" class="btn btn-outline-warning">Go To Project</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- LATEST BLOGS -->

<!-- Message -->
    <!-- GET IN TOUCH -->
    <div class="container my-5" id="Contact">
        <h1><span>|</span> GET IN TOUCH</h1>
        <div class="row">
            <div class="col-lg-7">
                <form action="" method="post" >
                    <div class="input">
                        <input type="text" id="name" name="name" class="input-field" required/>
                        <label class="input-label">Full Name</label>
                    </div>
                    <div class="input">
                        <input type="text" id="mobile" name="mobile" class="input-field" required/>
                        <label class="input-label">Your Mobile No:</label>
                    </div>
                    <div class="input">
                        <input type="text" id="email" name="email" class="input-field" required/>
                        <label class="input-label">Your Email</label>
                    </div>
                    <div class="input">
                        <input type="text" id="subject" name="subject" class="input-field" required/>
                        <label class="input-label">Subject</label>
                    </div>
                    <div class="input">
                        <input type="text" id="msg" name="msg" class="input-field" required/>
                        <label class="input-label">Your Message</label>
                    </div>
                    <input type="submit" value="Send Your Message" class="btn btn-outline-warning mt-5 fw-bold" id="save" name=" save">
                </form>
            </div>
            <div class="col-lg-5 border-start border-warning Contact">
                <i class="fa-solid fa-location-dot"></i> <h3> <span>Our Address</span></h3>
                <p>V.P.O Mundian Kalan HN:4865 Chandigarh Road, (Lud.)</p>

                <i class="fa-solid fa-envelope"></i><h3> <span>Email Address</span></h3>
                <p>prabhjassi1499@gamil.com</p>

                <i class="fa-solid fa-phone"></i><h3> <span>Phone</span></h3>
                <p>86990 01794</p>
                <p>98144 56277</p>
            </div>
        </div>
    </div>
    <!-- GET IN TOUCH -->
<!-- FOTTER -->
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col-lg-10">
            <h3 class=" text-light  p-1">
                <div class="incon">
                <a href="https://www.facebook.com/people/Prabh-Jassi/pfbid04RwqvFuX1q6UNS2ErP46qfQX9BWWprLr1TKdCtGW8MXzzyV622YHfsovZ13GUjCgl/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/shally7047/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://in.pinterest.com/shelly869900/"><i class="fa-brands fa-pinterest"></i></a>
                <a href="https://www.behance.net/prabhjotkaur46"><i class="fa-brands fa-behance"></i></a>
                <a href="https://www.linkedin.com/in/prabh-kaur-b24323282/"><i class="fa-brands fa-linkedin"></i></a>
                 </div>
        </h3>
        </div>
        <div class="col-lg-2">
            <h3 class="text-light align-self-center mt-3">prabhjassi1499</h3>
        </div>
    </div>
</div>
<!-- FOTTER -->

<!------------- Here I sAjax For Inserting Data Start --------------->

   
 

    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>