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
              <li class="active">
                <a href="index.php">Home
                  <span class="sr-only">(current)</span>
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
              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    
    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
      <div class="container jumbotron-inner">
        <h1>Welcome!</h1>
        <p>Judith is here to help you make some smart decisions.</p>
      </div>
    </header>

    <!-- services icons -->
    <script>
      $( document ).ready(function() {
        var heights = $(".well").map(function() {
        return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);

        $(".well").height(maxHeight);
      });
    </script>
      <section>
        <div class="container">
        <!-- Service Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 service-spacer">
                <div class="well service-block">
                    <button class="btn btn-success">
                      <a href="services.php#ebook" style="color:white;">
                        <p><i class="fas fa-book fa-5x fa-fw"></i></p>
                      </a>
                    </button>
                    <div class="caption">
                        <h3>E-Book</h3>
                        <p>Learn how to wield the financial tools Judith uses by reading her self-published book, 
                          7 Principles: Turn Your Salary into Millions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 service-spacer">
                <div class="well service-block">
                    <button class="btn btn-success">
                      <a href="services.php#seminar" style="color:white;">
                        <p><i class="fas fa-chalkboard-teacher fa-5x fa-fw"></i></p>
                      </a>
                    </button>
                    <div class="caption">
                        <h3>Seminar</h3>
                        <p>Take part in Judith's weekly seminars about the tools explained in her E-Book.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 service-spacer">
                <div class="well service-block">
                    <button class="btn btn-success">
                      <a href="services.php#personal-advising" style="color:white;">
                        <p><i class="fas fa-user-friends fa-5x fa-fw"></i></p>
                      </a>
                    </button>
                    <div class="caption">
                        <h3>Personal Advising</h3>
                        <p>Spend some one-on-one time with Judith to discuss the financial solutions available to you and learn how to make smart financial decisions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 service-spacer">
                <div class="well service-block">
                  <button class="btn btn-success">
                      <a href="services.php#free-quote" style="color:white;">
                        <p><i class="fas fa-calculator fa-5x fa-fw"></i></p>
                      </a>
                    </button>
                    <div class="caption">
                        <h3>Free Quote</h3>
                        <p>Describe your financial advising request and provide some information to receive a free quote on Judith's services.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
            

    <!-- About -->
    <section>
      <div class="container-fluid green">
        <div class="container">
          <div class="row">
            <div class="col-md-7 about">
              <h3>My Story</h3>
              <p>Judith McCaskill is a financial advisor located in the central coast of California, but she serves those in need of financial assistance all over the country.
                Smart Decisions Inc. first began in the state of Virginia and has since expanded coast to coast.</p>
              <p>Judith is also active in the community through volunteer service. Her personal goal is to help educate others to make their own financial decisions.</p>
              <a href="about.php">
                <button class="btn btn-default">More about me</button>
              </a>
            </div>
            <div class="col-md-5">
              <img src="img/aboutJudith.jpg" alt="photo of Judith" class="img-rounded center-block" style="height: 250px">
            </div>
          </div>
        </div>
      </div>
    </section>
      
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