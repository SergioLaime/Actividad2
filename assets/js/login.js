const vLogin =new Vue({
  el:'#appLogin',
  data:{
    email:null,
    password:null,
    errorEmail:null,
    errorPassword:null,
    subirEmail:null,
		subirPassword:null,
    token:null,
		errorSesion:false
  },
  methods:{
    subirLabelEmail(){
      this.subirEmail='transform -translate-y-6 transition-all duration-500'
    },
    subirLabelPassword(){
      this.subirPassword='transform -translate-y-6 transition-all duration-500'
    },
    validarFormulario (e) {
      if (this.email==null) {
        this.errorEmail='El correo electrónico es obligatorio';
      } 
      else{
        if (!this.validarCorreo(this.email)) {
          this.errorEmail='El correo electrónico debe ser válido';
        }
        else{
          this.errorEmail=null
        }
      } 
      if (this.password == null) {
        this.errorPassword="La contraseña es obligatoria";
      }
      else{
        if(this.password.length<8){
          this.errorPassword="La contraseña debe tener al menos 8 digitos";
        }
        else{
          this.errorPassword=null;
        }
      }
      if (this.errorEmail==null && this.errorPassword==null) {
				this.verificarUsuario();
      }
    },
    validarCorreo(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
    parseJwt (token){ 
      var base64Url = token.split('.')[1]; 
      var base64 = base64Url.replace('-', '+').replace('_', '/'); 
      return JSON.parse(window.atob(base64)); 
    },      
    verificarUsuario(){
  		let data={
  			'login': this.email,
  			'passwd': this.password
  		};
  		axios.post('Login/verificarUsuario', data)
  		.then(resp => {
        
        if (!resp.data["error"])
        {
          
          this.token=resp.data;
          const token= this.parseJwt(this.token);
          
          if(token){
      
            localStorage.setItem("token",this.token);
            console.log(this.token);
            location.href='administrador';
          }
          
        }
        errorSesion:true;
      })
      .catch(error => {
      })
  	}
  }
})