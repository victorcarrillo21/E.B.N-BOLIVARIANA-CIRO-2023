<!--[11:20 p. m., 17/5/2023] Jesus Castillo:--> <form id="myForm">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="message">Message:</label>
    <textarea class="form-control" id="message" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$conn = new mysqli('localhost', 'username', 'password', 'database');
$stmt = $conn->prepare('INSERT INTO messages (name, email, message) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $name, $email, $message);
$stmt->execute();
$stmt->close();
$conn->close();

?>