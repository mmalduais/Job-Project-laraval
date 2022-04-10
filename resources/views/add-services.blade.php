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
        <h2 style="color: blue;">Add Services </h2>
        <form action="addServ" method="POST" >
            @csrf
            <p> Name of Services:</p>
            <input type="text" name="title" placeholder="Enter  Title">
            <p>describe of Services:</p>
            <input type="text" name="des" >

        </br>
            <button style=" margin-top: 20px;" type="submit"> Save </button>
        </form>
    </div>
</body>

</html>
