let statuss = "";
let id;
fetch(`http://localhost/footer-hunter/implementation/requestsAdmin.php`)
    .then(res => res.json())
    .then(dataAll => {
        dataAll.forEach(data => {
            console.log(data)
            let div = document.createElement("div");
            div.setAttribute("class", "col-lg-10")
            div.setAttribute("id", "data-numRequest"+data.id)
            div.innerHTML =
                `
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Name : ${data.name}</h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Email : ${data.email}</h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Phone : ${data.phone}</h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Lincess : ${data.license}</h5>
                    </div>
                </div>
                <div class="buttons mt-3">
                    <button data-status="accept" data-id=${data.id} class="accept">Accept</button>
                    <button data-status="reject" data-id=${data.id} class="reject">Reject</button>
                </div>
            </div>
        </div>        
        `
            document.getElementById("requests").append(div)
        });

        let acceptButtons = document.querySelectorAll(".accept");
        let rejectButtons = document.querySelectorAll(".reject");

        acceptButtons.forEach(acceptButton => {
            acceptButton.addEventListener("click", () => {
                Swal.fire({
                    title: 'Confirmation of the approval request?',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        Swal.fire('operation accomplished successfully!', '', 'success')
                    }

                    id = acceptButton.getAttribute("data-id");
                    statuss = acceptButton.getAttribute("data-status");
                    addDelivery(id, statuss);
                })
            })
        })

        rejectButtons.forEach(rejectButton => {
            rejectButton.addEventListener("click", () => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your been deleted.',
                            'success'
                        )
                    }
                    id = rejectButton.getAttribute("data-id");
                    statuss = rejectButton.getAttribute("data-status");
                    addDelivery(id, statuss);
                })
            })
        })

    })



function addDelivery(id, statuss) {
    console.log(id)
    const formData = new FormData();
    formData.append('adminId',"1");
    formData.append('deliveryId', id);
    formData.append('status', statuss);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/footer-hunter/implementation/hireDelivery.php', true);
    xhr.send(formData);

    document.getElementById(`data-numRequest${id}`).remove();
}