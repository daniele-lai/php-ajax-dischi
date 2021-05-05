 
var app = new Vue({
    el: "#app",
    data: {
      albums: []
    },
    mounted: function () {
      axios.get("http://localhost/php-ajax-dischi/encode.php")
        .then((response) => {
          this.albums = response.data;
        });
    }
  });