const app = new Vue({
    el:'#root',
    data:{
        albums:"",
    },
    created(){
        axios
      .get('http://localhost/PHP/php-ajax-dischi/partials/api/index.php')
      .then(response => {
        console.log(response.data);
        this.albums=response.data;
      })
      .catch(error => {
        console.log(error);
      })
    },
    method:{

    }
});