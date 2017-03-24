<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phân trang Ajax</title>
    <script src="../jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function(){
            var toancuc = 0;
            $('#xemthem').click(function(){
                toancuc = toancuc + 1;
                $.get("trangAjax.php",{trang:toancuc},function(data){
                    $('#danhsach').append(data);
                });
            });
        });
    </script>
</head>
<body>
    
    <div id="danhsach"></div>
    <div id="xemthem">Xem thêm</div>
</body>
</html>