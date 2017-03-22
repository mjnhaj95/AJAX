<?php
    require "../dbCon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ví dụ 1 cách theo kiểu PHP thuần</title>
   <style>
.title{background-color:green; color:yellow; text-align:center; padding:5px}
#menu a{display:block}
.motTin{border-bottom:solid 1px blue; padding:10px}
.tieude{color:red; font-weight:bold}
</style>
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
    <a href="index.php?idLT=<?php echo $row_loaitin["idLT"] ?>">
		<?php echo $row_loaitin["Ten"] ?>
    </a>
    <?php } ?>
    </td>
    <td>
    	<?php
             $idLT = $_GET["idLT"]; 
		    settype($idLT, "int");
		    $qrTin = "	SELECT * FROM tin
		    			WHERE idLT=$idLT	";
		    $tins = mysql_query($qrTin);
		    while($row_tin = mysql_fetch_array($tins)){
		?>
    	<div class="motTin">
            <div class="tieude"><?php echo $row_tin["TieuDe"] ?></div>
            <img style="float:left; margin-right:5px" src="../upload/tintuc/<?php echo $row_tin["urlHinh"] ?>" width="100"  /> <?php echo $row_tin["TomTat"] ?>
            <div style="clear:both"></div>
        </div>
        <?php } ?>
    </td>
    <td><iframe scrolling="no" width="300" height="168" src="http://mp3.zing.vn/embed/video/ZW79FZD0" frameborder="0" allowfullscreen="true"></iframe></td>
  </tr>
</table>

</body>
</html>