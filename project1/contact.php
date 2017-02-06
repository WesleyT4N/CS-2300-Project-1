<?php include("templates/header.php"); ?>
<div id="contact" class="container">
  <h1 class="title">CONTACT</h1>
  <hr />
  <h2>E-mail: <span style="float: right"><a class="social" href="mailto:wt237@cornell.edu">wt237@cornell.edu</a></span></h2>
  <hr />
  <h2>Social Media:
    <span style="float: right">
      <a class="social" href="https://www.linkedin.com/in/wesley-tan-936b30a4?trk=nav_responsive_tab_profile">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
      <a class="social" href="https://www.facebook.com/wes.T4N">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
      </a>
    </span>
  </h2>
  <hr />
  <h2>Send A Note:</h2>
  <form id="sendNote" method="post">
    <h3>Your Name:
      <input id="name" type="text" name="name" style="float: right"/>
      <span id="nameError" style="color: red; float: right; margin-right: 10px;"></span>
    </h3>
    <h3>Subject:
      <select id="subject" name="subject" style="float:right">
        <option value="Bug">Bug</option>
        <option value="Question">Question</option>
        <option value="Other">Other</option>
      </select>
    </h3>
    <h3>Urgent:
      <span style="float: right">
        <input type="radio" name="urgency" value="Yes" /> Yes
        <input type="radio" name="urgency" value="No" style="margin-left: 10px" checked/> No
      </span>
    </h3>
    <h3>Message:
      <span id="messageError" style="color: red"></span>
      <textarea rows="4" cols="48" name="message" style="width: 100%">
      </textarea>
    </h3>
    <button id="submit" class="btn" type="submit" name="submit" style="float: none">
      SEND
    </button>
  </form>

  <?php
    // Returns true if name and message both are valid
    function validateMessage($name, $message) {
      $valid = false;
      if (preg_match("/^[a-zA-Z ']+$/i", $name)) {
        $valid = true;
        echo '<script> $(\'#nameError\').html(""); </script>';
      } else {
        echo '<script> $(\'#nameError\').html("Invalid Name"); </script>';
      }
      if (strlen($message) > 10) {
        $valid = true;
        echo '<script> $(\'#messageError\').html(""); </script>';
      } else {
        $valid = false;
        echo '<script> $(\'#messageError\').html("Message must be longer than 10 characters."); </script>';
      }
      return $valid;
    }

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $urgency = $_POST['urgency'];
      $message = $_POST['message'];
      if (validateMessage($name, $message)) {
        $message = wordwrap($message, 80);
        $header = 'From: admin';
        mail("wt237@cornell.edu", "Personal Portfolio Site Note: ".$subject,
        "Name: ".$name."\nUrgent: ".$urgency."\nMessage: ".$message, $header);
        echo '<script> alert("Message Sent!") </script>';
      }
    }
  ?>

</div>
<?php include("templates/footer.php"); ?>
