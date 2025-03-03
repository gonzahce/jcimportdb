function goLogin() {
    var connect, form, response, result, user, pass;
    user = __('usuario').value;
    pass = __('password').value;
    form = 'user=' + user + '&pass=' + pass;
    connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

    connect.onreadystatechange = function() {

        if(connect.readyState == 4 && connect.status == 200) {
            if(connect.responseText == 1) {
                result = 'Redireccionando';
                __('_AJAX_LOGIN_').innerHTML = result;
                location.reload();
            } else {
                __('_AJAX_LOGIN_').innerHTML = connect.responseText;
            }
        } else if(connect.readyState != 4) {
            result = 'Estamos intentando logearte....';
            __('_AJAX_LOGIN_').innerHTML = result;
        }
    }
    connect.open('POST','ajax.php?mode=login',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);
}

function runScriptLogin(e) {
    if(e.keyCode == 13) {
      goLogin();
    }
}