// console.log('Ciao');

const app = new Vue ({
    el: '#app',
    data: {
        apiURL: 'http://localhost:8888/PHP%20Projects/PHP%20Dischi/%20php-ajax-dischi/assets/database/api.php',
        apiParams:{
            genre: 'default',
            author: 'default'
        },
        discArr: [],
        genreArr: [],
        artistArr: [],
    },

    mounted(){
        this.getApi();
    },

    methods : {
        getApi(){
            axios.get(this.apiURL, {
                params: this.apiParams,
            }) 
            .then((res) => {
                this.discArr = res.data.dischiFiltrati;
                this.genreArr = res.data.genreArr;
                this.artistArr = res.data.artistArr;

                console.log(this.discArr);
                console.log(this.genreArr);
                console.log(this.artistArr);

                // FILTRI SPOSTATI NELL'API
                // this.discArr.forEach(album => {
                //     if(!this.genreArr.includes(album.genre)){
                //         this.genreArr.push(album.genre)
                //     }
                // });

                // this.discArr.forEach(album => {
                //     if(!this.artistArr.includes(album.author)){
                //         this.artistArr.push(album.author)
                //     }
                // })s
            })
            .catch (err =>{
                console.log('ERRORE', err)
            });
        }
    }
})