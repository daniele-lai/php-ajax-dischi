
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <!-- Vue js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Vuejs Dischi</title>
</head>
<body>
  <div id="app">
    <header>
      <img src="img/download.png" alt="Logo Spotify">
    </header>
    <div class="container">
      <div class="wrapper">
        <div class="card" v-for="album in albums">
          <img :src="album.poster" alt="album.title">
          <h2>{{album.title}}</h2>
          <h3>{{album.author}}</h3>
          <span>{{album.genre}}</span>
          <span>{{album.year}}</span>
        </div>
      </div>
    </div>
  </div>

<script src="js/script.js" charset="utf-8"></script>
</body>
</html>