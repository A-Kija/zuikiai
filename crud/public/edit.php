<?php 

    $colors = file_get_contents(__DIR__ . '/../colors.ser');
    $colors = $colors ? unserialize($colors) : [];
    $id = (int) $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $colors = array_map(function($c) use($id ) {
            if ($c['id'] == $id) {
                $c['color'] = $_POST['color'];
            }
            return $c;
        }, $colors);

        $colors = serialize($colors);
        file_put_contents(__DIR__ . '/../colors.ser', $colors);
        header('Location: ./');
        die;

    }



    $color = array_filter($colors, fn($c) => $id == $c['id']);
    $color = array_shift($color);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="app.css">
        <script src="app.js"></script>
        <title>Edit</title>
    </head>
    <body>
        <?php require __DIR__ . '/menu.php' ?>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card m-5">
                        <div class="card-header">
                            <h2>Edit color</h2>
                        </div>
                        <div class="card-body">
                            <form action="./edit.php?id=<?= $color['id'] ?>" method="post">
                            <label class="form-label">Color picker</label>
                            <input type="color" class="form-control form-control-color" name="color" value="<?= $color['color']  ?>" title="Choose your color">
                            <button type="submit" class="btn btn-outline-warning mt-4">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    </html>
