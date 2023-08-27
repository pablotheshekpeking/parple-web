<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parple</title>
    <link rel="icon" type="image/svg" href="images/icon.svg">
    <link rel="stylesheet" href="style/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="style/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>
    <script src="style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<!--nav starts-->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="images/icon.svg" alt="" id="logo"><a class="navbar-brand" href="#">arple</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#" id="demo">Request a demo</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--nav stops-->

<!--phone 1-->
<section id="sect1" data-aos="fade-up">
    <div class="container">
        <div class="container-fluid">
            <div class="col-lg-0"></div>
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="col-md-6" id="phonecontent">
                        <h2>Discover and join exciting parties near you. Let's get the party started!</h2>
                        <p>Getting to and from your favorite events has never been this convenient. 
                            With the Parple Event App, you have a reliable and efficient transportation solution at your fingertips.</p>
                            <br>
                            <div class="search-container">
                                <form action="conn.php" method="post" style="margin: 0px; padding: 0px;">
                                    <input type="text" class="search-input" name="email" placeholder="Enter your Email" required>
                                    <button class="search-button" id="submit" type="submit">Join Waitlist</button>
                                </form>
                            </div>                            
                    </div>
                        <div class="col-md-6">
                            <img src="images/phone1.png" alt="" id="phone">
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-0"></div>
        </div>
    </div>
</section>
<!--phone 1-->

<!--phone 2-->
<section id="sect2" data-aos="fade-down">
    <div class="container">
        <div class="container-fluid">
            <div class="col-lg-0"></div>
            <div class="col-lg-12">
                <div class="container-fluid swap">
                    <div class="col-md-6 left-div">
                        <img src="images/phone2.png" alt="" id="phone2">
                    </div>
                    <div class="col-md-6 right-div" id="phonecontent2">
                        <br><br><br>
                        <span style="color: #FB923C; margin-bottom: 0px;">FEATURES</span>
                        <h1 style="margin-top: 0px;">QR code Ticketing</h1><br>
                        <ul class="triangular-list">
                            <li style="font-weight: bolder;">Digital Tickets, Effortless Entry</li>
                            <span>Parple's QR code tickets: Swift, secure event entry. 
                                Your pass to seamless experiences. Simplify, scan, celebrate – hassle-free.</span><br><br>
                            <li style="font-weight: bolder;">Scan Your Unique QR Code to Access Events</li>
                            <span>Gain event entry with ease. Scan your exclusive QR code. 
                                Instant access to unforgettable experiences. Elevate your events with Parple.</span><br><br>
                            <li style="font-weight: bolder;">No More Paper Tickets</li>
                            <span>Leave paper behind. Embrace eco-friendly digital tickets. 
                                Effortless entry to events. Go green with Parple – your paperless event companion.</span><br><br>
                        </ul>
                    </div>  
                </div>
                </div>
            </div>
            <div class="col-lg-0"></div>
        </div>
    </div>
</section>
<!--phone 2-->

<!--phone 3-->
<section id="sect3" data-aos="fade-right">
    <div class="container">
        <div class="container-fluid">
            <div class="col-lg-0"></div>
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="col-md-6" id="phonecontent2">
                        <br><br><br>
                        <span style="color: #FB923C; margin-bottom: 0px;">FEATURES</span>
                        <h1 style="margin-top: 0px;" >Search and Booking</h1><br>
                        <ul class="triangular-list2">
                            <li style="font-weight: bolder;">Search for Events Near You</li>
                            <span>Discover local events effortlessly. Find what's happening nearby. 
                                Elevate your experiences with Parple's event search. Your city, your events.</span><br><br><br><br>
                            <li style="font-weight: bolder;">Book a Ride to Your Event</li>
                            <span>Arrive in style. Reserve event rides seamlessly. 
                                Enhance your experience – book event transportation with Parple. Your journey, our priority.</span><br><br>
                        </ul>
                    </div>  
                    <div class="col-md-6">
                        <img src="images/phone3.png" alt="" id="phone3">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-0"></div>
        </div>
    </div>
