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
      <li><a href="register1.php">สมัคร Run</a></li>
      <li><a href="reprort.php">ตรวจสอบ BIB</a></li>
      <li><a href="https://www.google.com/maps/place/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%9B%E0%B8%90%E0%B8%A1%E0%B9%80%E0%B8%88%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B9%8C/@13.8178332,100.0547177,17z/data=!4m18!1m12!4m11!1m3!2m2!1d100.0589825!2d13.8196043!1m6!1m2!1s0x30e2e5cf2e09e903:0xd4dab14e6e7098a0!2z4LihLiDguKjguLTguKXguJvguLLguIHguKMgUmF0Y2hhbWFra2hhIE5haSwgUGhyYSBQYXRob20gQ2hlZGksIOC4reC4s-C5gOC4oOC4reC5gOC4oeC4t-C4reC4h-C4meC4hOC4o-C4m-C4kOC4oSDguJnguITguKPguJvguJDguKEgNzMwMDA!2m2!1d100.044996!2d13.817604!3m4!1s0x30e2e5ea75d0cc8f:0x855c9d783f38236c!8m2!3d13.8196319!4d100.0601419">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
<article>
  
  <h2>มาวิ่งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงกันนนนนนนนนนนนนนนนนนนนนนนนนนน</h2>
  
  
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>