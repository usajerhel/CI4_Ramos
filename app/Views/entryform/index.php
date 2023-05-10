<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGES FOR SUBMITTED COMMENTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="styles/style.css">
   <script src="./scripts/scripts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-dark" id="coloring">
        <div class="row">
            <div class="col-md-12">
                <h4 class="display-4 text-center fw-bold" id="educ">READ</h4><hr>
                <table class="table table-striped">
                    <thead>
                        <tr class="text-dark">
                            <th scope = "col">#</th>
                            <th scope = "col">Name</th>
                            <th scope = "col">Email</th>
                            <th scope = "col">Message</th>
                            <th colspan = "3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($messages):?>
                            <?php foreach($messages as $row) :?>
                                <tr class ="text-dark">
                                    <td><?= $row['id'];?></td>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['comment']; ?></td>
                                 
                                    <td><a href ="" class ="btn btn-danger mx-2">View</a></td>
                                    <td><a href ="<?=base_url('entryform/edit/'.$row['id']) ?>" class = "btn btn-success mx-2">Edit</a></td>
                                    <td><a href ="<?=base_url('entryform/delete/'.$row['id']) ?>" class = "btn btn-danger mx-2">Delete</a> </td>    
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>