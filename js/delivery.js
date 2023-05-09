fetch(`http://localhost/footer-hunter/implementation/showOrderRequestDelivery.php`)
    .then(res => res.json())
    .then(dataAll => {
        console.log(dataAll)
        dataAll.forEach(data => {
            let div = document.createElement("div");
            div.setAttribute("class", "col-lg-10")
            div.setAttribute("id", "data-numRequest"+data.id)
            div.innerHTML =
                `
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Order ID : <span>${data.id}</span> </h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Order Details : <span>${data.details} </span></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Delivery Fees : <span>${data.fees} </span></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Meal Price : <span>${data.mealPrice}</span></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Order Time : <span>${data.orderTime}</span></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Restaurant : <span>${data.restaurant}</span></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Restaurant Address : <span>${data.partnerLocation}</span></h5>
                    </div>
                    <div class="col-lg-6">
                    <h5>User Name : <span>${data.userName}</span></h5>
                    </div>
                    <div class="col-lg-6">
                    <h5>User Phone : <span>${data.userPhone}</span></h5>
                    </div>
                    <div class="col-lg-6">
                    <h5>User Address : <span>${data.userLocation}</span></h5>
                    </div>
                </div>
                <div class="buttons mt-3">
                    <button data-status="accept" data-id=${data.id} class="accept">Accept</button>
                </div>
            </div>
        </div>        
        `
            document.getElementById("requests").append(div)
        });

        let acceptButtons = document.querySelectorAll(".accept");

        acceptButtons.forEach(acceptButton => {
            acceptButton.addEventListener("click", () => {
                const formData = new FormData();
                formData.append('userid', dataUser[0].id);
                formData.append('orderdetails', des);
                formData.append('totalPrice', total);
                formData.append('partnerid', idPage);
                formData.append('ratings', rating);
                formData.append('review', review);
                formData.append('feedback', feed);
                formData.append('fees', foodFees);
                formData.append('mealprice', meaPrice);
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/footer-hunter/implementation/deliverOrder.php', true);
                xhr.send(formData);
                
            })
        })
    })