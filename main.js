const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: '',
            discDetails: ''
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data
                })
        },
        cardCliccata(i) {
            let indNumb = {
                discIndex: i
            }

            //
            //
            axios.post(this.apiUrl, indNumb, { headers: { 'Content-Type': 'multipart/form-data' } })
                .then((res) => {
                    this.discDetails = res.data
                })

        }
    },
    mounted() {
        this.chiamataApi()
    }
}).mount('#app')