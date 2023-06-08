<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
<title>SKILLS</title>

</head>
<header>
    <nav >
        <ul class="animated-header">
        <li><a href="index.html"style="color:white"><l>HOME</l></a></li>
        <li><a href="about us.html"style="color:white"><l>ABOUT US</l></a></li>
        <li><a href="project.html" style="color:white"><l>PROJECTS</l></a></li>
        <li><a href="contact.html" style="color:white"><l>CONTACTS/l</a></li>

      </ul>
    </nav>

    <h2 class="animated-header">TAONGA TSEKA PHIRI</h2>
</header>
<body>
<h3 class="animated-header">SKILLS AND EXPERIENCES</h3>



<P2> 
    As an ICT student i have acquired a range of skills and gain familiarity <br>
    with various tools and technologies.Below is a list of some of skills, tools <br>
    and technologies.<br>
</P2>
     <h3 class="animated-header">SKILLS</h3>  

 <p3>1.programming:i have acquired foundational programming skills in language such as <br>
      java,c,HTML/CSS and c++. I can write and debug code, understand algorithims and data<br>
      structure, and develop simple application.<br>
</p3>


<p2>2.Technical profiency:I have gained  solid understandof ICT concepts and technologies,<br>
     including computer hardware, software apllications, operating systems, networks, database <br>
     and programming language.<br>
</p2>


<p1>3.web development: I have gained familiarity with web development technologies, including HTML,<BR>
      CSS and Javascript, i can apply styling snd add interactivity.<br>
</p1>


<h3 class="animated-header"> Tools and technologies</h3>

<p2>
1.Intergrated development Environments(IDEs): i haved worked with tools like Enclipes, visual studio<br>
  for programming and web development.<br>
</p2>

<p2> 
2.Network tools: i have used Network tools like Cisco Packet Tracer for Network simulation and wireshark
  for network analysis.<br>
</p2>
<p2>
3. Operating systems: profient in working with Windows, Linux, and macOS Environments.<br>
</p2>



<script src="script.js"></script> 

<h3>MySQLI CONNECTION</h3>
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "my_data";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn);
}
echo "Connected successfully";
echo "<br>";


 // Query to retrieve data from a table
 $sql = "SELECT * FROM my_data";
    
 // Execute the query
 $result = $conn->query($sql);
 
 // Check if any rows are returned
 if ($result->num_rows > 0) {
     // Output data of each row
     while ($row = $result->fetch_assoc()) {
         // Access specific column values
         $column1 = $row["id"];
         $column2 = $row["PASSWORD"];
 
         // Do something with the retrieved data
         echo "Column 1: " . $column1 . "<br>";
         echo "Column 2: " . $column2 . "<br>";
         echo "<br>";
     }
 } else {
     echo "No rows found.";
 }

 
?>



</body>
<footer>

</footer>