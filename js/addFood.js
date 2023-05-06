// // Get Element Name Partner
// let namePartner = document.getElementById("namePartner");

// Call Data From Local Storage
const data = JSON.parse(localStorage.getItem('data'));

// // Add Name Partner
// namePartner.innerHTML = data.name + " " + `<i class="fa-solid fa-shop"></i>`;

// Get Elements Form 
let foodName = document.getElementById("foodname"),
    description = document.getElementById("description"),
    price = document.getElementById("price"),
    formFile = document.getElementById("formFile"),
    submit = document.getElementById("submit"),
    fileInput = document.querySelector('input[type="file"]');


let partnerData = JSON.parse(localStorage.getItem("dataPartner"))


// Add Event Listner

submit.addEventListener('submit', function (e) {
    const file = fileInput.files[0];
    const formData = new FormData();
    formData.append('id', partnerData.id);
    formData.append('image', file);
    formData.append('mealname', foodName.value);
    formData.append('description', description.value);
    formData.append('price', price.value);


    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/footer-hunter/implementation/addMeal.php', true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log('تم تحميل الصورة بنجاح.');
        } else {
            console.log('فشل تحميل الصورة.');
        }
    };
    xhr.send(formData);
});


// Create Function Add Foods in Dom
function addFoods() {
    fetch(`http://localhost/footer-hunter/implementation/getMeals.php?partnerid=${+partnerData.id}`)
        .then(res => res.json())
        .then((data) => {
            data.forEach(element => {
                let tr = document.createElement("tr");
                tr.setAttribute("id", element.id);
                tr.innerHTML = `
                            <th scope="row">${element.mealname}</th>
                            <td>${element.description}</td>
                            <td><img src=${element.image} alt=""></td>
                            <td>${element.price}</td>
                            <td>
                                <button class="delete me-2" id=${element.mealid}>delete</button>
                                <button class="edit" id=${element.mealid}>edit</button>
                            </td>
        `
                document.querySelector("tbody").append(tr)
            });
            // Delete Food
            // Call Button Delete
            let deleteFoods = document.querySelectorAll(".delete");
            deleteFoods.forEach(deletef => {
                deletef.addEventListener("click", (e) => {
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
                            deleteFood(deletef.getAttribute("id"));
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })
                })
            })

        })
}


function deleteFood(id) {
    const formData = new FormData();
    formData.append('mealid',id);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/footer-hunter/implementation/deletemeal.php', true);
    xhr.send(formData);
    addFoods()
}

// Call Function Add Foods 
addFoods();

