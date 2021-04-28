var app = new Vue ({

    el: '#root',
    data: {
        arrayDischi: []
    },

    mounted() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((result) => {
                this.arrayDischi = result.data;
                console.log(this.arrayDischi)
                
            })
    }

});