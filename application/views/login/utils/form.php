<form action="#" method="POST" autocomplete="off" novalidate="true" class="bg-white m-0 py-10" id="appLogin" @submit.prevent="validarFormulario">
	<p v-if="errorSesion" class="w-3/4 mx-auto py-2 text-center bg-red-600 text-white rounded-sm">
		Correo electrónico o contraseña incorrectos
	</p>
	<div class="w-3/4 mx-auto py-10 relative">
		<label for="email" class="absolute" :class="subirEmail">Email:</label>
		<input type="email" id="email" name="email" v-model.trim="email" @focus="subirLabelEmail" class="border-b border-black w-full focus:outline-none input-login">
		<p v-if="errorEmail!=null" class="text-red-600">
			{{ errorEmail }}
		</p>
  </div>
	<div class="w-3/4 mx-auto py-10 relative">
		<label for="contrasena" class="absolute" :class="subirPassword">Password:</label>
		<input type="password" id="password" name="password" v-model.trim="password" class="border-b border-black w-full focus:outline-none input-login" @focus="subirLabelPassword">
		<p v-if="errorPassword!=null"  class="text-red-600">
			{{ errorPassword }}
		</p>
	</div>
	<div class="w-3/4 mx-auto pt-5">
		<button class="bg-blue-600 text-white py-2 px-6 rounded shadow focus:outline-none hover:bg-blue-700">INGRESAR<span class="material-icons right ml-4 text-xl align-middle">send</span></button>
	</div>
	<div class="w-3/4 mx-auto pt-5">
		<input type="checkbox" name="" id="btn-recuerdame" class="mr-1">
		<label for="btn-recuerdame">Recuérdame</label>
	</div>
	<div class="w-3/4 mx-auto pt-5">
		<a href="" class="text-blue-600 shadow-md">¿Olvidó su contraseña?</a>
	</div>
</form>