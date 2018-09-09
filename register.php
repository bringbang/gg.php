<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #0E7E62;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav{
	float: right;
    padding: 20px;
    width: 60%;
    background-color: #f1f1f1;
    height: 400px;

}
/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 40%;
    background-color: #f1f1f1;
    height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h3>Run for ตุ๊ตตู่ กันเถอะ</h3>
</header>
<section>
	
<article>
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<p>
<form method="post" action="result.php">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  age: <input type="text" name="age">
  <br><br>
  Address:<br><br> <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  </article>
  <nav>
		Size T-Shirt: S
		<input type="radio" name="size" value="SS">SS
  		<input type="radio" name="size" value="S">S
  		<input type="radio" name="size" value="M">M
  		<input type="radio" name="size" value="L">L
  		<input type="radio" name="size" value="XL">XL
  		<input type="radio" name="size" value="XX">XX
  		<input type="radio" name="size" value="XXL">XXL
  		<br><br>

	</nav>
	<input type="submit" name="submit" value="Submit">  
</form>
<p>

</section>

<footer>
  <p>Footer</p>
</footer>
</body>
</html>