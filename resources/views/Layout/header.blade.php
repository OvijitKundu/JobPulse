 <!-- ***** Preloader Start ***** -->
 <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ asset('index.html') }}"><h2>Job <em>Pulse</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ asset('index.html') }}">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li> 

              <li class="nav-item"><a class="nav-link" href="{{ asset('jobs.html') }}">Jobs</a></li>

              <li class="nav-item"><a class="nav-link" href="{{ asset('about-us.html') }}">About us</a></li>

              <li class="nav-item"><a class="nav-link" href="{{ asset('blog.html') }}">Blog</a></li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ asset('team.html') }}">Team</a>
                    <a class="dropdown-item" href="{{ asset('testimonials.html') }}">Testimonials</a>
                    <a class="dropdown-item" href="{{ asset('terms.html') }}">Terms</a>
                  </div>
              </li>
              
              <li class="nav-item"><a class="nav-link" href="{{ asset('contact.html') }}">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

 
