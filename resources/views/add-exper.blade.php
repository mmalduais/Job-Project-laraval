<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proassets/css/add-exper.css">
    <title>Document</title>
</head>

<body>



    <div class="container">
        <h2 style="color: blue;">Add Experiance </h2>
        <form action="addExp" method="POST" >
            @csrf
            <p> Name of Experiance:</p>
            <input type="text" name="name" placeholder="Enter  Name">
            <p>describe of Experiance:</p>
            <input type="text" name="des" placeholder="Enter number %">

        </br>
            <button style=" margin-top: 20px;" type="submit"> Save </button>
        </form>
    </div>
</body>

</html>
