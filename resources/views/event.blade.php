<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UET Webinar Stream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
    <link rel="icon" href="{{ asset("image/logo.png") }}" type="image/main-logo">
    
    </head>
    

    <!-- ---------------------Navbar------------------------------------- -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="{{ asset("image/logo.png") }}" class="main-logo">
          <a class="navbar-brand" href="#" id="heading">Webinar Stream</a>
       
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="committee.html">Committee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
        
        </div>
        
       </nav>
<!-- -----------------------------------------Navbar End---------------------------------------------- -->


<!-- ----------------------------------------------slideshow----------------------------------------------------------------- -->
<div class="course-heading">
  <h2>Local Market Webinar</h2>
  </div>
  <!-- -------------------------------------Course Content----------------------------------------------- -->

  <div class="course-content">
      <div>
          <img src="{{ asset('image/'.$event->id.'.png') }}" class="course-img">
          
      </div>
      <div>
          <p class="course-intro">
            In this webinar, you can discuss various aspects of trade, including emerging trends and technologies, effective marketing strategies, and customer service techniques. Through this platform, you can also offer advice on adapting to changes in the market environment and improving business practices. By incorporating anecdotes and experiences from different businesses, you can motivate your audience and inspire them to take action. Hosting such webinars can strengthen the local business community and contribute to its growth and prosperity.<!-- ----------------------------table----------------------------- -->
          <table>
              <thead>
                <tr>
                  
                  <th>Speaker</th>
                  <th>Eligibility Criteria</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                  <td>Dr.Aziz Khan Niazi</td>
                  <td>Graduation</td>
                  
                </tr>
               
              </tbody>
            </table>
          
          <a href="form.html" class="btn btn-primary" id="register-btn">Apply Now</a>
         
        
        
      </div>



  </div>


<!-- ---------------------------------------------------Second line of cards------------------------------ -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>



</html>