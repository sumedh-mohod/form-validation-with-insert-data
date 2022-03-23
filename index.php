<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://smtpjs.com/v3/smtp.js"></script>

  <title>form</title>
</head>

<body>
  <div class="container">

    <div class="row ">
      <div class="col-lg-8 mx-auto">
        <form action="index.php" method='post'>
          <div class="form-group">
            <label for="enquiry">What best describes your enquiry?*</label>
            <select class="custom-select" name="enquiry">
              <option selected disabled>-Please select-</option>
              <option value="Distribution">Distribution</option>
              <option value="Import for self-owned chain of Retail Stores/Supermarkets">Import for self-owned chain of Retail Stores/Supermarkets</option>
              <option value="Import and Wholesale">Import and Wholesale</option>
              <option value="Own Brand / Private Label">Own Brand / Private Label</option>
              <option value="Warehousing and Logistics">Warehousing and Logistics</option>
              <option value="Marketing">Marketing</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="" class="form-control" id="name" required>
            <small id="name_msg" style="color:rgb(220,53,69)" class="invalid-feedback"> Please enter the valid name</small>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" value="" class="form-control" id="email">
            <small id="email_msg" style="color:rgb(220,53,69)"> Please enter the valid email</small>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" value="" class="form-control" id="phone">
            <small id="phone_msg" style="color:rgb(220,53,69)"> Please enter the valid phone number</small>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" value="" class="form-control" id="state">
            <small id="state_msg" style="color:rgb(220,53,69)"> Please enter the valid state</small>
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" value="" class="form-control" id="country">
            <small id="country_msg" style="color:rgb(220,53,69)"> Please enter the valid country </small>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input type="textarea" name="message" value="" class="form-control" id="message">
          </div>
          <button type="submit" id="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="validate.js"></script>
</body>
</html>

<?php
if ($_POST) {
  require_once 'connection.php';

  $sql = $pdo->prepare("INSERT INTO form (`enquiry`, `name`, `email`, `phone`, `state`, `country`, `message`) 
    VALUES ('" . $_POST['enquiry'] . "',
            '" . $_POST['name'] . "',
            '" . $_POST['email'] . "',
            '" . $_POST['phone'] . "',
            '" . $_POST['state'] . "',
            '" . $_POST['country'] . "',
            '" . $_POST['message'] . "')");
  $sql->execute();
}

?>