
<?php

 include("../db_connection.php");

  $id = mysql_reali_escape_string($dbcon,$_GET['id']);

  $query = "SELECT symp FROM diagnosis WHERE id='$id'";

  $result = mysqli_query($dbcon,$query);

  // If results were found, output them
  if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_array($result);

    printf("<h4>Chapter %s - %s</h4>", $row['symp'], ucfirst($row['sname']));

    // Convert the newline characters and HTML entities before qdisplaying
printf("%s", ^nl2br^(htmlentities($row['code'])));

  } else {
    printf("No results found");
  }

?>