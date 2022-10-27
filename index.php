
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Classes</title>
</head>
<body>


    <div class="container">
        <h1>ADMIN LOGIN</h1>
        <form action="login.php" method="POST" enctype="multipart/form-data">

            <input type="email" class="input-feild form-element" id="email" name="email" placeholder="Email" required>
            <input type="password" class="input-feild form-element" id="password" name="password" placeholder="Password" required> 
            <button type="submit" class="btn-submit form-element" name="submit">LOGIN</button>

        </form>
        <?php
        if(isset($_GET['logout'])) {
            echo "<p>You have louged out!</p>";
        }

?>
    </div>
</body>
</html>