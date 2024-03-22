<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="myportfolio.css">
    <title>PortFolio</title>
    <!-- SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="container-bar navbar navbar-expand-lg navbar-light bg-light">
        <!-- Logo (Full width on all screen sizes) -->
        <div class="logo navbar-brand">MyPortfolio</div>
        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="line-ver"></div>
    <div class="line-hor"></div>
    <div class="home">
        <h2>Home</h2>
    </div>
    <div class="text">Hello, it me</div>
    <div class="text1"> Utsav prasad sah</div>
    <div class="about">
        This is my personal PortFolio website developed by using <span class="auto-type"></span>
    </div>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        const typed = new Typed('.auto-type', {
            strings: ["HTML", "CSS", "JavaScript", "PHP", "MySQL", "Bootstrap", "JQuery"],
            typeSpeed: 80,
            backSpeed: 80,
            loop: true,
        });
    </script>
    <div class="triangle-border"></div>
    <div class="container-content-3">
        <div class="cv-photo" id="movingImage" data-aos="fade-up">
            <img src="uuuu.jpg" alt="">
        </div>
    </div>
    <input type="button" class="button" value="Hire Me!"></button>
    <!-- Bootstrap JS (Optional, for toggling navigation menu on small screens) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the image element
            var image = document.getElementById("movingImage");
            var currentPosition = 100; // Start position at the bottom (100vh)
            // Function to animate the image
            function animateImage() {
                // Move the image up by changing the top position
                currentPosition -= 1; // Adjust the speed by changing this value
                image.style.top = currentPosition + "vh";
                // Check if the image has reached the top
                if (currentPosition <= 0) {
                    clearInterval(animationInterval); // Stop the animation
                }
            }
            // Call the animateImage function repeatedly to create smooth animation
            var animationInterval = setInterval(animateImage, 10); // Change interval time as needed
        });
    </script>

    <div class="container-fluid">
        <div class="container-content-2">
            <div class="row">

                <div class="col-md-12">

                    <div class="card1">
                        <div class="img-circle">
                            <img src="uuuu.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">About Me</h5><br>
                            <p class="card-text">I am a Front End Developer and I have been working in this field for 1 year. I have developed many websites and web applications using HTML, CSS, JavaScript, PHP, MySQL, Bootstrap, and JQuery. I am also familiar with WordPress and other CMS platforms. I am passionate about web development and I am always looking for new challenges and opportunities to improve my skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>


    <div class="col-md-12">
        <div class="skill">
            <img src="skill.jpg" alt="" class="skill-img">
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Skills</h5>


                <p class="card-text">HTML</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
                <p class="card-text">CSS</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
                <p class="card-text">JavaScript</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>
                <p class="card-text">PHP</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
                <p class="card-text">MySQL</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <p class="card-text">Bootstrap</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                </div>
                <p class="card-text">JQuery</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                </div>
            </div>
        </div>
    </div>
    <br> <div class="scrollable-container">
    <div class="carousel-container">
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div>
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div>
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div>
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div> 
      <div class="cards">
        <div class="card-body">
          <img src="uuus.jpg" alt="">
          <h5 class="card-title1">Utsav sah</h5>
          <p class="card-text1">HTML, CSS</p>
          <a href="#" class="btn btn-primary">View Profile</a>
          <a href="#" class="btn btn-primary">Hire Me!</a>
        </div>
      </div>   
     </div>
    <button id="prev-arrow">&lt;</button>
    <button id="next-arrow">&gt;</button>
    <div class="pagination"></div>
  </div>

  <script>



    document.addEventListener("DOMContentLoaded", function() {
      const carouselContainer = document.querySelector(".carousel-container");
      const prevArrow = document.getElementById("prev-arrow");
      const nextArrow = document.getElementById("next-arrow");
      const pagination = document.querySelector(".pagination");

      // Calculate number of slides
      const totalSlides = document.querySelectorAll(".cards").length;

      // Populate pagination dots
      for (let i = 0; i < totalSlides; i--) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        pagination.appendChild(dot);
      }

      // Highlight active dot
      const dots = document.querySelectorAll(".dot");
      let activeIndex = 0;
      dots[activeIndex].classList.add("active");

      // Next button functionality
      nextArrow.addEventListener("click", () => {
        activeIndex = (activeIndex + 1) % totalSlides;
        carouselContainer.style.transform = `translateX(-${activeIndex * 100}%)`;
        updatePagination();
      });

      // Previous button functionality
      prevArrow.addEventListener("click", () => {
        activeIndex = (activeIndex - 1 + totalSlides) % totalSlides;
        carouselContainer.style.transform = `translateX(-${activeIndex * 10}%)`;
        updatePagination();
      });

      // Pagination functionality
      dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
          activeIndex = index;
          carouselContainer.style.transform = `translateX(-${activeIndex * 10}%)`;
          updatePagination();
        });
      });

      // Update pagination dots
      function updatePagination() {
        dots.forEach(dot => dot.classList.remove("active"));
        dots[activeIndex].classList.add("active");
      }
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php if (isset($_SESSION['success'])) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: '<?php echo $_SESSION['success']; ?>',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: '<?php echo $_SESSION['error']; ?>',
                showConfirmButton: false,
                timer: 1500
            })

</script>



    <?php endif; ?>

    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">HTML</li>
                        <li class="list-group-item">CSS</li>
                        <li class="list-group-item">Responsive Design (Mobile First)</li>
                        <li class="list-group-item">JavaScript</li>
                        <li class="list-group-item">PHP</li>
                        <li class="list-group-item">MySQL</li>
                    </ul> -->




</body>

</html>