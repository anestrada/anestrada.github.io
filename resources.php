<?php

// include 'dbConn.php';
// $dbConn = getDbConn();

// // arrays
// $categoryName = [];
// $insurance = [];
// $networking = [];
// $training = [];

// get category names and types

// $sql = "SELECT categoryName, categoryType
//         FROM r_category";
        
// $stmt = $dbConn->prepare($sql);
// $stmt->execute();

// $records = $stmt -> fetchAll(PDO::FETCH_ASSOC);

// // create category arrays
// foreach($records as $r) {
//   switch($r['categoryType']) {
//       case 'Insurance':
//           array_push($insurance, $r['categoryName']);
//           break;
//       case 'Networking':
//           array_push($networking, $r['categoryName']);
//           break;
//       case 'Training':
//           array_push($training, $r['categoryName']);
//           break;
//       default:
//   }
// }

// // create category buttons
// function makeSearch($arr, $type) {
//   foreach($arr as $a) {
//       switch($type) {
//         case 'insurance':
//           $color = 'success';
//           break;
//         case 'networking':
//           $color = 'primary';
//           break;
//         case 'training':
//           $color = 'info';
//           break;
//       }
      
//       echo '<a href="#" class="btn btn-' . $color . ' ' . $type . ' filter">' . $a . '</a>';
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap 3 Lumen -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-gv0oNvwnqzF6ULI9TVsSmnULNb3zasNysvWwfT/s4l8k5I+g6oFz9dye0wg3rQ2Q" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
              <li class="active">
                <a href="resources.php">Resources
                  <span class="sr-only">(current)</span>
                </a>
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

    <!-- main -->
    <section>
      <div class="container">
        <h1>Resources</h1>
        <!-- search bar -->
        <div class="row">
          <!--<div class="col-lg-3"> </div>-->
          
          <div id="searchBar" class="col-lg-12">
            <form class="navbar-form navbar-left" role="search">
              <h3>Filter Search Criteria: </h3>
              <div id="searchStuff">
                <div class="form-group">
                  <input type="text" name="searchText" id="searchText" class="form-control" placeholder="Enter a search term">
                </div>
                
                <div id="searchButtons">
                  <button type="submit" id="searchSubmit" class="btn btn-primary">Submit</button>
                  <button type="reset" id="searchClear" class="btn btn-default">Clear</button>
                </div>
             </div> 
              
            </form>
            
          </div>
        </div>

        <!-- search panels -->
        <div class="row">
          <div class="col-lg-4">
            <!-- insurance -->
            <div class="panel panel-success">
              <div class="panel-heading">
                <label id="insuranceCheck">
                  <input type="checkbox" checked> Check All
                </label>
                <h3 class="panel-title">Insurance</h3>
              </div>
              <div class="panel-body">
                <?php makeSearch($insurance, 'insurance'); ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <!-- networking -->
            <div class="panel panel-primary">
              <div class="panel-heading">
                <label id="networkingCheck">
                  <input type="checkbox" checked> Check All
                </label>
                <h3 class="panel-title">Networking</h3>
              </div>
              <div class="panel-body">
                <?php makeSearch($networking, 'networking'); ?>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <!-- training -->
            <div class="panel panel-info">
              <div class="panel-heading">
                <label id="trainingCheck">
                  <input type="checkbox" checked> Check All
                </label>
                <h3 class="panel-title">Training</h3>
              </div>
              <div class="panel-body">
                <?php makeSearch($training, 'training'); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- results -->
        <div class="row">
          <div class="col-lg-12">
            <h2><span id="searchNum" class="badge" style="font-size: 20px;">0</span> Search Results</h2>
            
            <!-- no results found message -->
            <div id="no-results" class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Sorry!</strong> No search results found. Please try changing your search criteria.
            </div>
            
            <!-- list of result items -->
            <div id="fillArea" class="container">
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

  
    <!-- jQuery CDN -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    
    <!-- javascript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- APIs and filtering search results -->
    <script>
    
    $(document).ready(function(){ 
      // global variables
      var searchVal = 0; 
      
      // get search results from database
      function searchResults(getData) {
        console.log(getData);
                
        // separate api data into tags and item info
        var items = getData[0];
        var tags = getData[1];
        var spanClass = '';
        searchVal = 0; 
        
        if(items.length < 1) {
          // give warning message
          $('#no-results').show();
        } else {
          // hide warning message
          $('#no-results').hide();

          for(var i in items) {
            // make item boxes
            $('<div>')
              .appendTo('#fillArea')
              .attr('id', 'item' + items[i].itemId)
              .addClass('row itemBox')
              // add a small col for img/link
              .append(
                $('<div>')
                  .addClass('col-sm-2')
                  // img with link
                  .append(
                    $('<a>')
                      .addClass('linkImage')
                      .attr('href', items[i].itemLink)
                      .attr('target', '_blank')
                  )
                  // link
                  .append(
                    $('<a>')
                      .attr('href', items[i].itemLink)
                      .attr('target', '_blank')
                      .addClass('btn btn-link')
                      .html('Link')
                  )
              )
              //add title/description
              .append(
                $('<div>')
                  .addClass('col-sm-10')
                  // title
                  .append(
                    // ADD LINK TO TITLE
                    $('<h3>').html(items[i].itemName).addClass('itemTitle')
                  )
                  // description
                  .append(
                    $('<p>').html(items[i].itemDescription)
                  )
              ); // end of div rows
              
              // if itemImage, add <img>; else link <i>
              if(items[i].itemImage.length < 20) {
                $('<i class="' + items[i].itemImage + '"></i>').appendTo('#item' + items[i].itemId + ' div a.linkImage');
                
              } else {
                $('<img src="' + items[i].itemImage + '" alt="' + items[i].itemName + '" />').appendTo('#item' + items[i].itemId + ' div a.linkImage');
              }
              
              searchVal++
          } // end items
          
          for(var t in tags) {

            switch(tags[t].categoryType) {
              case 'Insurance':
                spanClass = 'label-success';
                break;
              case 'Networking':
                spanClass = 'label-primary';
                break;
              case 'Training':
                spanClass = 'label-info';
                break;
              default:
                spanClass = 'label-default';
            }

            // $('#item' + tags[t].itemId + ' div h3')
            //   .append(
                $('<span>')
                  .addClass('label ' + spanClass + ' ' + tags[t].categoryType.toLowerCase())
                  .html(tags[t].categoryName)
                  .insertAfter($('#item' + tags[t].itemId + ' div h3'));
              // );          
          }
        
        }
        
        $('#searchNum').html(searchVal);
      } //end search func      

      // create all search results
      function fillArea() {
        // make sure to not overlap existing search results list
        $('#fillArea').empty();

        // call for all table data
        $.ajax({

          type: "GET",
          url: "fill-api.php",
          dataType: "json",
          data: { },

          success: function(data, status) {
            searchResults(data);
          },

          complete: function(data, status) {
            // alert(status);
          }

        });
        
        $('.filter').removeClass('clicked');
        $('.panel-heading label input').prop('checked', true);
        
      };
        
      fillArea();

      // filter results based on search entry
      function searchText(e) {
        e.preventDefault();
        
        $('#fillArea').empty();

        console.log('submitted: ' + $('#searchText').val());
        
        var item = "";
        
        // input search bar value as item variable
        if($('#searchText').val() !== "") {
          item = 'item=' + $('#searchText').val();
        }
        
        $.ajax({
          type: "GET",
          url: "search-api.php?" + item,
          dataType: "json",
          data: { },
          
          success: function(data,status) {
            // console.log(data);
            searchResults(data);
          }, // success
          
          complete: function(data,status) {
            // alert(status);
          } // complete 

        }); //ajax
        
        $('.filter').removeClass('clicked');
        $('.panel-heading label input').prop('checked', true);
      };
      
      // remove items if button is .clicked
      function displayItems(cat, tags, status) {
        
        for(var t in tags) {
          
          if(status == 'show') {
            $('span.' + cat + ':contains("' + tags[t] + '")').parents('.itemBox').show();
            // searchVal += $('span.' + cat + ':contains("' + tags[t] + '")').parents('.itemBox').length;
            
          } else {
            // check if multiple <span> in .itemBox w class cat
            
            var parArr = [];
            
            $('span.' + cat + ':contains("' + tags[t] + '")').parent().each(function() {
              parArr.push($(this));
            });
            
            for(var p in parArr) {
              if(parArr[p].children('span').length == 1) {
                // only 1 tag
                
                parArr[p].parent().hide();
                // searchVal -= $('span.' + cat + ':contains("' + tags[t] + '")').parents('.itemBox').length;
              } else {
                // more than 1 tag; check if other buttons are clicked
                
                // get text from span to match against search buttons
                var spanArr = [];
                parArr[p].children('span').each(function() {
                  spanArr.push($(this).text());
                });
                
                // remove button just clicked from array
                spanArr.splice(spanArr.indexOf(tags[t]),1);
                
                // create counter to match against spanArr.length
                var clickedCount = 0;
                
                // loop of tags text
                for(var s in spanArr) {
                  // if $('.panel-body a.' + tags[t] + ':contains("' + spanArr[s] + '")') hasClass clicked, then clickedCount++
                  if($('.panel-body a.' + cat + ':contains("' + spanArr[s] + '")').hasClass('clicked') == true) {
                    clickedCount++;
                  } 
                }
                
                // if all buttons are clicked, hide
                if(clickedCount == spanArr.length) {
                  parArr[p].parent().hide();
                } 
                
              }
            }
            
          }
          
          // console.log('all box= ' + $('.itemBox').length + ' hidden box= ' + $('.itemBox:hidden').length);
          $('#searchNum').html($('.itemBox').length - $('.itemBox:hidden').length);
          
          if($('.itemBox:hidden').length >= $('.itemBox').length) {
            $('#no-results').show();
          } else {
            $('#no-results').hide();
          }
        }
        
      };

      $('#searchSubmit').click(searchText);
      $('#searchClear').click(fillArea);

      // clicking/unclicking check all button
      $('.panel-heading label input').click(function() {
        var cat = $(this).parent().attr('id').split('C')[0];
        var tags = [];
        
        $(this).parent().parent().parent().children('.panel-body').children('a').each(function() {
          tags.push($(this).text());
        });
        
        // console.log(tags);
      
        // console.log(cat);
        console.log($(this).prop('checked'));
        
        if($(this).prop('checked') == true) {
          // console.log(cat + ' clicked');
          $('a.' + cat).removeClass('clicked');
          displayItems(cat, tags, 'show');
        } else {
          // console.log(cat + ' not clicked');
          $('a.' + cat).addClass('clicked');
          displayItems(cat, tags, 'hide');
        }
        
      });
      
      // toggle search buttons to filter results
      $('.filter').click(function() {
        // set variables
        var tag = $(this).html();
        var cat = $(this).attr('class').split(' ')[2];
        var tags = [];
        tags.push(tag);
        
        // console.log(cat);
        
        // disabled = hidden; if currently disabled, change to show

        // check if btn is clicked
        if($(this).hasClass('clicked')) {
            $(this).removeClass('clicked');
            displayItems(cat, tags, 'show');
            
        } else { 
            $(this).addClass('clicked');
            displayItems(cat, tags, 'hide');
        }
        
        // ABOUT THE CHECK ALL
        // console.log(cat + ' ' + $('a.' + cat + '.clicked').length);
        
        // add check all clicked if all are selected; else take away
        if($('a.' + cat + '.clicked').length == $('a.' + cat).length || $('a.' + cat + '.clicked').length > 0) {
          $('#' + cat + 'Check input').prop('checked', false);
        } else {
          $('#' + cat + 'Check input').prop('checked', true);
        }
        
      });

    });
    
    
    </script>

</body>
</html>