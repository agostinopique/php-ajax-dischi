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
                this.discArr = res.data; 

                this.discArr.forEach(album => {
                    if(!this.genreArr.includes(album.genre)){
                        this.genreArr.push(album.genre)
                    }
                });

                this.discArr.forEach(album => {
                    if(!this.artistArr.includes(album.author)){
                        this.artistArr.push(album.author)
                    }
                })
                console.log(this.artistArr);
                console.log(this.genreArr);
            })
            .catch (err =>{
                console.log('ERROR', err)
            });
        },

        getSearchApi(){
            axios.get(this.apiURL, {
                params: this.apiParams,
            })  
            .then((res) => {
                this.discArr = res.data;
                // console.log(res);
            })
            console.log(this.apiParams.genre)
            console.log(this.apiParams.author)
        }
    }
})