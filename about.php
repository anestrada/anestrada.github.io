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
    <title>Smart Decisions | About</title>
    
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
              <li class="active">
                <a href="about.php">About
                    <span class="sr-only">(current)</span>
                </a>
              </li>
              <li>
                <a href="contact.php">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      
      <!-- Info -->
      <div class="container about-page">
          <h1>About</h1>
          <div>
              <h2>Mission Statement</h2>
              <p>
                  Smart Decisions Inc. aims to help both families and small business owners make smart decisions about their daily financial strategies. 
              </p>
          </div>
          <div>
              <h2>About Judith</h2>
              <p>
                  Judith actually started in the field of chemistry as a scientist for 14 years.  
                  In the afterhours, she worked from home as a financial advisor. Now her financial advising business has expanded to include 
                  an office space where she meets clients and a self-published E-book on the principles she personally uses for financial decisions.
              </p>
              <p class="block-quote">
                  Every decision, everything I do, is to help you save money and put money back into the budget in order to give you more buying power. 
                  I run a comparison analysis that will determine whether the decision at hand will save or not save you money.
              </p>
          </div>
          <div>
              <h2>Volunteer Work</h2>
              <p>
                  Judith participates in many volunteer activities in the local community. She tries to participate in a few volunteer projects at one time. In the past, 
                  Judith has assisted with the Salinas Valley Ag Tech Summit, presented to business students at Central Coast College, and mentored high school students.
              </p>
          </div>
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