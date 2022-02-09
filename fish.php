<?php 
session_start(); 
$connection =mysqli_connect("localhost","root","","farm");


if(isset($_POST['registerbtn']))
{
  $Idno=$_POST['Idno'];
  $username=$_POST['username'];
  $date=$_POST['date'];
  $food=$_POST['food'];
  $foodtype=$_POST['Foodtype'];
  $message=$_POST['subject'];


    $query = "INSERT INTO fish (Id,name,date,usefood,foodtype,message) VALUES ('$Idno','$username','$date','$food','$foodtype','$message')";
     $query_run =mysqli_query($connection,$query);

  if($query_run)
  {
    $_SESSION['success']="Entry Added";
  }
  

}
?>



<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Today Work</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/registation.css">
    </head>
    <body>
      <style>
  .button {
  padding: 15px 20px 13px 26px;
  color: #FFF;
  text-decoration: none;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 11%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
  float: right;
}
    


  </style>

      <a href="#" class="button">View Message</a>

      <form action="fish.php"  method="post">
    
      
        <h1>Add Work</h1>
        
        <fieldset>
          <legend><span class="number"></span>Add Work</legend>
          <label for="name">Id:</label>
          <input type="number" id="number" name="Idno">

          <label for="name">Name:</label>
          <input type="text" id="name" name="username">
          

          <label for="date">Today's Date:</label>
          <input type="date" id="date" name="date">

          <label for="name">How many Food have you used:</label>
          <input type="text" id="number" name="food">

          <label for="Quantity">Which type of food Serve Today:</label>
          <select id="job" name="Foodtype">
            <optgroup label="Food">
            <option value="Bhoomi">Organic Food</option>
            <option value="Bhoomi">Bhoomi</option>
            <option value="Foul">Foul</option>
            <option value="Mixed">Mixed</option>
            </optgroup>
            <br>

          <label for="subject">Any Requirement for your Department </label>
          <textarea id="subject" name="subject" placeholder="What Requirement...." style="height:200px"></textarea>
        
          </optgroup>
        </select>
        </fieldset>
        <button type="submit" name="registerbtn">Submit Work</button>
      </form>
      
    </body>
  </head>
</html>