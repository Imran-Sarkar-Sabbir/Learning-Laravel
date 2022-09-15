<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User View</title>
</head>

<body>

    <center>
        <h1>Hello, {{$name}}</h1>

        <div>
            <span>name -> {{$info['name']}}</span> <br />
            <span>fav -> {{$info['fav']}}</span> <br />
            <span>profession -> {{$info['profession']}}</span> <br />
        </div>
    </center>

</body>

</html>