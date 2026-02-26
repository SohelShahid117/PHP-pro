<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Admission Form</h1>
<form action="save.php" method="post" enctype="multipart/form-data"> 
    <!-- data save korar somoi method hobe post -->

<label for="username">Username : </label>
<input type="text" id="username" name="username"> <br/><br/>
<label for="email">User email : </label>
<input type="email" id="email" name="email"> <br/><br/>
<label for="password">User password : </label>
<input type="password" id="password" name="password"> <br/><br/>
<label for="shortDesc">short Description : </label>
<textarea name="shortDesc" id="shortDesc" cols="30" rows="10"></textarea><br/><br/>
<label for="gender">Gender : </label><br/>
<input type="radio" value="Male" id="gender" name="gender">Male <br/><br/>
<input type="radio" value="Female" id="gender" name="gender">Female <br/><br/>
<input type="radio" value="Other" id="gender" name="gender">Other<br/><br/>

<label for="bestTeacher">Best Teacher : </label>
<input type="checkbox" name="bestTeacher[]" id="bestTeacher" value="Sohel">Sohel
<input type="checkbox" name="bestTeacher[]" id="bestTeacher" value="Shahid">Shahid
<input type="checkbox" name="bestTeacher[]" id="bestTeacher" value="Abdullah">Abdullah<br/><br/>
<label for="courseFee">Course Fee :</label>
<input type="number" name="courseFee" id="courseFee"><br/><br/>
<label for="contact">Contact :</label>
<input type="tel" name="contact" id="contact"><br/><br/>
<label for="birthdate">Birthdate :</label>
<input type="date" name="birthdate" id="birthdate"><br/><br/>
<label for="color">Color :</label>
<input type="color" name="color" id="color"><br/><br/>
<label for="time">Office Time :</label>
<input type="time" name="time" id="time"><br/><br/>
<label for="websiteurl">Website Url :</label>
<input type="url" name="websiteurl" id="websiteurl"><br/><br/>
<label for="image">image:</label>
<input type="file" name="image" id="image"><br/><br/>
<label for="month">Month of Joining:</label>
<input type="month" name="month" id="month"><br/><br/>
<input type="hidden" name="hiddenIP" value="<?php echo $_SERVER['REMOTE_ADDR']?>">

<input type="submit" value="Submit">
<input type="reset" value="Reset">




<br/>
<!-- <button type="submit">Submit</button> -->
</form>
    
</body>
</html>