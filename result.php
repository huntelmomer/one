


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
  
  <?php
include("conn/mysqlcon.php");


// define variables and set to empty values
$fname = $lname = $email = $gender = $comment = $website = $day = $month = $year ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]); 
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $day = test_input($_POST["day"]);
  $month = test_input($_POST["month"]);
  $year = test_input($_POST["year"]);
  $citizen = test_input($_POST["citizen"]);
  $blood_type = test_input($_POST["blood_type"]);
  
  $city = test_input($_POST["city"]);
  $zipcode = test_input($_POST["zipcode"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $shirt_size = test_input($_POST["shirt_size"]);
  $con_dis = test_input($_POST["Con_dis"]);
}
    $bd=$year."-".$month."-".$day;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $fname,"<br>";
echo $lname,"<br>";
echo $gender,"<br>";
echo $day."/".$month."/".$year,"<br>";
echo $age,"<br>";
echo $citizen,"<br>";
echo $blood_type,"<br>";
echo $address,"<br>";
echo $city." ".$zipcode,"<br>";
echo $phone,"<br>";
echo $email,"<br>";
echo $shirt_size,"<br>";
echo $con_dis,"<br>";



//insert data
$sql = "INSERT INTO tt (fname,lname,age,address,gender,day,citizen,blood_type,city,zipcode,phone,e_mail,shirt_size,con_dis)
           VALUES ('$fname','$lname','$age','$address','$gender','$bd','$citizen','$blood_type','$city','$zipcode','$phone','$email','$shirt_size','$con_dis')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
 <li><a href="reprort.php">อย่ากดเดี๋ยวเสียว</a></li> 
  
  
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>
