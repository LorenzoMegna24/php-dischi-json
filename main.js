const { createApp } = Vue

createApp({
  data() {
    return {
      urlApi: 'apis/dischi.php',
    }
  },
  methods: {
    callApi(){
      axios.get( this.urlApi ).then( (res)=>{
        this.data = res.data
      })
    }
  },
  mounted(){
    this.callApi();
  }
}).mount('#app')