$(function(){
	// run at page load
	var baseurl = $('#baseUrl').val();

	$('#div_projectStartDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	// Don't allow direct editing
	$('#txt_projectStartDate').on('keypress', function(e) {
		e.preventDefault();
	});

	$('#div_projectEndDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	$('#txt_projectEndDate').on('keypress', function(e) {
		e.preventDefault();
	});


	$('#div_passwordDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	$('#txt_passwordDate').on('keypress', function(e) {
		e.preventDefault();
	});


	$('#div_sSDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	// Don't allow direct editing
	$('#txt_sSDate').on('keypress', function(e) {
		e.preventDefault();
	});

	$('#div_sEDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	$('#txt_sEDate').on('keypress', function(e) {
		e.preventDefault();
	});


	$('#div_fSDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	// Don't allow direct editing
	$('#txt_fSDate').on('keypress', function(e) {
		e.preventDefault();
	});

	$('#div_fEDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	$('#txt_fEDate').on('keypress', function(e) {
		e.preventDefault();
	});


	$('#div_mSDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	// Don't allow direct editing
	$('#txt_mSDate').on('keypress', function(e) {
		e.preventDefault();
	});

	$('#div_mEDate').datetimepicker({
		format: 'YYYY-MM-DD',
		keepInvalid: true
	});

	$('#txt_mEDate').on('keypress', function(e) {
		e.preventDefault();
	});		
});