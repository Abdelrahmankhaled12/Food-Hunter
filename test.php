<?php
  $connect=mysqli_connect("localhost","root","","image");
    /*$email="shehab";
    $password="01148173525";
    $name="shehahed";
    $address="damhsbd";
    $phone="023553154";
    $logoName="shehab";
    $logo="C:\xampp\htdocs\footer-hunter\images\contact.jpg";
    $open="1";
    $close="2";
    $fees=1.5;
    $time="fesf";
    $status="busy";
    $description="anything";
    $minOrder=2.2;
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$logoName','$logo','$open','$close','$fees','$time','$status','$description','$minOrder')";
    mysqli_query($connect,$query);*/
    if (isset($_POST["image"])) {
        $image = $_FILES["image"]["tmp_name"];
        $imageName = $_FILES["image"]["name"];
        $image = base64_encode(file_get_contents($image));
        $query = "insert into image(name,image) values('$imageName','$image')";
        mysqli_query($connect,$query);
    }else{
      echo "ERROR";
    }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Form</title>
</head>
<body>
	<h1>Image Upload Form</h1>
	<form action="process-form.php" method="POST" enctype="multipart/form-data">
	  <label for="image">Choose an image:</label>
	  <input type="file" name="image" id="image">
	  <input type="submit" value="Upload">
	</form>
</body>
</html>