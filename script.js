function submitData(e) {
    e.preventDefault()
    let textInput = document.getElementsByTagName('input')[0].value;
    let url = 'test.php?' + textInput;
    // console.log('Redireccionando a ' + url)
    
    let ajaxCall = new XMLHttpRequest();
    ajaxCall.open("GET", url, true);
    ajaxCall.send();

    ajaxCall.onreadystatechange = function() {
        if (ajaxCall.readyState == 4) {
            injectResponse(ajaxCall.responseText);
        }
    }
}

function injectResponse(text) {
    let textBox = document.getElementsByClassName('responseText')[0];
    textBox.textContent = "";
    setTimeout(function() {
        textBox.textContent = text;
    }, 200)
}