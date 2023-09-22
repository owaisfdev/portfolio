<?php require_once('config.php') ?>
<?php
  $date = $_POST['date'];
  $projectname = $_POST['projectname'];
  $url = $_POST['url'];
  $type = $_POST['type'];
  $technology = $_POST['technology'];
  $sql = "INSERT INTO formdata (date, name, url, type, technology) VALUES ('$date', '$projectname', '$url', '$type' , '$technology')";
  if (mysqli_query($conn, $sql)) {
    session_start();
    $response = $_SESSION['success_message'] = 'Record Added Successfully!';
    header("Location: insert.php");
    exit();

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>