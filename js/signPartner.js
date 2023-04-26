let inputName = document.getElementById("name");
let inputEmail = document.getElementById("email");
let inputPassword = document.getElementById("password");
let inputPhone = document.getElementById("phone");
let inputBranchse = document.getElementById("branchse");
let inputLocation = document.getElementById("location");
let inputConfirmPassword = document.getElementById("confirmPassword");
let submit = document.getElementById("submit");

let nameValue = "",
    emailValue = "",
    passValue ="",
    conPassVAlue ="",
    phoneValue ="",
    branchesValue = 0,
    locationValue = "";





inputName.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value.length >= 5) {
        nameValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})

inputEmail.addEventListener("change", (event) => {
    if (event.target.value.trim() && /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(event.target.value)) {
        emailValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})

inputPassword.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value.length >= 8) {
        passValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})


inputConfirmPassword.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value === passValue) {
        conPassVAlue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})

inputLocation.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value.length >= 10) {
        locationValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})


inputBranchse.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value.length > 0) {
        branchesValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})

inputPhone.addEventListener("change", (event) => {
    if (event.target.value.trim() && event.target.value.length === 11) {
        phoneValue = event.target.value;
        event.target.classList.remove("false");
        event.target.classList.add("true");
    } else {
        event.target.classList.remove("true");
        event.target.classList.add("false");
    }
})


submit.addEventListener("click", (e) => {
    if (!(nameValue.trim() && emailValue.trim() && passValue.trim() && locationValue.trim() && conPassVAlue.trim() && branchesValue > 0 && conPassVAlue === passValue && phone.trim())) {
        e.preventDefault();
    }
})