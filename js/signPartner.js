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
let fileInput = document.querySelector('input[type="file"]');
let checkInput = document.querySelectorAll('input[type="checkbox"]');

let x = []

console.log("ho")

checkInput.forEach(element => {
  element.addEventListener("change", (e) => {
    if (x.length === 0) {
      x.push(e.target.value)
    } else{
      var check = x.filter(ele => ele !== e.target.value);
      x.length === check.length ? x.push(e.target.value): x = check;
    }
    console.log(x)
  })
});


function timeConvert(hour, min, sec) {
  hourVa = hour.length === 1 ? "0" + hour : hour;
  minVa = min.length === 1 ? "0" + min : min;
  secVa = sec.length === 1 ? "0" + sec : sec;

  return hourVa + ":" + minVa + ":" + secVa
}

submit.addEventListener('submit', function (e) {

  openTime = timeConvert(hourOpen.value, minuteOpen.value, secondsOpen.value);
  closeTime = timeConvert(hourClose.value, minuteClose.value, secondsClose.value);

  const file = fileInput.files[0];
  const formData = new FormData();
  formData.append('image', file);
  formData.append('name', inputName.value);
  formData.append('email', inputEmail.value);
  formData.append('phone', inputPhone.value);
  formData.append('password', inputPassword.value);
  formData.append('address', inputLocation.value);
  formData.append('description', description.value);
  formData.append('fees', deliveryFees.value);
  formData.append('time', deliveryTime.value);
  formData.append('close', closeTime);
  formData.append('open', openTime);
  formData.append('status', statuss.value);
  formData.append('minorder', minOrder.value);
  formData.append('category', x.join());



  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'http://localhost/footer-hunter/implementation/signUpPartner.php', true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log('تم تحميل الصورة بنجاح.');
    } else {
      console.log('فشل تحميل الصورة.');
    }
  };

  xhr.send(formData);

  localStorage.setItem("data",JSON.stringify(inputEmail.value))
});

