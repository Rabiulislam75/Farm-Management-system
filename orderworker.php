
<!DOCTYPE html>
<html>
<head>
	<title>Order Worker</title>
</head>
<body>
	<form>
		<div class="container">
  <form action="action_page.php">

    

    <label for="lname">Enter Id</label>
    <input type="number" id="lname" name="lastname" placeholder="Enter Worker Id">
    <br>


    <label for="subject">Add Message </label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
  <style>


  	input[type=text], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px;
  resize: vertical ;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</div>



	</form>

</body>
</html>