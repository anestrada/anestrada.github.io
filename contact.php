<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap 3 Lumen -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- jQuery CDN -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <!-- javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
        crossorigin="anonymous">
    </script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <title>Smart Decisions</title>
    
</head>

<body>
    <!-- top area -->
      <section>
        <div class="container top">
          <div class="row">
            
            <div class="col-md-4 col-sm-5">
              <a href="index.php">
                <img class="logo" src="img/SmartDecisions_Logo.png" alt="Smart Decisions logo" style="height: 150px"/>
              </a>
            </div>
            
            <div class="col-md-4 col-sm-2"></div>
            
            <div class="col-md-4 col-sm-5">
              <p class="contact"><b>Judith McCaskill &mdash; Financial Advisor</b></p>
              <p class="contact"><i class="fas fa-phone fa-lg"></i>&emsp;(831) 444 - 5478</p>
              <p class="contact"><i class="fas fa-envelope fa-lg"></i>&emsp;calljudynow@gmail.com</p>
            </div>
          </div>
          
        </div>
      </section>
      
      <!-- navigation bar -->
      <nav class="navbar navbar-default">
        <!-- navigation -->
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">Home
                  
                </a>
              </li>
              <li>
                <a href="services.php">Services</a>
              </li>
              <li>
                <a href="resources.php">Resources</a>
              </li>
              <li>
                <a href="about.php">About</a>
              </li>
              <li class="active">
                <a href="contact.php">Contact
                    <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      
      <!-- form -->
        <div class="container">
          <h2>Contact</h2>
            <form>
              <fieldset>
                <div class="form-group row">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="name" class="form-control" id="exampleInputPassword1" placeholder="John Doe">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                
                <div class="form-group">
                  <label for="exampleTextarea">Your Message</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </fieldset>
            </form>
        </div>
      
      <!-- footer -->
    <section>
      <div class="footer grey">
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 footer-text">
                <p style="color:white; padding: 20px; text-align: center;">&copy; Judith McCaskill <?php echo Date('Y'); ?></p>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

</body>
</html>