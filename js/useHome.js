// Get Element
let boxes = document.getElementById("boxes");

fetch("http://localhost/footer-hunter/implementation/getAllpartners.php")
.then(res=>res.json())
.then(dataAll=>{
    dataAll.forEach(data => {
        let a = document.createElement("a");
        a.href = "restaurantUser.html"
        a.id = data.id;
        a.classList.add("link")
        a.innerHTML = `
        <div class="box d-flex">
            <img src=${data.logo} alt="">
            <div class="details">
                <h5 id="nameRestaurants">${data.name}</h5>
                <p class="categories" id="categories">${data.category}</p>
                <p class="footer">Within <span id="timeDelivery">${data.time}</span>mins   Delivery:<span id="delivery">${data.fees}</span>   min:<span id="min">${data.minorder}</span></p>
            </div>
        </div>        
        `
        boxes.append(a);
    });

    let links = document.querySelectorAll(".link");

    links.forEach(link=>{
        link.addEventListener("click",()=>{
            localStorage.setItem("linkPage",JSON.stringify(link.getAttribute("id")));
        })
    })
})