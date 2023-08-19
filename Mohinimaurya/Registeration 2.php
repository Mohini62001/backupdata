<html>
<head>
<title>Registeration</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h1 style="text-align:center;">Registeration Form</h1>
<form  action="" method="post" style="padding-left:25%; padding-right:25%;" enctype="multipart / form-data">



First Name : 
<input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required> 
<br>



Last Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" class="form-control" placeholder="Enter Last Name"  name="lastname" required>
<br>

Username : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="form-control" placeholder="Enter Username"  name="username" size="50">
<br>

Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="email" class="form-control" placeholder="Enter Email" name="email">
<br>

Password : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" class="form-control" placeholder="Enter Password" name="password">
<br>

Date of Birth :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="date"  class="form-control" name="dob">
<br>

Gender : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
Male <input type="radio" name="gender" value="Male">
	Female <input type="radio" name="gender" value="Female">
	<br>
	<br>
Adhaar Card NO. : <input type="number" class="form-control" placeholder="Enter Adhaar Card No"  name="adhaarcard" required>
<br>

Liacence No. : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number"  class="form-control" placeholder="Enter Liacence No" name="liacence" required>
<br>

Mobile No. : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" class="form-control" placeholder="Enter Mobile No" name="mobile" size="11">
<br>

Address : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="address" class="form-control" placeholder="Enter Address"  cols="30" rows="5"></textarea>
<br>

Image : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="image" name="image">
<br>
<br>

<input type="button" name="submit" value="Register">


</form>

</body>
</html>