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
    
	background-image:url('img/mm.jpg');
	background-repeat: no-repeat;
	background-position: center bottom; 
    background-size: 100% 300%;
    padding: 30px;
	border: 10px solid black;
    text-align: center;
    font-size: 35px;
    color:#ffffff;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 1000px; /* only for demonstration, should be removed */
    background: #ffffff;
	 opacity: 0.9;
     filter: alpha(opacity=60);
    padding: 20px;
	font-size: 15px;
	color:;
	border: 2px solid black;
    
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float : left;
    text-align :left;
    padding: 20px;
    width: 70%;
    background-color: #ffffff;
	border: 2px solid black;
    opacity: 0.9;
    filter: alpha(opacity=60);
    height: 1000px;  /*only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #D8BFD8;
    padding: 10px;
	border: 2px solid black;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 100%) {
	 
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body style="background-image:url('img/bb.jpg');
	background-repeat: no-repeat;
    background-size: 100% 100%;">
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
	<li><a href="index.php">Home</a></li>
<li><a href="register1.php">สมัคร Run</a></li>
      <li><a href="reprort.php">ตรวจสอบ BIB</a></li>
      <li><a href="https://www.google.com/maps/place/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%9B%E0%B8%90%E0%B8%A1%E0%B9%80%E0%B8%88%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B9%8C/@13.8178332,100.0547177,17z/data=!4m18!1m12!4m11!1m3!2m2!1d100.0589825!2d13.8196043!1m6!1m2!1s0x30e2e5cf2e09e903:0xd4dab14e6e7098a0!2z4LihLiDguKjguLTguKXguJvguLLguIHguKMgUmF0Y2hhbWFra2hhIE5haSwgUGhyYSBQYXRob20gQ2hlZGksIOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4meC4hOC4o-C4m-C4kOC4oSDguJnguITguKPguJvguJDguKEgNzMwMDA!2m2!1d100.044996!2d13.817604!3m4!1s0x30e2e5ea75d0cc8f:0x855c9d783f38236c!8m2!3d13.8196319!4d100.0601419">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
<article>
  <h2>Running Forms</h2>

    <form method="post" action="result.php">
    First name*<br><!--ชื่อจริง-->
        <input type="text" name="fname" value="Narupon" style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    Last name*<br><!--นามสกุล-->
        <input type="text" name="lname" value="Paiboon"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    <h2>Gender*</h2><!--เพศ-->

        <input type="radio" name="gender" value="male" checked > Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
		

    <br>
    <B>Brith Date(DD/MM/YY)*</B>
		<input type="text" name="day" value="18"size="2"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
		/ <input type="text" name="month" value="08" size="2"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
		/ <input type="text" name="year" value="2540" size="4"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <B>Age*</B> 
		<input type="text" name="age" value="22" size="2"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
		<br><br>
    <B>Citizenship*</B><input type="text" name="citizen" value="Germany"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    <B>Blood type*</B><br>
        <input type="radio" name="blood_type" value="A"> A
        <br>
        <input type="radio" name="blood_type" value="B"> B
        <br>
        <input type="radio" name="blood_type" value="O" checked> O
        <br>
        <input type="radio" name="blood_type" value="AB"> AB
        <br>
        

    <B>Address*</B>
    <br>
    <textarea name="address" rows="10" cols="30" style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)" 
	>อยู่ไหนก็ได้</textarea>
    <br><br>
    <B>City*</B>
	<input type="text" name="city" value="Berlin"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
	<B>Zip code*</B>
	<input type="text" name="zipcode" value="10115"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    <B>Phone*</B>
	<input type="text" name="phone" value="086-841XXXX"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    <B>E-mail*</B>
	<input type="text" name="email"value="XXX@gmail.com"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br>
    <B>Preferred Shirt Size*</B><select name = "shirt_size"style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
	    
        <option value="XS">XS 36"</option>
        <option value="S">S 38"</option>
        <option value="M"checked>M 40"</option>
        <option value="L">L 42"</option>
        <option value="XL">XL 44"</option>
        <option value="XXL">XXL 46"</option>
    </select>
    <br>
    <B>Congenital disease*(ไม่มีไม่ต้องใส่)</B><input type="text" name="Con_dis"
	value="ขก."style="background:linear-gradient(to top, #ff9933 0%, #ffff66 100%)">
    <br><br>
    <input type="submit" value="Submit">
    </form>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>