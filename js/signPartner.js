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

// اختيار العنصر الذي يحتوي على الصورة
const fileInput = document.querySelector('input[type="file"]');

// تحويل الصورة إلى بيانات ثنائية الحجم
const reader = new FileReader();
console.log(reader)
reader.addEventListener('load', function () {
  const imageData = reader.result;
  console.log(imageData)

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'upload.php', true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log('تم تحميل الصورة بنجاح');
    } else {
      console.log('فشل تحميل الصورة');
    }
  };
  xhr.send(imageData);
});
reader.readAsDataURL(fileInput.files[0]);

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
      open: `${hourOpenValue + " : " + minuteOpenValue + " : " + secondsOpenValue
        }`,
      close: `${hourCloseValue + " : " + minuteCloseValue + " : " + secondsCloseValue
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
