<?php session_start(); include_once 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="add_mavzu.php" method="POST">

                    <?php
                        // $id = $_GET['id'];
                        $fan_id = $_GET['fan_id'];
                        $sql = "SELECT * FROM mavzular WHERE fan_id='$fan_id'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="mb-3">
                                <label for="title" class="form-label"><?=$row['id']?></label>
                                <input name="mavzu_<?=$row['id']?>" type="text" class="form-control" id="title" aria-describedby="emailHelp" value="<?=$row['title']?>">
                            </div>
                    <?php
                            }
                        } else {
                            $count = $_GET['count'];
                            for($i = 1; $i <= $count; $i++) {
                            ?>
                            <div class="mb-3">
                                <label for="title" class="form-label"><?=$i?> - mavzu</label>
                                <input name="mavzu_<?=$i?>" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
        
                            <?php
                                }
                                
                                $_SESSION['count'] = $count;
                                $_SESSION['fan_id'] = $fan_id;
                        } 
                        ?>





                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>