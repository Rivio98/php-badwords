<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>php-badwords</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <form action="./request.php"
          method="GET" class="d-flex mt-4">
          <div class="mb-3 px-4">
            <label class="form-label">Inserisci qui testo</label>
            <textarea class="form-control" aria-describedby="emailHelp" name="text"></textarea>
          </div>
          <div class="mb-3 px-4">
            <label class="form-label">Inserisci la parola da censurare</label>
            <input type="text" class="form-control" name="word">
          </div>
          <button type="submit" class="btn btn-primary px-4">Manda</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>