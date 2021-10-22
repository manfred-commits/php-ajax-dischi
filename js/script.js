const app = new Vue({
    el:'#root',
    data:{
        albums:"",
        selectCategories:[],
        genreSelected:"",
    },
    created(){
        axios
      .get('http://localhost/PHP/php-ajax-dischi/partials/api/index.php')
      .then(response => {
        console.log(response);
        this.albums=response.data;
        // this.selectFiller();
      })
      .catch(error => {
        console.log(error);
      })
      axios
      .get('http://localhost/PHP/php-ajax-dischi/partials/api/index.php', {
        params: {
        select: 'select'
        }
      })
      .then(response => {
        console.log(response);
        this.selectCategories=response.data;
      })
      .catch(error => {
        console.log(error);
      })
    },
    methods:{
        // selectFiller(){
        //     // console.log("ciao");
        //     // console.log(this.albums);
        //     this.albums.forEach(
        //       (element) => {
        //         // console.log("ciao");
        //         if(!this.selectCategories.includes(element.genre)){
        //             this.selectCategories.push(element.genre);
        //             // console.log("ciao");
        //         }
        //       }
        //     );
        // },
        callOnGenre(){
            axios
            .get('http://localhost/PHP/php-ajax-dischi/partials/api/index.php', {
                  params: {
                  genre: this.genreSelected
                  }
              })
            .then(response => {
              console.log(response.data);
              this.albums=response.data;
            })
            .catch(error => {
              console.log(error);
            })
        }
    }
});