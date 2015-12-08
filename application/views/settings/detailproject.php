		<link href='<?= base_url()?>assets/css/bootstrap-datetimepicker.min.css' rel='stylesheet' type='text/css'/>		

		<script src='<?= base_url()?>assets/js/bootstrap-datetimepicker.min.js'></script>
		<script src='<?= base_url()?>assets/js/project.js'></script>

		<input type='hidden' id='baseUrl' value='<?= base_url()?>'>
		<div class='container'>
			<form method='post' id='form1'>
				<div class="row">
					<div class="col-md-3">
						<h1><?= $title ?></h1>
						<h1></h1>
					</div>
				</div>
				<div class="form-group">
					<div class="row" row='2'>
						<div class="col-md-2">
							<h4>專案名稱</h4>
						</div>
						<div class="col-md-4">
							<input name='txt_projectName' type='text' id='txt_projectName' class='form-control' required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>公告訊息</h4>
						</div>
						<div class="col-md-4">
							<input name='txt_projectNews' type='text' id='txt_projectNews' class='form-control' required>
						</div>
					</div>
				</div>				
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>專案期間</h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_projectStartDate'>
								<input type='text' class="form-control" id="txt_projectStartDate" name="txt_projectStartDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-1">
						<h4><center>～</center></h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_projectEndDate'>
								<input type='text' class="form-control" id="txt_projectEndDate" name="txt_projectEndDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>初始密碼寄送</h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_passwordDate'>
								<input type='text' class="form-control" id="txt_passwordDate" name="txt_passwordDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>模擬測驗期間</h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_sSDate'>
								<input type='text' class="form-control" id="txt_sSDate" name="txt_sSDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-1">
						<h4><center>～</center></h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_sEDate'>
								<input type='text' class="form-control" id="txt_sEDate" name="txt_sEDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>正式測驗期間</h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_fSDate'>
								<input type='text' class="form-control" id="txt_fSDate" name="txt_fSDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-1">
						<h4><center>～</center></h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_fEDate'>
								<input type='text' class="form-control" id="txt_fEDate" name="txt_fEDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-2">
							<h4>補考測驗期間</h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_mSDate'>
								<input type='text' class="form-control" id="txt_mSDate" name="txt_mSDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<div class="col-md-1">
						<h4><center>～</center></h4>
						</div>
						<div class="col-md-3">
							<div class='input-group date' id='div_mEDate'>
								<input type='text' class="form-control" id="txt_mEDate" name="txt_mEDate" required/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<button type="button" class='btn btn-primary' name="btn_saveProject" id="btn_saveProject">Save</button>
							<button type="button" class='btn btn-default' name="btn_cancelProject" id="btn_cancelProject">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
