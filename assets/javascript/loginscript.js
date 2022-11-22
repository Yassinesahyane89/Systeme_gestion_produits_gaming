// let   pwShowHide = document.querySelectorAll(".showHidePw");
// let   pwFields = document.querySelectorAll(".password");

// pwShowHide.forEach(eyeIcon =>{
//     eyeIcon.addEventListener("click", ()=>{
//         pwFields.forEach(pwField =>{
//             if(pwField.type ==="password"){
//                 pwField.type = "text";

//                 pwShowHide.forEach(icon =>{
//                     icon.classList.replace("uil-eye-slash", "uil-eye");
//                 })
//             }else{
//                 pwField.type = "password";

//                 pwShowHide.forEach(icon =>{
//                     icon.classList.replace("uil-eye", "uil-eye-slash");
//                 })
//             }
//         })
//     })
// })


EmailLogin = document.querySelector(".emailLogin");
passwordLogin = document.querySelector(".passwordLogin");

iconenvelope = document.querySelector(".fa-envelope");
iconlock = document.querySelector(".fa-lock");

validationInput = document.querySelector(".validation-input");
errorEmail = document.querySelector(".errorEmail");
errorpassword = document.querySelector(".errorpassword");

buttonSubmit = document.querySelector("#login");
form = document.getElementsByTagName("form");

function valide() {
  if (EmailLogin.value == "" || passwordLogin.value == "") {
    if (EmailLogin.value == "") {
      errorEmail.style.display = "block";
      iconenvelope.style.color = "#ab0d02";
      EmailLogin.style.borderBottomColor = "#ab0d02";
    }

    if (passwordLogin.value == "") {
      errorpassword.style.display = "block";
      iconlock.style.color = "#ab0d02";
      passwordLogin.style.borderBottomColor = "#ab0d02";
    }

    buttonSubmit.setAttribute("type", "button");
    validationInput.style.display = "flex";
  } else {
    buttonSubmit.setAttribute("type", "submit");
    validationInput.style.display = "none";
  }
}

function checkEmail() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (EmailLogin.value.match(mailformat)) {
    buttonSubmit.setAttribute("type", "submit");
    errorEmail.style.display = "none";
    EmailLogin.style.borderBottomColor = "#85E8FD";
    iconenvelope.style.color = "#85E8FD";
  } else {
    buttonSubmit.setAttribute("type", "button");
    errorEmail.style.display = "block";
    EmailLogin.style.borderBottomColor = "#ab0d02";
    iconenvelope.style.color = "#ab0d02";
  }
}

function checkPassword() {
  if (passwordLogin.value == "") {
    errorpassword.style.display = "block";
  } else {
    errorpassword.style.display = "none";
    iconlock.style.color = "#85E8FD";
    passwordLogin.style.borderBottomColor = "#85E8FD";
  }
}