<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="proassets/css/add-personal.css">
</head>
<body>
    <div class="container">
        <h2 style="color: blue;">Add Personal Data</h2>
        <form action="/add-Personal" method="POST" >

                @csrf
            <p>First Name:</p>
            <input type="text" name="fname" placeholder="Enter First Name">
            <p>Last Name:</p>
            <input type="text" name="lname" placeholder="Enter last Name">
            <p>Company:</p>
            <input type="file" name="image" placeholder=" image Personal">
            <p>Email:</p>
            <input type="email" name="email" placeholder="Enter Email">
            <input type="text" name="company" placeholder="Enter Copany Name">
            <button style=" margin-top: 20px;" type="submit">Savee </button>





        </form>
    </div>
</body>
</html>
