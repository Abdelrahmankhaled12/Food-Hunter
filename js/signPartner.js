// Get Elements
let inputName = document.getElementById("name");
let inputEmail = document.getElementById("email");
let inputPassword = document.getElementById("password");
let inputPhone = document.getElementById("phone");
let inputLocation = document.getElementById("location");
let inputConfirmPassword = document.getElementById("confirmPassword");
let description = document.getElementById("description");
let deliveryFees = document.getElementById("deliveryFees");
let deliveryTime = document.getElementById("deliveryTime");
let minOrder = document.getElementById("minOrder");
let hourOpen = document.getElementById("hourOpen");
let minuteOpen = document.getElementById("minuteOpen");
let secondsOpen = document.getElementById("secondsOpen");
let hourClose = document.getElementById("hourClose");
let minuteClose = document.getElementById("minuteClose");
let secondsClose = document.getElementById("secondsClose");
let statuss = document.getElementById("status");
let restaurantLogo = document.querySelector('input[type="file"]');

let submit = document.getElementById("sub");

// Storage Data
let nameValue = "",
  emailValue = "",
  passValue = "",
  conPassVAlue = "",
  phoneValue = "",
  locationValue = "",
  descriptionValue = "",
  deliveryFeesValue = 0,
  deliveryTimeValue = 0,
  minOrderValue = 0,
  hourOpenValue = 0,
  minuteOpenValue = 0,
  secondsOpenValue = 0,
  hourCloseValue = 0,
  minuteCloseValue = 0,
  secondsCloseValue = 0,
  statusValue = "",
  restaurantLogoValue;

// Add Event Listener
inputName.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value.length >= 5) {
    nameValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

inputEmail.addEventListener("change", (event) => {
  if (
    event.target.value.trim() &&
    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(event.target.value)
  ) {
    emailValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

inputPassword.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value.length >= 8) {
    passValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

inputConfirmPassword.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value === passValue) {
    conPassVAlue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

inputLocation.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value.length >= 10) {
    locationValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

inputPhone.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value.length === 11) {
    phoneValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

description.addEventListener("change", (event) => {
  if (event.target.value.trim()) {
    descriptionValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

hourOpen.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    hourOpenValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

minOrder.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    minOrderValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

deliveryTime.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    deliveryTimeValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

deliveryFees.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    deliveryFeesValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

statuss.addEventListener("change", (event) => {
  if (event.target.value.trim() && event.target.value.length >= 5) {
    statusValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

secondsClose.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    secondsCloseValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

minuteClose.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    minuteCloseValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

hourClose.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    hourCloseValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

secondsOpen.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    secondsOpenValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

minuteOpen.addEventListener("change", (event) => {
  if (event.target.value >= 0) {
    minuteOpenValue = event.target.value;
    event.target.classList.remove("false");
    event.target.classList.add("true");
  } else {
    event.target.classList.remove("true");
    event.target.classList.add("false");
  }
});

submit.addEventListener("click", (e) => {
  // Check Data True => Send Data From DataBase
  if (
    nameValue.trim() &&
    emailValue.trim() &&
    passValue.trim() &&
    locationValue.trim() &&
    conPassVAlue.trim() &&
    conPassVAlue === passValue &&
    phoneValue.trim() &&
    descriptionValue.trim() &&
    deliveryFeesValue >= 0 &&
    deliveryTimeValue >= 0 &&
    minOrderValue >= 0 &&
    hourOpenValue >= 0 &&
    minuteOpenValue >= 0 &&
    secondsOpenValue >= 0 &&
    hourCloseValue >= 0 &&
    minuteCloseValue >= 0 &&
    secondsCloseValue >= 0 &&
    statusValue.trim()
  ) {
    // const formData = new FormData();
    // formData.append('image', restaurantLogo);
    e.preventDefault();
    const formData = new FormData();

    formData.append("image", restaurantLogo.files[0]);

    var data = {
      name: nameValue,
      email: emailValue,
      password: passValue,
      phone: phoneValue,
      address: locationValue,
      description: descriptionValue,
      fees: deliveryFeesValue,
      time: deliveryTimeValue,
      minorder: minOrderValue,
      open: `${
        hourOpenValue + " : " + minuteOpenValue + " : " + secondsOpenValue
      }`,
      close: `${
        hourCloseValue + " : " + minuteCloseValue + " : " + secondsCloseValue
      }`,
      status: statusValue,
    };

    var jsonData = JSON.stringify(data);
    console.log(jsonData);
    var xhr = new XMLHttpRequest();
    xhr.open(
      "POST",
      "http://localhost/footer-hunter/implementation/signUpPartner.php",
      true
    );
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    xhr.send(jsonData);
    localStorage.setItem("data", JSON.stringify(data));
  }
});
