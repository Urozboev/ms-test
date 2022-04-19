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
            <div class="col-8">
                <form action="add_fan.php" method="POST">
                    <div class="mb-3">
                      <label for="author" class="form-label">Author</label>
                      <input name="author" type="text" class="form-control" id="author" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="fan" class="form-label">Fan nomi</label>
                        <input name="fan" type="text" class="form-control" id="fan" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                        <label for="mavzu" class="form-label">Mavzu soni</label>
                        <input name="mavzu" type="text" class="form-control" id="mavzu" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Ochish</button>
                    <!-- <a href="connect.php" class="btn btn-primary">Ochish</a> -->
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>