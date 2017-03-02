//
function m() {
    var m_s = "";
    for (var i = 0; i < arguments.length; i++) {
        m_s += arguments[i] + "\n";
    }
    alert(m_s);
}

function $(selector) {
    return document.querySelector(selector);
}

function $$(selector) {
    return [].slice.call(document.querySelectorAll(selector));
}

function _removeAllChild(parentElement) {
  while (parentElement.hasChildNodes()) parentElement.removeChild(parentElement.lastChild);
}
