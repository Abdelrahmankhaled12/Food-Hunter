let namePartner = document.getElementById("namePartner");

const data = JSON.parse(localStorage.getItem('data'));


namePartner.innerHTML = data.name + " " + `<i class="fa-solid fa-shop"></i>`; 

