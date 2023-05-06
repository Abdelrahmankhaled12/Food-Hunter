// Get Element
let boxes = document.getElementById("boxes");
// let iconSearch = document.getElementById("iconSearch");




// let search = document.getElementById("search");


// search.addEventListener("change", (e) => {
//     console.log(e.target.value)
// })



// Add Restaurants in Dom
fetch("http://localhost/footer-hunter/implementation/getAllpartners.php")
    .then(res => res.json())
    .then(dataAll => {
        dataAll.forEach(data => {
            let div = document.createElement("div");
            div.setAttribute("class", "col-lg-3 col-md-6  mt-3")
            div.innerHTML = `
                        <a class="link" href="./resraurant.html" id=${data.id}>
                            <div class="box">
                                <img src=${data.logo} alt="">
                                <h5 class="name">${data.name}</h5>
                                <p class="description">${data.category}</p>
                            </div>
                        </a>    
                        `
            boxes.append(div);
        });

        let links = document.querySelectorAll(".link");
        links.forEach(link=>{
            link.addEventListener("click",(e)=>{
                dataAll.forEach(data=>{
                    if(+data.id === +link.getAttribute("id")){
                        localStorage.setItem("dataRest",JSON.stringify(data));
                    }
                })
            })
        })
    })

