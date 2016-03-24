<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

<div class="container">
 <div class="row">
    <form action="" class="col s12" method="POST" enctype= "multipart/form-data" >
      <div class="row">
        <div class="input-field col s6">
          <input  name="news-title" type="text" class="validate">
          <label for="news-title">News Title</label>
        </div>
        <div class="input-field col s6">
          <input name="news-date" type="date" class="validate">
        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="news-img" type="file" class="validate">
         
        </div>
      </div>
      
  <div class="row">
   
  
        <div class="input-field col s12">
          <textarea id="textarea1" name="news-desc" class="materialize-textarea"></textarea>
          <label for="textarea1">Description</label>
        </div>
      </div>
     <div class="switch">
    <label>
      Off
      <input type="checkbox" name="news-status">
      <span class="lever"></span>
      On
    </label>
  </div>

  <input type="submit" name="submit">
  </div>
        </div>
 
    </form>
      <!-- Switch -->
 
       </body>
  </html>
  <?php 

include "class/model.php";

 $status=0;


if(isset($_POST["submit"])){

 if(isset($_POST['news-status'])){
    $status=1;

  }
$mydb = new Database("localhost","root","","oxuaz");
$mynews = new News($mydb->connection,$_POST['news-title'],$_POST['news-date'],$_POST['news-desc'],$status);

}


   ?>