<?php 
    include __DIR__ . "/api.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Php Dischi</title>
</head>
<body>
    <header>
      <img src="img/download.png" alt="Logo Spotify">
    </header>
    <div class="container">
      <div class="wrapper">
        <?php foreach ( $albums as $album ) { ?>
            <div class="card">
                <img src="<?php echo $album["poster"] ?>" alt="<?php echo $album["title"]; ?>">
                <h2>
                    <?php echo $album["title"]; ?>
                </h2>
                <h3>
                    <?php echo $album["author"]; ?>  
                </h3>
                <span>
                    <?php echo $album["genre"]; ?>  
                </span>
                <span>
                    <?php echo $album["year"]; ?>  
                </span>
            </div>
        <?php } ?>
      </div>
    </div>
  </div>

</body>
</html>