<!DOCTYPE html>

<html>

<head>

<style>
body {
  background-image: url('edu.jpg');
}
</style>
  <meta charset="utf-8"> 
  <title>Eduvational
</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="header">
    <div class="header-left">Eduvational</div>
<div class="header-right">
      <ul>
        <li>About Eduvational</li>
    <li>Time Table</li>
   <li class="selected">Queries</li>
   </ul>
  </div>
  </div>
 <div class="main">
<div class="contact-form">
    <div class="form-title">Contact</div>
  <form method="post" action="sent.php">
        <div class="form-item">Name</div>
        <input type="text" name="name">
 <div class="form-item">Age</div>
        <select name="age">
      <option value="unselected">Select your age</option>
  <?php 
for ($i = 6; $i <= 100; $i++) 
{
echo "<option value='{$i}'>{$i}</option>";
}
?>
</select>
<div class="form-item">Category</div>
<?php
$types = array('About Eduvational', 'Comments/Opinions', 'Any Query', 'Media', 'Payment', 'Other');
   ?>  
      <select name="category">
          <option value="unselected">Select reason for contacting us</option>
           <?php
             foreach ($types as $type)
 {
   echo "<option value='{$type}'>{$type}</option>";
             }
           ?>
      </select>
       <div class="form-item">Message</div>
    <textarea name="body"></textarea>
  <input type="submit" value="Submit">
  </form>
</div>
</div>
  <div class="footer">
   <div class="footer-left">
    <ul>
        <li>About Eduvational</li>
    <li>Attendance</li>
     <li>Contact Us</li>
     </ul>
   </div>
    <div class="like-box">
   </div>
  </div>
</body>
</html>
