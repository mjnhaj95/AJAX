<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test AJAX</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $.post("b.php",{ho: "LeMinhHai"},function (data) {
               $("#noidung").html(data);
               
           });
        });

    </script>
</head>
<body>
    <p>AAAA</p>
    <div id="noidung">...</div>
</body>
</html>