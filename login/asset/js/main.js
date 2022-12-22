function mostrarPass (pass, eyePass) {
    let inputPass = document.getElementById(pass);
    let icon = document.getElementById(eyePass);
    if (inputPass.type=="password" && icon.classList.contains("fa-eye")) {
        inputPass.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {

    }
};





function mostrarPass2 (idPass, idIcono) {
    let inputPass = document.getElementById(pass);
    let icon = document.getElementById(eyePass);
    if (inputPass.type=="password" && icon.classList.contains("fa-eye")) {
        inputPass.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {

    }
};


function mostrarPass3 (idPass, idIcon) {
    let inputPass = document.getElementById(idPass);
    let icon = document.getElementById(idIcon);
    if (inputPass.type=="password" && icon.classList.contains("fa-eye")) {
        inputPass.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {

    }
};


alert("hELLO W!");