<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>捐款記錄系統</title>
	<link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('css/jquery-ui.min.css')?>">
</head>
<body>
	<script src="<?=base_url('js/jquery-2.2.4.min.js')?>"></script>
	<script src="<?=base_url('js/jquery-ui.min.js')?>"></script>
	<script src="<?=base_url('js/bootstrap.min.js')?>"></script>
 <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  });
  </script>

<div class="container-fluid">
<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="home">首頁</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="add_donation">新增一筆捐款<span class="sr-only">(current)</span></a></li>
	        <li><a href="#">捐款人建檔</a></li>
	        <li><a href="home">列出捐款</a></li>

	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <使用者名稱><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">登入</a></li>
	            <li><a href="#">登出</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<?php echo form_open('Verify/verifyRecord', 'id="donation_form"'); ?>
	<div class="form-group">
		<label for="name">捐款人</label>
		<input id='name' name="name" class="form-control"  type='text'>
	</div>

	<div class="form-group">
		<label for="id_no">身分證字號</label>
		<input id='id_no' name="id_no" class="form-control"  type='text'>
	</div>

	<div class="form-group">
		<label for="EIN">統一編號</label>
		<input id='EIN' name="EIN" class="form-control"  type='text'>
	</div>

	<div class="form-group">
		<label for="amount">金額</label>
		<input id='amount' name="amount" class="form-control"  min="0" type='number'>
	</div>




	<div class="form-group">
		<label for="pay_by">捐款方式：</label>

		<label class="radio-inline">
		  <input type="radio" name="pay_by" id="pay_by1" value="cash">現金</label>
		<label class="radio-inline">
		  <input type="radio" name="pay_by" id="pay_by2" value="postal_service">郵政劃撥</label>
		<label class="radio-inline">
		  <input type="radio" name="pay_by" id="pay_by3" value="transfer_account">轉帳</label>

	</div>

	<div class="form-group">
		<label for="datepicker">日期</label>
		<input type="text" id="datepicker" name="date" class="form-control">
		<!-- <input id='date' name="date" class="form-control" type='date'> -->
	</div>

	<div class="form-group">
		<label for="receipt_address">收據寄發地址</label>
		<input id='receipt_address' name="receipt_address" class="form-control" type="text">
	</div>

	<div class="form-group">
		<label for="remark">備註</label>
		<textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
	</div>

	<button type="submit" class="btn btn-success btn-lg">新增！</button>
	</form>
</div> <!-- container-fluid -->
</body>
</html>
