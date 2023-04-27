<?= $this->extend('layouts/frontend.php') ?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGES FOR SUBMITTED COMMENTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">
   <script src="./scripts/scripts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-white">
        <div class="box text-white">
            <h4 class="display-4 text-center fw-bold" id="educ">READ</h4><hr>
            <a href="Home.php" class="fs-4 fw-bold back" id="educ">BACK</a> 
            <?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope = "col" class = "text-white" >#</th>
                        <th scope = "col" class = "text-white">Name</th>
                        <th scope = "col" class = "text-white">Email</th>
                        <th scope = "col" class = "text-white">Message</th>
                        <th scope = "col" class = "text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i = 0;
                    while($rows = mysqli_fetch_assoc($result)){
                    $i++;
                 ?>
                    <tr>
                        <th scope="row" class = "text-white"><?=$i?></th>
                        <td class = "text-white"><?=$rows['name'];?></td>
                        <td class = "text-white"><?php echo $rows['email']; ?></td>
                        <td class = "text-white"><?php echo $rows['comment']; ?></td>
                        <td><a href ="view.php?id=<?=$rows['id']?>"
                                     class = "btn btn-danger mx-2">View</a>
                            <a href ="update.php?id=<?=$rows['id']?>"
                                     class = "btn btn-success mx-2">Update</a>
                            <a href ="./crud/delete.php?id=<?=$rows['id']?>"
                                     class = "btn btn-danger mx-2">Delete</a>     
                        </td> 
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php }?>
        </div>
    </div>
</body>
</html>