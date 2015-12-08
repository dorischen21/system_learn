$(function(){
	// run at page load
	var baseurl = $('#baseUrl').val();

	$("#btn_login").bind("click",function(){
		$.ajax({
			type:'post',
			url: baseurl + 'account/doLogin',
			data:$('#form1').serialize(),
			statusCode:{
				200:function(data){
					if(data == '0' || data == '2'){
						if(data == '0') {
							alert('帳密錯誤');
						} else {
							alert('登入期限已過期 !');
						}
					} else {
						window.location = baseurl + 'news/showNewsList';
					}
				}
			},
			error:function(){	
				alert('error');			
			}
		});
	});
	//在欄位按enter鍵執行button
	$('#txt_loginPassword').keypress(function (e) {
		if (e.which == 13) {
			$("#btn_login").click();
			return false;
		}
	});
});