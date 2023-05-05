// Get Elements
let namePartner = document.getElementById("namePartner");
let totalUsers = document.getElementById("totalUsers");
let averageRating = document.getElementById("averageRating");
let totalSales = document.getElementById("totalSales");
let totalOrders = document.getElementById("totalOrders");

// Get Email Local Storage
const data = JSON.parse(localStorage.getItem('data'));


fetch(`http://localhost/footer-hunter/implementation/getPartnerData.php?email=lol@gmail.com`)
.then(res=>res.json())
.then(data => {

})


namePartner.innerHTML = data.name + " " + `<i class="fa-solid fa-shop"></i>`; 

