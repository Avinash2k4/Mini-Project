<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/019/819/327/small/living-room-with-rattan-furniture-sofa-table-and-lamp-png.png" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="India">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
<option value="Japan">japan</option>
<option value="China">China</option>
<option value="Newyork">Newyork</option>
<option value="Singapore">Singapore</option>
<option value="Dubai">Dubai</option>

        </select>
        <label for="ADDRESS">ADDRESS</label>
        <textarea id="ADRESS" name="ADDRESS" placeholder="Enter your address......." style="height:120px"></textarea>
            
  </form>
<a href="file:///D:/mini%20project/submit.html"><button>Submit</button></a>
<?php include 'submit.php';?>
    </div>
  </div>
</div>

</html>
