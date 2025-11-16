<?php
// Initialize variables (avoid undefined variable warnings)
$fullname = $email = $phone = $gender = $course = $address = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $course = htmlspecialchars($_POST['course'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');

    // Save each submission to a text file
    $entry = "Name: $fullname\nEmail: $email\nPhone: $phone\nGender: $gender\nCourse: $course\nAddress: $address\n------------------------\n";
    file_put_contents("submissions.txt", $entry, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Application Submitted Successfully 🎉</h1>
  </header>

  <section class="form-section">
    <h2>Submitted Details</h2>
    <div class="details">
      <p><strong>Full Name:</strong> <?php echo $fullname; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Phone:</strong> <?php echo $phone; ?></p>
      <p><strong>Gender:</strong> <?php echo $gender; ?></p>
      <p><strong>Course:</strong> <?php echo $course; ?></p>
      <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
    </div>
    <a href="index.html"><button>Back to Form</button></a>
  </section>

  <footer>
    <p>© 2025 Online Registration | All Rights Reserved</p>
  </footer>
</body>
</html>
