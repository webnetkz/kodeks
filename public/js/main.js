function ajax(getK) {
    var xhr = new XMLHttpRequest();

    xhr.open('GET', '../../app/files/' + getK + '.php', true);
    xhr.send();

    xhr.onreadystatechange = function() {
        if(xhr.readyState != 4) return;

        if(xhr.status != 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        } else {
            content.style.cssText += 'visibility: visible;';
            content.innerHTML = xhr.responseText;
        }
    }
}

function getConstitution() {
    kodeks.style.cssText += 'visibility: hidden;';

    ajax('constitution');

}

function getKodeks() {
    kodeks.style.cssText += 'visibility: visible;';
}

