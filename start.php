<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Quiz</title>
    <link rel="icon" href="Asset 3@2x.png">
    <link rel="stylesheet" href="start.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Fredoka'; font-size: small;">
    <div class="login-box">
        <form action="quiz.php" method="post">
            <div class="mb-3"><br><br>
            <h4>MASUKKAN NAMA KAMU:</h4>
            <input type="text" class="form-control" id="name" name="name" required>
            <button type="submit" class="tombollogin">MULAI QUIZ</button><br><br>
            <div class="alert alert-danger">'Pastikan kamu mengisi quiz dengan sungguh-sungguh yaa karena ini mempengaruhi nilai!!'</div>
        </div>
        </form>
    </div>
</body>
</html>
