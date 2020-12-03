const app = new Vue({
	el:'#app',
	data: {
		titulo: 'Lo que quieras poner en ver más.',
		activada:true,
	},
	methods:{
	cambiarEstado(){
      this.activada = !this.activada;
    },
		
	}
})