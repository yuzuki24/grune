var app = new Vue({
    el: '#app',
    data: {
        postcode: '',
        prefecture_id: '',
        city: '',
        local: '',
    },
    methods: {
        onClick() {
            console.log('クリックしました')
            var url = '/Backend/postal_search?' + [
                'postcode=' + this.postcode,

            ].join('&');
            console.log(url)
            axios.get(url).then((response) => {

                this.prefecture_id = response.data.prefecture_id;
                this.city = response.data.city;
                this.local = response.data.local;

            });

        }
    }
});