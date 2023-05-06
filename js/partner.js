// Get Elements
let namePartner = document.getElementById("namePartner");
let totalUsers = document.getElementById("totalUsers");
let averageRating = document.getElementById("averageRating");
let totalSales = document.getElementById("totalSales");
let totalOrders = document.getElementById("totalOrders");

// Get Email Local Storage
const data = JSON.parse(localStorage.getItem('data'));


fetch(`http://localhost/footer-hunter/implementation/getPartnerData.php?email=${data}`)
.then(res=>res.json())
.then(data => {
    namePartner.innerHTML = data[0].name + " " + `<i class="fa-solid fa-shop"></i>`; 
    localStorage.setItem("dataPartner",JSON.stringify(data[0]))
})



