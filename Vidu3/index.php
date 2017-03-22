<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tinh').click(function(){
                var txta = $('#txtA').val();
                var txtb = $('#txtB').val();
                $.get('xuly.php',{a:txta, b:txtb}, function(data){
                    $('#ketqua').html(data);
                });
            });
        });

    </script>
</head>
<body>
    <form action="xuly.php" method = "get">
        <input type="text" id = "txtA"><br/>
        <input type="text" id = "txtB"><br/>
        <input type="button" id = "tinh"  value="Gửi">
        <h2 id="ketqua"></h2>
    </form>
    <iframe scrolling="no" width="560" height="355" src="http://mp3.zing.vn/embed/video/ZW79BCAI" frameborder="0" allowfullscreen="true"></iframe>
</body>
</html>