<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <!--
      File: home.html
      Author: Thu Tran, UMass Lowell CompSci Student
      Course: GUI Programming 2
      Email: thu_tran2@student.uml.edu
      Description: This page is the home page to Book-It project. 
      Updated: February 22, 2014
      (Documentation is a modification of Professor Jesse Heines's work.)
    -->

    <title>Book-It Home</title>

    <!-- Load jQuery library from the Google content Delivery Network (CDN)see 
    http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/
    jQuery can also be downloaded and stored locally from http://jquery.com/download/-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

    <!-- Links the javascript needed for this page. -->
    <script src="js/jquery-ui/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="js/employeeDatajs.js" type="text/javascript"></script>
    <script src="js/animations.js" type="text/javascript"></script>

    <!-- The lines below is to link the css to this page. -->
    <link rel="stylesheet" type="text/css" href="css/cupertino/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" type="text/css" href="css/homeCSS.css">

  </head>
  <body>
    <?php
    # include php file with username and password
    require 'scripts/usrpass.php';
    
    # Connecting to database. 
    mysql_connect("localhost", DATABASE_USERNAME, DATABASE_PASSWORD)
      or die("<p>Error connecting to databse:" . mysql_error() ."</p>");
    # echo "<p>Connected to MySQL!</p>"; // line is for testing purposes
    
    
    #  Selecting a specific database to use. 
    # mysql_select_db("your-database-name")
    $db = "ttran";
    mysql_select_db($db) or die("<p>Error selecting the database" . mysql_error() . "</p>");
    # echo "<p>Connected to MySQL, using database <b>$db</b> </p>"; // line is for testing purposes
    ?>
    
    
    <div id="header">
      <div id="image">
        <img src="images/BookItBanner.png" alt="">
      </div>
      
      <div id="loginRegister">
        <form id="usrLoginForm" method="POST">
          <input type="text" placeholder="Username">
          <input type="text" placeholder="Password">
          <!-- Customer log in button - will not implement this until Beta version.  -->
          <a class="userButton" href="home.html" id="loginButton"></a>
          <a class="userButton" href="home.html" id="registerButton"></a>
        </form>
      </div>
      
      <div id="msgTousr">
        <div class="ui-state-highlight ui-corner-all" >
          <div  class="ui-icon ui-icon-info"></div>
          <p id="msg">Below are our professional staff. Click on the picture of your 
            preferred specialist to book an appointment with them. </p>
        </div>
      </div>
    </div>

    <div class="ui-widget ui-employees" id="employeeContent">
      <!-- Dynamic content of employee data will be here -->
    </div>
    <!-- footer -->

    <div id="footer">
      <ul class="nav">
        <li id="nav1">
          Employee Login <!-- Will be implemented if there is time. -->
        </li>
        <li id="nav2">
          <a href="home.html">Home</a>
        </li>
      </ul>
    </div>
  </body>
</html>
