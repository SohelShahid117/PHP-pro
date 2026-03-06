<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makes "field" always required.</title>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
   
    <form id="myform">
<label for="username">Required username: </label>
<input type="text" class="left" id="username" name="username"> <br/><br/>
<label for="email">Required email: </label>
<input type="email" class="left" id="email" name="email">
<br/><br/>
<label for="price">Required price: </label>
<input type="number" class="left" id="price" name="price">
<br/><br/>

<label for="password">Password</label>
<input id="password" name="password" />
<br/><br>
<label for="password_again">Again</label>
<input class="left" id="password_again" name="password_again" />
<br><br>
<input type="submit" value="Validate!">
</form>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    username: {
      required: true,
    //   minlength:8,
    //   maxlength:10
    rangelength:[10,15]
    },
    email: {
      required: true,
      email:true
    },
    price:{
        required:true,
        number:true,
        min:50,
        max:4000
    },
    password: "required",
    password_again: {
      equalTo: "#password"
    },
   
  },
   messages:{
        email:"sotik email dao",
        price:"3000 takar product kinon"
    }
});
</script>
</body>
</html>