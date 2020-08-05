$(document).ready(function(){

$("#contactAdmin").click(sendMail);
 $('.comment-reply').click(function (e) {
    e.preventDefault();
    $(this).next().addClass("show");
 });
 $('.close-reply').click(function(e){
     e.preventDefault();
     $(this).parent().removeClass("show");
 })


});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function sendMail(){
    console.log('aaaa');
    let email = $("#emailSender").val();
    let message = $("#textareaMessage").val();

    let regEmail = /^[A-Za-z\d\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\;\"\(\)\,\:\;\<\>\@\[\\\]\.]{5,}[^\.]*\@(([a-z\d\-]+)\.[\w\d]+)+$/;

    let error = [];
    if( message == ""){
        error.push("Message is empty.");
        toastr.error("Message cannot be empty !");
    }
    if(!regEmail.test(email.trim())){
		error.push("Email is not in good format!");
 		toastr.error("Email is not in good format!");
     };
    if(error.length == 0){
        $.ajax({
            url:'/sendMessage',
            method:'post',
            data:{
                emailSender : email,
                message : message,

            },
            success: function(){
                toastr.success("Message successfully sent!");
            },
            error: function (xhr, status, error) {
				console.log(error);
				let statusniKod = xhr.status;

				switch (statusniKod) {
					case 403:
						toastr.error("Access Denied!");
						break;
					case 500:
						toastr.error("There is a problem, try later!");
						break;
					case 422:
						toastr.error("Not valid format!");
						break;

					default:
						toastr.error("ERROR!!! Contact administrator!");
						break;
				}

            }
        })
    }

}

