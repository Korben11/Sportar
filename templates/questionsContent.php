<article>
	
<h1>
	Visitors questions
</h1>

<?php 

$conn = getConnection();
$sql = "SELECT name, email, comment FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "<br>Email: " . $row["email"]. "<br>Comment:  " . $row["comment"]. "<br><br><br>";
    }
} else {
    echo "0 results";
}
?>


</article>