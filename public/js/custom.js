/* Atribui ao evento submit do formulário a função de validação de dados */

/* Atribui ao evento keypress do input data de nascimento a função para formatar o data (dd/mm/yyyy) */

/* Atribui ao evento change do input FILE para upload da foto*/

var inputFile = document.getElementById("foto");
var imgm = document.getElementById("fotoFinal");
if (inputFile != null && inputFile.addEventListener) {
    inputFile.addEventListener("change", function(){loadFoto(this, imgm)});
} else if (inputFile != null && inputFile.attachEvent) {
    inputFile.attachEvent("onchange", function(){loadFoto(this, imgm)});
}
function mandar() {
    var ft =document.getElementById("fotoFinal");
    loadFoto(inputFile, ft)
}


/* Função para exibir a imagem selecionada no input file na tag <img>  */
function loadFoto(file, img){
    if (file.files && file.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           img.src = e.target.result;
        };
        reader.readAsDataURL(file.files[0]);
    }
}

