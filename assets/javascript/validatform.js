buttonSubmit = document.querySelector("#product-save-btn");

nameProduct = document.querySelector("#product-title");
prixProduct = document.querySelector("#product-prix");
categorieProduct = document.querySelector("#product-categorie");
quantiteProduct = document.querySelector("#product-quantite");

errorNom = document.querySelector(".errorNom");
errorPrix = document.querySelector(".errorPrix");
errorcategorie = document.querySelector(".errorcategorie");
errorquantite = document.querySelector(".errorquantite");

validationInput = document.querySelector(".validation-input");



function valideform() {
  if (
    nameProduct.value == "" ||
    prixProduct.value == "" ||
    categorieProduct.value == "" ||
    quantiteProduct.value == ""
  ) {
    if (nameProduct.value == "") errorNom.style.display = "block";
    if (prixProduct.value == "") errorPrix.style.display = "block";
    if (categorieProduct.value == "") errorcategorie.style.display = "block";
    if (quantiteProduct.value == "") errorquantite.style.display = "block";
    buttonSubmit.setAttribute("type", "button");
    validationInput.style.display = "flex";
  } else {
    buttonSubmit.setAttribute("type", "submit");
    validationInput.style.display = "none";
  } 
}

function checkName(){
    if(nameProduct.value.length<3){
        buttonSubmit.setAttribute("type", "button");
        errorNom.style.display = "block";
    }else{
        buttonSubmit.setAttribute("type", "submit");
        errorNom.style.display = "none";
    }
}

function checkQuantite() {
  var regex = /^[0-9]/;
  if (quantiteProduct.value.match(regex)) {
    buttonSubmit.setAttribute("type", "submit");
    errorquantite.style.display = "none";
  } else {
     buttonSubmit.setAttribute("type", "button");
     errorquantite.style.display = "block";
  }
}

function checkPrix() {
    var regex = /^[0-9]/;
    if (prixProduct.value.match(regex)) {
      buttonSubmit.setAttribute("type", "submit");
      errorPrix.style.display = "none";
    } else {
      buttonSubmit.setAttribute("type", "button");
      errorPrix.style.display = "block";
    }
}