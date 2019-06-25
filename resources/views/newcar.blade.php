<?php

?>


<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<title>{{config('app.name', '101536')}}</title>-->
<title>New Car</title>

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
        <a class="navbar-brand" href="/home">Home</a>
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
            <h2 class="useful text-primary">Enter car:</h2>
            <form action="/register_car" method="post">
       @csrf
       <div class="form-group">
           <label for="Make" class="useful">Make:</label>
           <input type="text" class="form-control" id="make" name="make" placeholder="e.g. Toyota">
       </div>

       <div class="form-group">
           <label for="make" class="useful">Model:</label>
           <input type="text" class="form-control" id="model" name="model" placeholder="e.g. Demio">
       </div>

       <label for="produced_on" class="useful">Produced on:</label>
       <input type="date" class="form-control" id="produced_on" name="produced_on" placeholder="dd/mm/yyyy">
        <br><br>
       <div class="form-group">
           <input type="submit" value="Submit" class="btn btn-primary btn-block">
       </div>
   </form>
            </div>
        </div>



</body>
</html>


