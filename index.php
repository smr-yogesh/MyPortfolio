<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" type="image/png" href="images/ok.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <audio autoplay loop>
        <source src="music.mp3" type="audio/mpeg" />
      </audio>
    -->
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="https://blog.yogeshbhatt.info.np">Blog</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Yogesh Bhatt</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
          </div>
      </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/smr.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Yogesh and I'm a <span class="typing-2"></span></div>
                    <a href="./Yogesh_CV.pdf" download>Download CV</a>
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
                        <p>I'm capable of designing and developing very good static websites. They are very suitable for portfolio and information sites. I'm developing my skills towards dynamic webistes too. I can take care of your any website problem that means from developing to making your website running on internet.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-infinity"></i>
                        <div class="text">Devops</div>
                        <p>Docker</p>
                        <p>Kubernates</p>
                        <p>Terraform</p>
                        <p>Github/Github Actions</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I'm a student and im still learning alot of things. I have handfull experience of HTML & CSS, C# and MySQL. Untill this day i have worked in bunch of project and developed static websites and desktop application.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML/CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Docker</span>
                            <span>80%</span>
                        </div>
                        <div class="line docker"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Kubernates</span>
                            <span>40%</span>
                        </div>
                        <div class="line kubernates"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>40%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C#</span>
                            <span>60%</span>
                        </div>
                        <div class="line csharp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <!-- 
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="icons/female.png" alt="">
                        <div class="text">Noone in team</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/yogesh.jpeg" alt="">
                        <div class="text">Yogesh Bhatt</div>
                        <p>This is my static portfolio. Please feel free to contact me.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="icons/user.png" alt="">
                        <div class="text">Noone in team</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="icons/female.png" alt="">
                        <div class="text">Noone in team</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="icons/user.png" alt="">
                        <div class="text">Noone in team</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
Team End -->
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <!-- <div class="text">Get in Touch</div> -->
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Yogesh Bhatt</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Lahti 15200, Finland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <span><a style="color: #000000; text-decoration: none; font-size:20px; margin-left: 0px;" href="mailto:bhattyogesh700@gmail.com">bhattyogesh700@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                <a href="/social/no-social.php" target="blank">
                    <img src="icons/fb.png" alt="facebook" width="50" height="50" style="margin: 5px 5px;" >
                  </a>
                  <a href="/social/no-social.php" target="blank">
                    <img src="icons/insta.png" alt="Instagram" width="50" height="50" style="margin: 5px 5px;">
                  </a>
                  <a href="/social/no-social.php" target="blank">
                    <img src="icons/twitter.png" alt="Twitter" width="50" height="50" style="margin: 5px 5px;">
                  </a>
                  <a href="https://github.com/smr-yogesh" target="blank">
                    <img src="icons/github.png" alt="Github" width="50" height="50" style="margin: 5px 5px;">
                  </a>
                </div>
                <!--
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
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
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div> 
                    </form>
                    <div class="button">
                        <button onclick="popup()" type="submit">Send message</button>
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script>
                            function popup(){
                                swal("Error!", "Please send direct email", "error");
                            }
                        </script>
                    </div>
                </div>  
                -->   
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="http://yogeshbhatt.info.np">Yogesh Bhatt</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    <script src="script.js"></script>
</body>
</html>

