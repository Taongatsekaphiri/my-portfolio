<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
<title>TAONGA TSEKA PHIRI</title>
  


</head>
<header>
    <nav >
        <ul>
            <li><a href="index.html"style="color:white">HOME</a></li>
        <li><a href="skills.html" style="color:white"><l>SKILLS</l></ah></li>
        <li><a href="about us.html" style="color:white"><l>ABOUT US </l></a></li>
        <li><a href="project.html" style="color:white"><l>PROJECTS</l></a></li>
        
      </ul>
    </nav>

    <h2>TAONGA TSEKA PHIRI</h2>
</header>
<body>
<p>Email: tsekaphiritaonga@gmail.com<br>
   Phone: 0998888020/0889446819<br>
<h3>Social media</h3>
   Facebook: Taonga Tseka<br>
   whatsapp: 0998888020</P>


   <form id="contact-form" method="POST" action="process-form.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
  
    <button type="submit">Submit</button>
  </form>
  
    <script src="script.js"></script> 




    <h1>My Map</h1>
  <div id="map"></div>

  <script src="script.js"></script>
  <!-- Load the Google Maps JavaScript API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

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
if ($result->num_row > 1) {
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
</html>