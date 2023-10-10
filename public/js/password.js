const passwordField = document.getElementById("password");
const showPasswordCheckbox = document.getElementById("show-password");

showPasswordCheckbox.addEventListener("change", () => {
    if (showPasswordCheckbox.checked) {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
});


const passwordFieldConfirmation = document.getElementById("password_confirmation");
const showPasswordCheckboxConfirmation = document.getElementById("show-password");

showPasswordCheckboxConfirmation.addEventListener("change", () => {
    if (showPasswordCheckboxConfirmation.checked) {
        passwordFieldConfirmation.type = "text";
    } else {
        passwordFieldConfirmation.type = "password";
    }
});




