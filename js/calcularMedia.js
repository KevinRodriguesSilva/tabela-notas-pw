
function calcularMedia() {
var tr = document.querySelectorAll("tr");
var linha = 1;
var coluna = 1;
var media = 0;
var mediaReal = parseFloat(media);

while(linha<tr.length){
    while(coluna<4){
        mediaReal = parseFloat(mediaReal) + parseFloat(tr[linha].children[coluna].textContent);
        //console.log(mediaReal);
        coluna++;
    }
    mediaReal = mediaReal/3;
    console.log(linha + "," + coluna);
    tr[linha].children[coluna].textContent = mediaReal.toFixed(1);
    coluna = 1; 
    linha++;
    mediaReal = 0;
}
}
calcularMedia();