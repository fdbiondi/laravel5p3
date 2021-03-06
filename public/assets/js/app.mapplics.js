var l = null;
$(function () {
    // Bind normal buttons
    //$( '.ladda-button' ).ladda( 'bind' );
    setToastConfiguration();

});
//***************************************************
//** SERIALIZE FORMS ********************************
$.fn.serializeObject = function()
{
    var o = {};
    var a = this.find(':input:not(.not_included)').serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};
//***************************************************
//***** TOASTR **************************************
function setToastConfiguration(){
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "preventDuplicates": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}
//***************************************************
//***************************************************

//***************************************************
//***** LOADING BUTONS ******************************
function startLoadingButton(button){
    //LOADING BUTTONS
    l = $( button ).ladda();
    l.ladda('start');
}

function stopLoadingButton(){
    l.ladda('stop');
}
//***************************************************
//***************************************************

//***************************************************
//***** AJAX PROMISE ********************************
function ajaxPromise(url,type,dataType,data,button_loading){
    return $.ajax({
        url: url,
        type: type,
        dataType: dataType,
        data: data,
        beforeSend: function(){
            //showSpinnerBeforeSend();
            if(button_loading != null)
                startLoadingButton(button_loading);
            else
                spinnerShow();
        }
    });
}

function ajaxPromiseFail(jqXHR, textStatus, errorThrown) {
    showErrorAlert("Error processing your request.",'Server is not responding, please try again');
    console.log("err. msj.: " + jqXHR.responseText);
    console.log("errThrown: " + errorThrown);
}

function ajaxPromiseAllways() {
    stopLoadingButton();
    spinnerHide();
}
//***************************************************
//***************************************************

//***************************************************
//***** SPINNER *************************************
var spinner = null;
var spinner_div = 0;
function spinnerShow()
{
    $('.overlay').show();
}

function spinnerHide(){
    $('.overlay').hide();
}

function showSpinnerBeforeSend()
{
    spinnerShow();
    return true;
}
//***************************************************
//***************************************************

//***************************************************
//***** FUNCTIONS ***********************************
function scrollToTop(){
    $('html, body').animate({scrollTop: 0}, 2000);
}
function putErrorClassOnFormElement(element){
    element.closest('.form-group').addClass('has-error');
}
function quitErrorClassOnFormElement(element){
    element.closest('.form-group').removeClass('has-error');
}
function validateURL(url){
    var myRegExp =/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
    return myRegExp.test(url);
}
//***************************************************
//***************************************************

//***************************************************
//***** Sweet Alert *********************************

function showOkAlert(title, text, action) {
    if(action == null)
        swal(title, text, "success");
    else
    {
        swal({   title: title,   text: text,   type: "success" }, function(){ action.apply(this); });
    }
}

function showErrorAlert(title, text){
    swal(title, text, "error");
}
function showQuestionAlert(title, text, type, confirmText, cancelText, confirmCallback, confirmCallbackParameters, cancelCallback, cancelCallbackParameters){
    //"warning", "error", "success" and "info"
    var confirmColor="#DD6B55";
    swal({
            title: title,
            text: text,
            type: type,
            showCancelButton: true,
            confirmButtonColor: confirmColor,
            confirmButtonText: confirmText,
            cancelButtonText: cancelText,
            closeOnConfirm: true,
            closeOnCancel: true },
        function (isConfirm) {
            if (isConfirm) {
                if(confirmCallback != null) {
                    confirmCallback.apply(this,confirmCallbackParameters);
                }
            } else {
                if(cancelCallback != null) {
                    cancelCallback.apply(this,cancelCallbackParameters);
                }
            }
        });
}
//***************************************************
//***************************************************

