<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">
   <script src="./scripts/scripts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid text-black">
      <div class= "text-center" id="educ"><h1>UPDATE</h1></div> 
      <form action="<?=base_url('entryform/update/'.$message['id'])?>" method="POST">
      <input type="hidden" name="_method" value="PUT">

         <div class="modal-body">
            <div class="form-group text-white">
               <label> Email address </label>
               <input type="email" class="form-control" name="email" value="<?=$message['email'];?>" aria-describedby="emailHelp">
               <div class="form-text text-white"></div>
            </div>
            <div class="form-group mb-3 text-white">
               <label> Name </label>
               <input type="form-text" name="name" class="form-control" id="name" value="<?=$message['name'];?>">
            </div>
            <div class="form-group text-white">
               <label> Message </label>
               <textarea type="form-text" name="comment" id="comment" class="form-control"><?=$message['comment'];?></textarea>
            </div>
         </div>
         
         <button type="submit" class="btn btn-success my-1 py-1 px-1 fs-5 fw-bold" id="educ">Update</button>
         <td><a href ="/entryform" class = "btn btn-danger fs-5 py-1 px-1 fw-bold" id="educ">Back</a>
      </form>
   </div>
   