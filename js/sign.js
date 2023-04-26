let nextButton = document.getElementById("nextButton");
let selected = document.querySelectorAll(".form-check-input");

let choose;
selected.forEach((element) => {
    element.addEventListener("change", (e) => {
        nextButton.classList.remove("chooseNone");
        choose = e.target.value;
    })
})

nextButton.addEventListener("click", () => {
    if (choose === "signup-user") {
        location.href = "../signup-user.html"
    } else if (choose === "signup-partner") {
        location.href = "../signup-partner.html"
    }
})

console.log(choose)


