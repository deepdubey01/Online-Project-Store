<?php require('design/header.inc.php'); 
if(isset($_SESSION['user_login']) && $_SESSION['user_login']!=''){

}else{
  echo "<script>
  window.location.href='login/login_page.php';
  exit();
  </script>";  
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>

    
    .about_column {
      float: left;
      width: 33.3%;
      border: 2px solid whitesmoke;
      margin-top: 2.5em;
      margin-left: 10em;
      margin-bottom: 16px;
      padding: 0 8px;
    }
     
    .about_hr_text{
      text-align: center;
    }

    .about_hr_text_title{

    font-size: 30px;
    font-weight: 600;
    margin-top: 20px;
    font-family: auto;
    margin-bottom: -15px;
    }

    .about_hr_text hr{
         border-width: 1px;
      height: 1px;
      color:gray;
      width: 74%;
    }

    .about_card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: darkslategrey;
      color: white;
    }
    .about-section p {
      color: bisque;
      font-size: 20px;
      font-family: serif;
    }
    .container_about {
      text-align: center;
      padding: 0 16px;
      background-color: white;
    }

    .container_about::after, .about_row::after {
      content: "";
      clear: both;
      display: table;
    }

    .container_about .title {
      color: grey;
    }

    .container_about p{
      font-size: 17px;
    }

    @media screen and (max-width: 650px) {
      .about_column {
        width: 100%;
        display: block;
      }
    }
  </style>
</head>
<body>

  <div class="about-section">
    <h1>About Us Page</h1>
    <p>"OGS_MART" is a website intended for online retailers. The main objective of this application is to make it interactive and easy to use. It would make searching, viewing and selection of a product easier. It contains a sophisticated search engine for the user's to search for products specific to their needs.</p>
    <p>The search engine provides an easy and convenient way to search for products where a user can search for a product interactively and the search engine would clarify the products available based on the user’s input.</p>
  </div>

  <div class="about_hr_text">
    <div class="about_hr_text_title">Our Team</div>
    <hr>
  </div>
  <div class="about_row">
    <div class="about_column">
      <div class="about_card">
        <div class="container_about">
          <h2>Sneha Gupta</h2>
          <p class="title">Php Connectivity and Database Manage</p>
          <p>Team Work, Creative, Versatility and Trustworthiness</p>
          <p><span>Instagram: </span></p>
        </div>
      </div>
    </div>




  </body>
  </html>
<?php require('design/footer.inc.php'); ?>