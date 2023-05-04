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
const fileInput = document.querySelector('input[type="file"]');

submit.addEventListener('submit', function() {

  let openTime = `${hourOpen + " : " + minuteOpen +  " : " +  secondsOpen}`
  let closeTime = `${hourClose + " : " + minuteClose +  " : " +  secondsClose}`

  const file = fileInput.files[0];
  const formData = new FormData();
  formData.append('image', file);
  formData.append('name', inputName.value);   
  formData.append('email', inputEmail.value);    
  formData.append('password', inputPassword.value);
  formData.append('address', inputLocation.value);
  formData.append('description', description.value);
  formData.append('fees', deliveryFees.value);
  formData.append('time', deliveryTime.value);
  formData.append('close', closeTime);
  formData.append('open', openTime);
  formData.append('status', statuss.value);
  formData.append('minorder', minOrder.value);


  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'http://localhost/footer-hunter/implementation/signUpPartner.php', true);
  
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log('تم تحميل الصورة بنجاح.');
    } else {
      console.log('فشل تحميل الصورة.');
    }
  };
  
  xhr.send(formData);
});

let x = "abdelrahman.khaled1086@gmail.com";


fetch(`http://localhost/footer-hunter/implementation/getPartnerData.php?email=${x}`)
.then(res=>console.log(res))
