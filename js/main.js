


// var data = {
//     name: "ao",
//     email: "ao@gmail.com",
//     password: "2235",
//     address: "1oo",
//     phone: "01148687285",
// };

// var jsonData = JSON.stringify(data);

// var xhr = new XMLHttpRequest();
// xhr.open("POST", "http://localhost/footer-hunter/data.php", true);
// xhr.setRequestHeader("Content-Type", "application/json");
// xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//         // تنفيذ الإجراءات اللازمة على الرد الذي يتم استلامه من PHP
//         console.log(xhr.responseText);
//     }
// };

// console.log(jsonData)

// xhr.send(jsonData);


fetch("http://localhost/footer-hunter/data.php")
    .then((data) => data.json())
    .then((data) => console.log(data));
