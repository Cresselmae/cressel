<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- link all data -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->

    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->

        <!-- backgournd -->
        <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
    <!-- backgournd -->

</head>
<body>


    <!-- Navigation -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="./assets/img/hotels.png" height="50">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./register.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Reservation</a>
        </li>
      </ul>
      <form class="d-flex">
        <input onkeyup="search(this.value)" class="form-control me-2" type="text" placeholder="Search Here!!">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
    </div>
    </nav>

    <!-- Navigation -->
    <div class="container">
        <p class="h3 mt-3">Hotels</p>
        <p>You can find your favorite hotel here...</p>
    <div class="card mt-4">
    <!-- Header -->
    <div class="card-header">List of Hotels 
    </div>
    <!-- Header -->     

    <div class="card-body">
    <div class="card-header"> 
    <hr>
    <table class="table table-hover">
    <thead>
    <tr>
        <th width= "100" style="text-align : center;">Hotel Id</th>
        <th style= "text-align: left; padding-left: 10px">Hotel Name</th>
        <th width="50" style="text-align : center;">Action</th>
    </tr>
    </thead> 
    <tbody id="results">
    </tbody>
    </table>
    </div></div>
    <div class="card-footer">Those are the list of Hotels</div>
    
    <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

        
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./assets/js/search.js"> </script>
</html>
