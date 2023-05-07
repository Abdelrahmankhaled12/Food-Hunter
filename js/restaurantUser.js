// Get Elements
let minorderElement = document.getElementById("minorder"),
    categoriesElement = document.getElementById("categories"),
    nameRestaurantElement = document.getElementById("nameRestaurant"),
    openElement = document.getElementById("open"),
    closeElement = document.getElementById("close"),
    statusElement = document.getElementById("status"),
    imgLogoElement = document.getElementById("imgLogo"),
    descriptionRestElement = document.getElementById("descriptionRest");




let idPage = JSON.parse(localStorage.getItem("linkPage"));


fetch("http://localhost/footer-hunter/implementation/getAllpartners.php")
.then(res=>res.json())
.then(dataAll=>{
    dataAll.forEach(data => {
        if(data.id === idPage) {
            // Add Data Restaurant
            imgLogoElement.setAttribute("src",data.logo);
            nameRestaurantElement.innerHTML = data.name;
            categoriesElement.innerHTML = data.category;
            openElement.innerHTML = data.open;
            closeElement.innerHTML = data.close;
            statusElement.innerHTML = data.status;
            minorderElement.innerHTML = data.minorder
            descriptionRestElement.innerHTML = data.description;
        }
    });
})

fetch(`http://localhost/footer-hunter/implementation/getMeals.php?partnerid=31}`)
.then(res=>res.json())
.then(dataAll=>{
    dataAll.forEach(data=>{
        let div = document.createElement("div");
        div.setAttribute("class","box d-flex pb-2 mb-3")

        div.innerHTML = 
            `
                <div class="food d-flex">
                    <img src=${data.image} alt="">
                    <div class="title ps-2">
                        <h4 class="nameFood">${data.mealname}</h4>
                        <p class="description">${data.description}</p>
                    </div>
                </div>
                <div class="price ps-2 text-end">
                    <p>${data.price} EGP</p>
                    <button class="addOrder" id=${data.mealid}>add</button>
                </div>
            `
            document.getElementById("fooods").append(div)
    })
    // Add Food To Cart
    let addOrderButtons = document.querySelectorAll(".addOrder");
    addOrderButtons.forEach(addOrderButton=>{
        addOrderButton.addEventListener("click",()=>{
            let data = dataAll.filter(index=> index.mealid === addOrderButton.getAttribute("id"))
            let div = document.createElement("div");
            div.setAttribute("class","product d-flex justify-content-between p-3")
            div.setAttribute("id","data-"+data[0].mealid)
            div.innerHTML = `
            <input type="number" min="1" name="" id="" value="1">
            <p class="nameFood">${data[0].mealname}</p>
            <p class="price ms-1 me-1">${data[0].price}</p>
            <button class="delete" id="delete" data-id=${data[0].mealid}><i class="fa-solid fa-minus"></i></button>
            `
            document.getElementById("bodyCart").append(div);

            document.getElementById("delete").addEventListener("click",()=>{
                console.log(document.getElementById("delete").getAttribute("data-id"))
                document.getElementById(`data-${document.getElementById("delete").getAttribute("data-id")}`).remove()

                
            })
        })
    })

})


