<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Admission Form</h1>
<form action="save.php" method="post"> 
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

<input type="submit" value="Submit">




<br/>
<!-- <button type="submit">Submit</button> -->
</form>
    
</body>
</html>