<?php
  
  /*
  this is my ref:Tutorial URL: http://sixrevisions.com/css/responsive-background-image/ 

  quick theme and layout 

  to create housing loan web application to present webon company 2015-05-04 by pongsak prabparn

  idea : need to create modern website not too much pages and have all functions that customer need 

  in this industrial
  */ 


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Housing Loan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Housing Loan">
  <meta name="description" content="Housing Loan">

  <link href="http://fonts.googleapis.com/css?family=Kotta+One|Cantarell:400,700" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="responsive-full-background-image.css">

  <!--JS-->
  <script src="js/jquery.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/coreFunctions.js"></script>
</head>
<body>
  <nav class="navbar" id="top">
    <div class="inner">
    <a href="#aboutus">About Us</a>
    <a href="#rate">Rate</a>
    <a href="#calculator">Calculate</a>
    </div>
  </nav>
  <header class="container">
    <section class="content">
      <h1>Housing Loan</h1>
      <p class="sub-title"><strong>For simplicity we assume a fixed interest of 3.5% per year </strong> <br />during the complete payback time</p>
      <p><a class="button" id="load-more-content" href="#top">Load some content</a></p>
    </section>
  </header>
  <div class="container">
    <div id="aboutus">
      <blockquote>
        <h1>About Us</h1>
        Housing Loan is a leading provider of Housing Finance in 
        Thailand. With our customised solutions we have fulfilled over 4.9 million dreams over the last three and a half decades. Here is why Housing Loan is a household name that Thais proudly reckon with.
      </blockquote>
    </div>
    <div id="rate">
      <blockquote>
        <h1>Rate</h1>
        we assume a fixed interest of 3.5% per year during the complete payback time. The
        interest should be connected to the loan type in such a manner that different loan types can have 
        different interests.
      </blockquote>
    </div>
    <div id="calculator">
      <blockquote>
         <?php require_once('calculator.php'); ?>
      </blockquote>
    </div>
    <div id="results">
      <blockquote>
        <h3 id="amortization-header"></h3>
      <table id="amortization"></table>
      </blockquote>
    </div>
  </div>
  <footer>
    pongsak prabparn housing loan ©  <?php echo date('Y'); ?>
  </footer>
</body>
</html>
<style type="text/css">
blockquote {
    border-left: 0px solid #eee;
    margin: 15px auto;
    padding: 15px;
}

a:hover{
  color: #fff;
  text-decoration: none;
}
h1 {
  color: #efecec;
  text-transform: uppercase;
  font-size: 40px;
  line-height: 50px;
  font-weight: 400;
  margin-top: 20px;
}
p{
  color: #fff;
}
.add-on{
  color: #000;
}
</style>