</section>
<!--phone 3-->

<!--phone 4-->
<section id="sect4" data-aos="fade-left">
    <div class="container">
        <div class="container-fluid">
            <div class="col-lg-0"></div>
            <div class="col-lg-12">
                <div class="container-fluid swap">
                    <div class="col-md-6">
                        <img src="images/phone1.png" alt="" id="phone2">
                    </div>
                    <div class="col-md-6" id="phonecontent2">
                        <br><br><br>
                        <span style="color: #FB923C; margin-bottom: 0px;">FEATURES</span>
                        <h1 style="margin-top: 0px;">Featured Events</h1><br>
                        <ul class="triangular-list">
                            <li style="font-weight: bolder;">Discover Featured Events</li>
                            <span>Explore premier events. Uncover highlighted experiences. 
                                Elevate your outings with Parple's featured events. Unforgettable moments await.</span><br><br>
                            <li style="font-weight: bolder;">Nearest Events</li>
                            <span>Explore nearby events. Find what's close. 
                                Discover with Parple's nearest events feature. Your next adventure is just around the corner.</span><br><br>
                            <li style="font-weight: bolder;">Trending events</li>
                            <span>Stay in the loop. Experience what's trending. 
                                Elevate your outings with Parple's trending events. Join the excitement of the moment.</span><br><br>
                        </ul>
                    </div>  
                </div>
                </div>
            </div>
            <div class="col-lg-0"></div>
        </div>
    </div>
</section>
<!--phone 4-->

<!--faq-->
<section id="faq" data-aos="fade-right">
    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4 style="color: #FB923C;">Frequently Asked Questions</h4><br>
            <section id="orange_main">
                <p>What is Parple? <img id="toggleButton" src="images/plus.png" alt="Toggle Button" class="icons" onclick="toggleColor()"></p><br>
                <span id="toggleContent">Parple is a versatile event booking app that allows you to easily discover, book, 
                    and attend a wide range of events, along with convenient transportation options.</span>
            </section><br>

            <section id="orange">
                <p>How do I book events using Parple? <img id="toggleButton2" src="images/plus.png" alt="" class="icons"></p><br>
                <span id="toggleContent2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam laborum nulla corporis tempore? Incidunt optio, voluptates nesciunt, 
                    veniam ea reiciendis ab sunt enim beatae repellat, repudiandae adipisci vero dicta excepturi!</span>
            </section><br>

            <section id="orange">
                <p>Can I book transportation through Parple? <img id="toggleButton3" src="images/plus.png" alt="" class="icons"></p><br>
                <span id="toggleContent3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam exercitationem est minus eius vitae incidunt consectetur, quia, 
                    nostrum repellendus saepe odit ut iste nemo quaerat pariatur, maxime voluptatibus sapiente tempore?</span>
            </section><br>

            <section id="orange">
                <p>Is Parple available in my city? <img id="toggleButton4" src="images/plus.png" alt="" class="icons"></p><br>
                <span id="toggleContent4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto repellendus sint ea quisquam autem quae corrupti nam, 
                    quam placeat fugiat odit sed consequatur dolore cumque optio voluptate voluptatem rerum sit.</span>
            </section><br>

            <section id="orange">
                <p>How do I scan my QR code for event entry? <img id="toggleButton5" src="images/plus.png" alt="" class="icons"></p><br>
                <span id="toggleContent5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, magni quas! Reprehenderit aperiam, commodi quaerat eum delectus voluptatem autem optio. 
                    Rerum non fugit accusantium commodi. Perspiciatis, facilis veniam! Aut, in.</span>
            </section>
        </div>
        <div class="col-md-1"></div>
    </div>
</section><br><br><br><br><br>
<!--faq-->

