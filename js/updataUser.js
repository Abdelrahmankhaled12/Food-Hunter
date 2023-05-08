let nameInput =  document.getElementById("name");
let emailInput =  document.getElementById("email");
let locationInput =  document.getElementById("location");
let phoneInput =  document.getElementById("phone");


let emailUser = JSON.parse(localStorage.getItem("emailUser"));

fetch(`http://localhost/footer-hunter/implementation/getUserData.php?email=${emailUser}`).then(res=>res.json())
.then(data=>{
    nameInput.value = data[0].name;
    emailInput.value = data[0].email;
    locationInput.value = data[0].location;
    phoneInput.value = data[0].phone;
})