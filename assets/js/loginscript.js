let show = document.querySelectorAll(".showHidePw");
let pass = document.querySelectorAll(".password");

show.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pass.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        show.forEach((icon) => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pass.type = "password";

        show.forEach((icon) => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});
