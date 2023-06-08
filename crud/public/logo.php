<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!$_FILES['logo']['error']) {
        $path = __DIR__ . '/';
        $name = 'logo.jpg';
        move_uploaded_file($_FILES['logo']['tmp_name'], $path . $name);
    }

    header('Location: ./');
    die;
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>
    <title>Add logo</title>
</head>
<body>
    <?php require __DIR__ . '/menu.php' ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card m-5">
                    <div class="card-header">
                        <h2>Add logo</h2>
                    </div>
                    <div class="card-body">
                        <form action="./logo.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Logo image</label>
                                <input class="form-control" type="file" name="logo">
                            </div>
                            <button type="submit" class="btn btn-outline-warning mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>