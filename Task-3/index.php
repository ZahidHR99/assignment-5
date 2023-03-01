<!DOCTYPE html>
<html>
  <head>
    <title>Basic Input Form</title>
  </head>
  <body>
    <h1>Input Name and Email</h1>
    <form method="POST" action="">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

<?php

class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  $person = new Person();
  $person->setName($name);
  $person->setEmail($email);
  
  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";

}
?>
