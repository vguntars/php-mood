//
// Formas satura pārbaude
//
$('#inputName').onkeyup = function(e) {
    valueValidate(this);
}
$('#inputEmail').onkeyup = function(e) {
    valueValidate(this);
}
$('#inputMessage').onkeyup = function(e) {
    valueValidate(this);
}

$('#input-form').onsubmit = function(e) {
        var inputOK = true
        inputOK &= valueValidate($('#inputMessage'));
        inputOK &= valueValidate($('#inputEmail'), true, true);
        inputOK &= valueValidate($('#inputName'));
    }
    //
function valueValidate(Elem, valExist = true, valEmail = false) {

return true;//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    var ELemParent = Elem.parentElement;
    if (ELemParent.children.length > 1) ELemParent.children[1].remove()
    Elem.classList.remove('input-err');
    //pārbaude uz tukšumu
    if (valExist && !Elem.value.trim()) {
        var msgErr = document.createElement('span');
        msgErr.className = 'message-err';
        msgErr.innerHTML = 'Obigāti ievadiet vērtību!';
        Elem.classList.add('input-err');
        Elem.focus();
        ELemParent.appendChild(msgErr);
        return false
    }
    //
    //Pārbaude uz e-mail
    if (valEmail) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(Elem.value.trim())) {
            var msgErr = document.createElement('span');
            msgErr.className = 'message-err';
            msgErr.innerHTML = 'Ievadītā vērtība neatbilst e-pasta formātam!';
            Elem.classList.add('input-err');
            Elem.focus();
            ELemParent.appendChild(msgErr);
            return false
        }
    }
    //
    return true
}
//
