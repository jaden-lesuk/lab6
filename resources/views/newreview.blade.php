<?php

?>


<html><head>
<title>New Review</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
        #entry{
            margin-top: 20px;
            padding-left: 20px;
        }
        .useful{
            color: white;
        }
        </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<meta charset="utf-8">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- navbar navbar-expand-sm bg-dark navbar-dark -->
        <a class="navbar-brand text-primary" href="/home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/car">Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/review">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newcar"><button class="btn btn-outline-primary btn-sm" type="submit">New Car</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newreview"><button class="btn btn-outline-primary btn-sm" type="submit">New Review</button></a>
                </li>
            </ul>
        </div>
        </nav>

        <div  id ="entry" class="col-md-4">
            <div class= "card card-body bg-dark">
            <h2 class="useful text-primary">Enter review:</h2>
            <form action="/register_review" method="post">
                @csrf
                <div class="form-group">
            <label for="car_id" class="useful">Car id:</label>
            <input type="textarea" class="form-control" id="car_id" name="car_id" placeholder="1">
        </div>

        <div class="form-group">
            <label for="body" class="useful">Review:</label>
            <input type="textarea" class="form-control" id="body" name="body" placeholder="e.g This car is good">
        </div>
        <br>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div>
            </form>
            </div>
        </div>



</body>
</html>



