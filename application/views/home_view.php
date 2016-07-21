<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>告訴立委你想要的</title>
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<!-- <script src="<?=base_url('js/jquery-2.2.4.min.js')?>"></script> -->
	<script src="<?=base_url('js/bootstrap.min.js')?>"></script>

<script>
$(document).ready(function(){
	$("#clickAll").click(function() {
		$("input[name='legislator[]']").prop("checked", true);
	});
	$("#unclickAll").click(function() {
		$("input[name='legislator[]']").prop("checked", false);
	});
});
</script>
</head>
<body>
<div class="container-fluid">
<?php
if(  isset($status) && $status=="success" ){
?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>留言成功!</strong>
</div>
<?php
} else if(  isset($status) && $status=="fail" ){?>

<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>留言失敗!</strong>
</div>
<?php } ?>


<p>想要表達訴求的立委：</p>
<? echo form_open('home/addmsg','role="form"'); ?>
	<button type="button" id="clickAll" class="btn btn-primary">全選</button>
	<button type="button" id="unclickAll" class="btn btn-danger">全不選</button>

<br>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="1">林淑芬</label>
</div>

<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="2">劉建國</label>
</div>

<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="3">楊曜</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="4">黃秀芳</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="5">陳曼麗</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="6">吳焜裕</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="7">林靜儀</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="8">吳玉琴</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="9">鍾孔炤</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="10">劉建國</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="11">王育敏</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="12">蔣萬安</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="13">李彥秀</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="14">陳宜民</label>
</div>
<div class="checkbox-inline">
  <label><input type="checkbox" name="legislator[]" value="15">洪慈庸</label>
</div>







<div class="form-group">
  <label for="comment">我對7天國定假日的看法：<span style="color:red;">(最多50字)</span></label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>

	<button type="submit" id="express" value="Submit" class="btn btn-primary">送出</button>
</form>

<h2> to 林淑芬:</h2>
<?php
for($i=0; $i<count($legislator1); $i++){
	echo $legislator1[$i]['message']."<br>";
}
?>

<h2> to 劉建國:</h2>
<?php
for($i=0; $i<count($legislator2); $i++){
	echo $legislator2[$i]['message']."<br>";
}
?>

<h2> to 楊曜:</h2>
<?php
for($i=0; $i<count($legislator3); $i++){
	echo $legislator3[$i]['message']."<br>";
}
?>

<h2> to 黃秀芳:</h2>
<?php
for($i=0; $i<count($legislator4); $i++){
	echo $legislator4[$i]['message']."<br>";
}
?>

<h2> to 陳曼麗:</h2>
<?php
for($i=0; $i<count($legislator5); $i++){
	echo $legislator5[$i]['message']."<br>";
}
?>

<h2> to 吳焜裕:</h2>
<?php
for($i=0; $i<count($legislator6); $i++){
	echo $legislator6[$i]['message']."<br>";
}
?>

<h2> to 林靜儀:</h2>
<?php
for($i=0; $i<count($legislator7); $i++){
	echo $legislator7[$i]['message']."<br>";
}
?>

<h2> to 吳玉琴:</h2>
<?php
for($i=0; $i<count($legislator8); $i++){
	echo $legislator8[$i]['message']."<br>";
}
?>

<h2> to 鍾孔炤:</h2>
<?php
for($i=0; $i<count($legislator9); $i++){
	echo $legislator9[$i]['message']."<br>";
}
?>

<h2> to 劉建國:</h2>
<?php
for($i=0; $i<count($legislator10); $i++){
	echo $legislator10[$i]['message']."<br>";
}
?>

<h2> to 王育敏:</h2>
<?php
for($i=0; $i<count($legislator11); $i++){
	echo $legislator11[$i]['message']."<br>";
}
?>

<h2> to 蔣萬安:</h2>
<?php
for($i=0; $i<count($legislator12); $i++){
	echo $legislator12[$i]['message']."<br>";
}
?>

<h2> to 李彥秀:</h2>
<?php
for($i=0; $i<count($legislator13); $i++){
	echo $legislator13[$i]['message']."<br>";
}
?>

<h2> to 陳宜民:</h2>
<?php
for($i=0; $i<count($legislator14); $i++){
	echo $legislator14[$i]['message']."<br>";
}
?>

<h2> to 洪慈庸:</h2>
<?php
for($i=0; $i<count($legislator15); $i++){
	echo $legislator15[$i]['message']."<br>";
}
?>

<div class="panel panel-default">
  <div class="panel-footer" style="text-align: center;">Design by <a href="mailto:advancedor96@gmail.com?subject=feedback" "email me">丁丁</a></div>
</div>
</div>
</body>
</html>
