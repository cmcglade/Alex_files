<!DOCTYPE html>  
<html>  
<head>  
<title>Form Assignment</title>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
</head>  
<body>  

	<h2>Dev Tools Survey</h2>
	<form method='POST'>  
		<P>Please fill out the following form:</p>  
		First Name: <input type="text" name="first name"><br>
		<br>
		Last Name: <input type="text" name="last name"><br>
		<br>
		Postal Code: <input type="text" name="postal code"><br>
		<br>
		Mother's Maiden Name: <input type="text" name="mother's maiden name"><br>
		<br>
		Favourite Colour: <input type="text" name="favourite colour"><br>
		<br>
		<input type="submit" name="submit" value="Submit">

	</form> 

<? php
//Retrieve name from query string and store to a local variable  
$first = $_POST['first name'];
$last = $_POST['last name'];
$postal = $_POST['postal code'];
$mother = $_POST["mother's maiden name"];
$favourite = $_POST['favourite colour'];

echo "<p>Welcome $first! I find it interesting to think about how our identity might change if we had our mother's name.  
If your name wasn't $first $last, but instead it was $first $mother, 
would your favourite colour still be $favourite?  
Would you still live in $postal?<p>";
?>

	
</body>  
</html> 
