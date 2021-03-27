<?php

 include("../db_connection.php");

  $keyword = $_POST['keyword'];

  // Perform the fulltext search
  $query = "SELECT * FROM diagnosis WHERE MATCH(symp) AGAINST ('$keyword')";

  $result = mysqli_query($dbcon,$query);

  // If results were found, output them
  if (mysqli_num_rows($result) > 0) {

    printf("Results: <br />");

    while ($row = mysqli_fetch_array($result)) {

      printf("Chapter %s: <a href='displaycode.php?id=%s'>%s</a>", $row['symp'], $row['sname']);

    }

  } else {
    printf("No results found");
  }

?>