<?php
require "../dbCon.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidu 1 Cach 1 - php thuần</title>
<style>
.title{background-color:green; color:yellow; text-align:center; padding:5px}
#menu a{display:block}
.motTin{border-bottom:solid 1px blue; padding:10px}
.tieude{color:red; font-weight:bold}
</style>
<script type="text/javascript" src="../../jquery-3.1.1.min.js"></script>
<script>
$(document).ready(function(){
	$(".loaitin").click(function(){
		var id = $(this).attr("anlong");
		$.get("xuly.php", {idLT:id}, function(data){
			$("#ketqua").html(data);	
		});
	});	
});
</script>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" class="title">Loại tin</td>
    <td class="title">Tin</td>
    <td class="title">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td id="menu">
    <?php
	$qrLoaiTin = "SELECT * FROM loaitin";
    $loaitin = mysql_query($qrLoaiTin);
	while($row_loaitin = mysql_fetch_array($loaitin)){
	?>
    <div class="loaitin" anlong="<?php echo $row_loaitin["idLT"] ?>">
		<?php echo $row_loaitin["Ten"] ?>
    </div>
    <?php } ?>
    </td>
    <td id="ketqua">
    	
    </td>
    <td><iframe width="300" height="169" src="https://www.youtube.com/embed/VdX0d5sRG-8" frameborder="0" allowfullscreen></iframe>
    <p>&nbsp;</p></td>
  </tr>
</table>

</body>
</html>