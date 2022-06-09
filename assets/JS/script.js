// console.log('Ciao');

const app = new Vue ({
    el: '#app',
    data: {
        apiURL: 'http://localhost:8888/PHP%20Projects/PHP%20Dischi/%20php-ajax-dischi/assets/database/api.php',
        discArr: []
    },

    mounted(){
        this.getApi();
    },

    methods : {
        getApi(){
            axios.get(this.apiURL)
            .then((res) => {
                console.log(res.data);
                this.discArr = res.data; 
            });
        } 
    }
})