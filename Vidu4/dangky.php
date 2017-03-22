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
	$("#txtUsername").blur(function(){
		var u = $(this).val();
		$.get("checkUsername.php", {un:u}, function(data){
			if( data==0 ){
				$("#nhacLoiUn").html("Hợp lệ");
				$("#nhacLoiUn").css("color", "blue");
			}else{
				$("#nhacLoiUn").html("Không hợp lệ");
				$("#nhacLoiUn").css("color", "red");
			}
		});	
	});	
});
</script>
</head>
<body>
<form action="" method="post">
<table width="400" border="0" cellspacing="0" cellpadding="0">
    <tr>
         <td colspan="2">DANG KY THANH VIEN</td>
    </tr>
    <tr>
         <td>Username</td>
    <td><label for="txtUsername"></label>
        <input type="text" name="txtUsername" id="txtUsername" />
        <div id="nhacLoiUn"></div>
     </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="txtPassword"></label>
      <input type="password" name="txtPassword" id="txtPassword" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnDangKy" id="btnDangKy" value="Dang ky" /></td>
  </tr>
</table>
</form>
</body>
</html>