<!--contact-->
<section id="contact" data-aos="fade-left">
    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <section class="conheading">
            <span id="conhead">Contact Us</span>
            <span id="consmall">Connect with Us: Let's Discuss Your Digital Marketing Needs</span>
            </section>
            <br><br>
            <section class="contact-content">
                <div class="container-fluid">
                    <br><br>
                    <div class="col-sm-6" style="margin-bottom: 25px;">
                        <form action="process_form.php" method="post">
                            <label class="radio-container">
                                <input type="radio" class="radio-input" name="option" value="option1">
                                <span class="radio-icon"></span>
                                Say Hi
                              </label><br><br>
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Name" required style="background-color: white;">
                    
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" required style="background-color: white;">
                    
                            <label for="message">Message*</label>
                            <textarea id="message" name="message" placeholder="Message" required></textarea>
                    
                            <button type="submit" style="width: 100%;">Send Message</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-1"></div>
    </div>
</section><br><br>
<!--contact-->
<!--footer-->
<section class="footer">
    <p>© 2023 Parple All Rights Reserved</p>
</section>
<!--footer-->

<!--z index images-->
<section class="zimages">
<img src="images/contactlogo.svg" alt="" id="contactlogo">
<img src="images/Rectangle 40.png" alt="" id="rec1">
<img src="images/Rectangle 40.png" alt="" id="rec2">
<img src="images/Rectangle left.png" alt="" id="rec3">
<img src="images/Rectangle right.png" alt="" id="rec4">
<img src="images/tri1.png" alt="" id="tri1">
<img src="images/tri2.png" alt="" id="tri2">
<img src="images/tri1.png" alt="" id="tri3">
</section>
<!--z index images-->

<!--JS for button faq-->
<script>
    const toggleButton = document.getElementById("toggleButton");
    const toggleContent = document.getElementById("toggleContent");
    const orange_main = document.getElementById("orange_main");
    const orange = document.getElementById("orange");
    let isContentVisible = false;

    function toggleColor() {
        orange_main.classList.toggle("active");
    }
    
    toggleButton.addEventListener("click", () => {
      isContentVisible = !isContentVisible;
      
      if (isContentVisible) {
        toggleContent.style.display = "block";
        toggleButton.src = "images/minus.png";
      } else {
        toggleContent.style.display = "none";
        toggleButton.src = "images/plus.png";
      }
    });

    //toggle 2
    toggleButton2.addEventListener("click", () => {
      isContentVisible = !isContentVisible;
      
      if (isContentVisible) {
        toggleContent2.style.display = "block";
        toggleButton2.src = "images/minus.png";
      } else {
        toggleContent2.style.display = "none";
        toggleButton2.src = "images/plus.png";
      }
    });
    //toggle 2

    //toggle 3
    toggleButton3.addEventListener("click", () => {
      isContentVisible = !isContentVisible;
      
      if (isContentVisible) {
        toggleContent3.style.display = "block";
        toggleButton3.src = "images/minus.png";
      } else {
        toggleContent3.style.display = "none";
        toggleButton3.src = "images/plus.png";
      }
    });
    //toggle 3

    //toggle 4
    toggleButton4.addEventListener("click", () => {
      isContentVisible = !isContentVisible;
      
      if (isContentVisible) {
        toggleContent4.style.display = "block";
        toggleButton4.src = "images/minus.png";
      } else {
        toggleContent4.style.display = "none";
        toggleButton4.src = "images/plus.png";
      }
    });
    //toggle 4

    //toggle 5
    toggleButton5.addEventListener("click", () => {
      isContentVisible = !isContentVisible;
      
      if (isContentVisible) {
        toggleContent5.style.display = "block";
        toggleButton5.src = "images/minus.png";
      } else {
        toggleContent5.style.display = "none";
        toggleButton5.src = "images/plus.png";
      }
    });
    //toggle 5
</script>
<!--JS for button faq-->

<!--JS animate on scroll-->
<script>
    AOS.init();
  </script>
<!--JS animate on scroll-->
</body>
</html>