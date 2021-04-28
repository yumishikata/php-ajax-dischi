var app = new Vue ({

    el: '#root',
    data: {
        arrayDischi: [],
        arrayArtisti: [],
        selectedArtist: 'All'
    },
    methods: {
        changeArtist: function(event) {
            this.selectedArtist = event.target.value;
        }
    },
    mounted() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((result) => {
                this.arrayDischi = result.data;
                console.log(this.arrayDischi)
                this.arrayDischi.forEach(element => {
                    if (!this.arrayArtisti.includes(element.author)) {
                        this.arrayArtisti.push(element.author);
                    }
                });
                console.log(this.arrayArtisti);
                
            })
    }

});