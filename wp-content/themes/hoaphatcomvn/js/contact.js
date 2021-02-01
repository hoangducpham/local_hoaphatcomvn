$('#form-contacts').submit( function(event){
    event.preventDefault();
    let endpoint = myAjax.ajaxurl;
    let formdata = new FormData;
    let showForm = $('#form-contacts').serialize();
    formdata.append('action','enquiry');
    formdata.append('nonce', myAjax.ajaxnonce);
    formdata.append('enquiry', showForm);

    // let regexName = /^[a-zA-Z ]+$/;
    // let name = $('#ap_name').val();
    // if (name !== '') {
    //     let remove = removeAscent(name);
    //     if (!regexName.test(remove)) {
    //         $('#error_name').text('Họ tên không đúng').show();
    //         $('#error_name').fadeOut(2000);
    //         return false;
    //     }
    // } else  {
    //     $('#error_name').text('Vui lòng nhập họ và tên').show();
    //     $('#error_name').fadeOut(2000);
    //     return false;
    // }

    
    // let regexEmailCharacter = /^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
    // let regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // let email = $('#ap_email').val();
    // let mailDomain = email.substring(email.lastIndexOf("@") +1);
    // let domainList =  ["yahoo.com", "yahoo.com.vn", "gmail.com", "gmail.com.vn", "hotmail.com", "hotmail.com.vn"];
    // let finalResult = domainList.indexOf(mailDomain);
    // if(email !== '') {
    //     if (!regexEmail.test(email) || finalResult < 0 || !regexEmailCharacter.test(email)) {
    //         $('#error_email').text('Email không đúng định dạng').show();
    //         $('#error_email').fadeOut(2000);
    //         return false;
    //     }
    // } else {
    //     $('#error_email').text('Vui lòng nhập email').show();
    //     $('#error_email').fadeOut(2000);
    //     return false;
    // }

    // let regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    // let mobile = $('#ap_phone').val();
    // if(mobile !==''){
    //     if (!regex.test(mobile)) {
    //         $('#error_phone').text('Số điện thoại của bạn không đúng định dạng!').show();
    //         $('#error_phone').fadeOut(2000);
    //         return false;
    //     }
    // }else{
    //     $('#error_phone').text('Vui lòng nhập số điện thoại').show();
    //     $('#error_phone').fadeOut(2000);
    //     return false;
    // }

    // let date = $('#ap_date').val();
    // if (date !== '') {
    //     let toDate = new Date(date);
    //     let day = toDate.getDate();


    //     let currentDate = new Date()
    //     let currentDay = currentDate.getDate()
    //     if (day < currentDay) {
    //         $('#error_date').text('Ngày đặt lịch hẹn phải lớn hơn ngày cũ.').show();
    //         $('#error_date').fadeOut(2000);
    //         return false;
    //     }

    // } else {
    //     $('#error_date').text('Vui lòng nhập ngày hẹn').show();
    //     $('#error_date').fadeOut(2000);
    //     return false;
    // }

    $.ajax(endpoint,{
        type:'POST',
        data:formdata,
        processData: false,
        contentType: false,
        success: function(){
        	$('#noti-success').show();
        },
        error: function(){
        	$('#noti-fail').show();
        }
        // beforeSend: function() {
        //     $('#loading-doctor').show();
        // },
        // success: function(){
        //     $('#loading-doctor').hide();
        //     $('#appointment-contact-form').fadeOut(200);
        //     $('#success_message').text('Gửi thành công.').show();
        //     $('#success_message').fadeOut(2000);
        //     $('#appointment-contact-form').trigger('reset');
        //     $('#appointment-contact-form').fadeIn(500);
        // },
        // error: function(){
        //     $('#loading-doctor').hide();
        //     $('#appointment-contact-form').fadeOut(200);
        //     $('#error_message').text('Gửi thất bai.').show();
        //     $('#error_message').fadeOut(2000);
        //     $('#appointment-contact-form').trigger('reset');
        //     $('#appointment-contact-form').fadeIn(500);
        // }
    })
})