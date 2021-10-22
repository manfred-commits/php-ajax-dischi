<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link to font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- link to font style -->

    <!-- link to css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- /link to css -->

    <title>vue-dischi</title>
</head>
<body>
    <div id="root">


        <header>
            <img src="./img/spotify-logo.png" alt="spotify img">
            <div class="select-container">
                <select name="genre" v-model="genreSelected" @change="callOnGenre()">
                    <option value="">Tutti i generi</option>
                    <option v-for="(genre,index) in selectCategories" :key="index" :value="genre">{{genre}}</option>
                </select>
            </div>
        </header>
        <main>
        
            <div v-for="(album,index) in albums" :key="index" class="card">
                
                <div class="container-album-img">
                    <img :src="album['poster']" :alt="album['title']">
                </div>
                <div class="container-album-txt">
                    <ul>
                        <li>
                            <h3>
                                {{album['title']}}
                            </h3>
                        </li>
                        <li>
                            <p>
                                {{album['author']}}
                            </p>
                            <p>
                                {{album['year']}}
                            </p>
                        </li>
                    </ul>
    
                </div>
            </div>
        
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/script.js"></script>
</body>
</html>