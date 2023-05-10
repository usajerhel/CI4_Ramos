<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
 
 <div class="container text-white" id="coloring" >
   <h1 class="fs-7 fw-bold"  id="educ">CONTACT ME</h1>
      <form action="<?=base_url('entryform/add')?>" method="POST">
         <div class="modal-body">
            <div class="form-group mb-3">
               <label> Email address </label>
               <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
               <div class="form-text text-white">We'll never share your email with anyone else.</div>
            </div>

            <div class="form-group mb-3">
               <label> Name </label>
               <input type="form-text" name="name" class="form-control">
            </div>

            <div class="form-group mb-3">
               <label> Comment</label>
               <textarea type="form-text" name="comment" class="form-control"></textarea>
            </div>

               <button type="submit" class="btn btn-primary my-1 fs-5 fw-bold px-1 py-1" id ="educ">Submit</button>
               <button type="submit" class="btn btn-primary mx-3 my-1 fs-5 fw-bold px-1 py-1" id ="educ" href="/Home">Back</button>
         </div>
      </form>
   </div>
</body>
</html>