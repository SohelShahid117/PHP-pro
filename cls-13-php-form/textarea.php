<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
<script src="https://cdn.tiny.cloud/1/auia1xdzhch27wopxnjc6mvnfw2my673h0jn4bknwl6pfwcm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    <h1>Hello</h1>

    <form action="save.php" method="post">
        <input type="text" name="title">
        <textarea name="content" id="editor"></textarea>
        <input type="submit" value="Save">
</form>
   <script>
tinymce.init({
            selector: '#editor',
            height: 300,
            menubar: true,
            plugins: 'lists link image table code',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | code'
        });
</script>

</body>
</html>