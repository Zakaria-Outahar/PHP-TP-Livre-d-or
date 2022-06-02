<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <style>
        *, ::after, ::before{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        header, footer{
            text-align: center;
            height: 70px;
            font-size: 2.5rem;
            background-color: #333;
            line-height: 70px;
            color:#fefefe;
        }

        .container{
            width: 50%;
            margin: 5vh auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container p{
            font-size: 1.2rem;
        }
        form[method="post"] > *{
            margin-bottom: 15px;
        }

        .invalid{
            color:red;
            font-style:italic;
            font-size: 0.8em;
        }
    </style>

    <header>Header</header>




