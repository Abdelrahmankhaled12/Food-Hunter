// // Get Element Name Partner
// let namePartner = document.getElementById("namePartner");

// Call Data From Local Storage
const data = JSON.parse(localStorage.getItem('data'));

// // Add Name Partner
// namePartner.innerHTML = data.name + " " + `<i class="fa-solid fa-shop"></i>`;

// Get Elements Form 
let foodName = document.getElementById("foodname"),
    description = document.getElementById("description"),
    size = document.getElementById("size"),
    price = document.getElementById("price"),
    discount = document.getElementById("discount"),
    category = document.getElementById("category"),
    formFile = document.getElementById("formFile"),
    submit = document.getElementById("submit");


// Storage Data 
let categoryValue = "";

category.addEventListener("change", (e) => {
    categoryValue = e.target.value;
})


// Add Event Listner
submit.addEventListener("submit", (e) => {
    console.log("ho")
    e.preventDefault();
    if (categoryValue.trim() === "") {
        category.classList.add("false");
    } else {
        let dataSend = {
            foodNameValue: foodName.value,
            descriptionValue: description.value,
            sizeValue: size.value,
            priceValue: price.value,
            discountValue: discount.value,
            categoryValue: category.value,
            formFileValue: formFile.value,
            emailPartner:data.email,
        }
        console.log(dataSend)
    }
})

let deleteFood = document.getElementById("delete");

deleteFood.addEventListener("click", (e) => {
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
                'Your file has been deleted.',
                'success'
            )
        }
    })
})

