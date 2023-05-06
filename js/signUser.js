let inputName = document.getElementById("name");
let inputEmail = document.getElementById("email");
let inputPassword = document.getElementById("password");
let inputPhone = document.getElementById("phone");
let inputLocation = document.getElementById("location");
let inputConfirmPassword = document.getElementById("confirmPassword");
let submit = document.getElementById("submit");



submit.addEventListener('submit', function (e) {
    const formData = new FormData();
    formData.append('name', inputName.value);
    formData.append('email', inputEmail.value);
    formData.append('phone', inputPhone.value);
    formData.append('password', inputPassword.value);
    formData.append('location', inputLocation.value);


    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/footer-hunter/implementation/signUpuser.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log('تم تحميل الصورة بنجاح.');
        } else {
            console.log('فشل تحميل الصورة.');
        }
    };

    xhr.send(formData);

    localStorage.setItem("emailUser", JSON.stringify(inputEmail.value))
});

