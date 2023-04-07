function download(filename, textInput) {

    var element = document.createElement('a');
    element.setAttribute('href','data:text/plain;charset=utf-8, ' + encodeURIComponent(textInput));
    element.setAttribute('download', filename);
    document.body.appendChild(element);
    element.click();
    //document.body.removeChild(element);
}
document.getElementById("telechargement").addEventListener("click", function () {
    var text = "Merci d'avoir téléchargé Numéri !";
    var filename = "Numéri.txt";
    download(filename, text);
}, false);