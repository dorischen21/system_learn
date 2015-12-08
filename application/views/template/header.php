<!DOCTYPE html>
<html xmlns='http://www.w4.org/1999/xhtml'>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title>
			<?= $title ?>
		</title>
		<link href='<?= base_url()?>assets/css/bootstrap.css' rel='stylesheet' type='text/css'/>
		<link href='<?= base_url()?>assets/css/bootstrap-nav-color.css' rel='stylesheet' type='text/css'/>
		<link href='<?= base_url()?>assets/css/validation.css' rel='stylesheet' type='text/css'/>		
		<link href='<?= base_url()?>assets/css/sticky-footer.css' rel='stylesheet' type='text/css'/>		
		<link href='<?= base_url()?>assets/css/header.css' rel='stylesheet' type='text/css'/>		
		<script src='https://code.jquery.com/jquery-1.11.3.min.js'></script>
		<script src='<?= base_url()?>assets/js/moment.js'></script>
		<script src='<?= base_url()?>assets/js/bootstrap.js'></script>
	</head>
	<body>

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
			<a class="navbar-brand headerlogo" href="<?= base_url()?>news"><span class="glyphicon glyphicon-home"> 熊 學園</span></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> 主選單<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url()?>news">訊息公告</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= base_url()?>">模擬測驗</a></li>
						<li><a href="<?= base_url()?>">正式測驗</a></li>
						<li><a href="<?= base_url()?>">補考測驗</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= base_url()?>">考古題下載</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= base_url()?>">成績查詢</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> 設定<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url()?>settings/listproject">專案期間設定</a></li>
						<li><a href="<?= base_url()?>">考題配分設定</a></li>
						<li><a href="<?= base_url()?>">使用者設定</a></li>
						<li><a href="<?= base_url()?>">考題匯入設定</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?= base_url()?>">測驗報表</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?= base_url()?>account/changePassword">變更密碼</a></li>
						<li><a href="<?= base_url()?>account/doLogout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>登出</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>