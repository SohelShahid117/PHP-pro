<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap css library -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


<script>
$(document).ready(function(){
    // Maximum number of groups can be added
    var maxGroup = 10;
    
    // Add more group of input fields
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    // Remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>


<?php 
 
// If form is submitted 
if(isset($_POST['submit'])){ 
    // Get values in array 
    $first_name_arr = $_POST['first_name']; 
    $last_name_arr = $_POST['last_name']; 
    $email_arr = $_POST['email']; 
     
    if(!empty($first_name_arr)){ 
        for ($i = 0; $i < count($first_name_arr); $i++) { 
            $first_name = $first_name_arr[$i]; 
            $last_name = $last_name_arr[$i]; 
            $email = $email_arr[$i]; 
 
            // Your database query goes here 
            //... 
        } 
    } 
} 
 
?>
</head>
<body>
    <h1>Hello World</h1>

    <form method="post" action="submit.php">
    <!-- Group of input fields -->
    <div class="form-group fieldGroup">
        <div class="input-group mb-3">
            <input type="text" name="first_name[]" class="form-control" placeholder="First Name"/>
            <input type="text" name="last_name[]" class="form-control" placeholder="Last Name"/>
            <input type="text" name="email[]" class="form-control" placeholder="Email address"/>
            <span class="input-group-text">
                <a href="javascript:void(0);" class="btn btn-success addMore"><i class="custicon plus"></i> Add</a>
            </span>
        </div>
    </div>

    <!--Submit button -->
    <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
</form>


<!-- Replica of input field group HTML -->
<!-- <div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group mb-3">
        <input type="text" name="first_name[]" class="form-control" placeholder="First Name"/>
        <input type="text" name="last_name[]" class="form-control" placeholder="Last Name"/>
        <input type="text" name="email[]" class="form-control" placeholder="Email address"/>
        <span class="input-group-text">
            <a href="javascript:void(0)" class="btn btn-danger remove"><i class="custicon cross"></i> Remove</a>
        </span>
    </div> -->
</div>
</body>
</html>