<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Usuarios</title>
		<meta name="author" content="name">
		<meta name="description" content="description here">
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
	<body class="bg-gray-900 font-sans leading-normal tracking-normal mt-12">
    <nav class="bg-gray-900 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
			<div class="flex flex-wrap items-center">
				<div class="flex flex-shrink md:w-1/5 justify-center md:justify-start text-white">
					<a href="#">
						<img src="<?=base_url('assets/images/faceXD.png')?>" alt="" class="ml-16 w-1/3">
					</a>
				</div>
				<div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
					<span class="relative w-full">
						<input type="search" placeholder="Buscar" class="w-full bg-gray-800 text-sm text-white transition border border-transparent focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
						<div class="absolute search-icon" style="top: .5rem; left: .8rem;">
							<svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
							</svg>
						</div>
					</span>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
					<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
						<li class="flex-1 md:flex-none md:mr-3">
							<a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
						</li>
						<li class="flex-1 md:flex-none md:mr-3">
							<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a>
						</li>
						<li class="flex-1 md:flex-none md:mr-3">
							<div class="relative inline-block">
								<button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg></button>
								<div id="myDropdown" class="dropdownlist absolute bg-gray-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
									<input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
									<a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
									<a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
									<div class="border border-gray-800"></div>
									<a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <div class="flex flex-col md:flex-row">
			<div class="bg-gray-900 shadow-lg h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
				<div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
					<ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
						<li class="mr-3 flex-1">
							<a href="<?=base_url('usuarios')?>" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
								<i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Usuarios</span>
							</a>
						</li>
						<!-- <li class="mr-3 flex-1">
							<a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
								<i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Mensajes</span>
							</a>
						</li>
						<li class="mr-3 flex-1">
							<a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
								<i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analíticas</span>
							</a>
						</li>
						<li class="mr-3 flex-1">
							<a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
								<i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Pagos</span>
							</a>
						</li> -->
					</ul>
				</div>
			</div>
			<div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
				<h1 class="text-4xl text-bold px-10 py-5 text-gray-900">ADMINISTRACIÓN DE USUARIOS</h1>
				<div class="flex justify-between px-20 py-5">
					<img src="<?=base_url('assets/images/usuarios.png')?>" alt="" class="w-32 h-32">
					<div class="w-3/4">
						<p class="text-xl text-bold mb-5">Bienvenido a la sección para insertar, modificar o eliminar usuarios, debes ingresar un nombre, fecha de nacimiento, correo electrónico, teléfono y escoger la orientación sexual del usuario.</p>
						<span class="material-icons text-red-500 border-2 border-red-500 rounded-full align-text-bottom mr-1">priority_high</span> <span class="text-xl text-bold">Recuerda que la edad del usuario debe ser mayor a 18 años</span>
					</div>
				</div>
				<h2 class="bg-blue-500 text-white text-2xl text-center m-5 p-2 rounded-md">INSERTAR USUARIO</h2>
				
				<form class="w-full max-w-2xl mx-auto" id="appUsuarios">
					<div class="flex flex-wrap -mx-3 mb-6">
						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" @submit.prevent="verificarUSuario">
								Nombre
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="text" v-model.trim="nombreUsuario">
						</div>

						<div class="w-full md:w-1/2 px-3">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
								Fecha de nacimiento
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="date" value="1990-07-22"
       				min="1970-01-01" max="2010-12-31" v-model.date="fechaNacimiento">
						</div>
					</div>
					<div class="flex flex-wrap -mx-3 mb-6">
						<div class="w-full px-3">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
								Correo electrónico
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" v-model.trim="correoElectronico">
						</div>
					</div>
					<div class="flex flex-wrap -mx-3 mb-2">
						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
								Teléfono
							</label>
							<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" v-model.number="telefono">
						</div>
						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
								Orientación sexual
							</label>
							<div class="relative">
								<select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" v-model="orientacionSexual">
									<option disabled="">&bemptyv; Seleccionar</option>
									<option>Heterosexual</option>
									<option>Homosexual</option>
								</select>
								<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
									<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
								</div>
							</div>
						</div>
						<div class="flex justify-center w-full mt-16 mb-5">
							<button class="bg-blue-400 text-white text-xs mx-8 py-2 px-5 rounded shadow focus:outline-none hover:bg-blue-600">GUARDAR<span class="material-icons right ml-4 text-xl align-middle">save</span></button>
							<button type="reset" class="bg-green-400 text-white text-xs mx-8 py-2 px-5 rounded shadow focus:outline-none hover:bg-green-600">RESET<span class="material-icons right ml-4 text-xl align-middle">cleaning_services</span></button>
						</div>
					</div>
				</form>
				<div class="m-5">
					<table class="table-auto">
						<thead class="bg-green-200 font-light">
							<tr>
								<th class="border px-4 py-2 font-medium text-xs">USUARIO</th>
								<th class="border px-4 py-2 font-medium text-xs">FECHA DE NACIMIENTO</th>
								<th class="border px-4 py-2 font-medium text-xs">CORREO</th>
								<th class="border px-4 py-2 font-medium text-xs">TELÉFONO</th>
								<th class="border px-4 py-2 font-medium text-xs">ORIENTACIÓN SEXUAL</th>
								<th class="border px-4 py-2 font-medium text-xs">ACCIONES</th>
							</tr>
						</thead>
						<tbody class="text-gray-900 odd:bg-red-200">
							<?php	foreach ($usuarios as $val) { ?>
							<tr>
								<td class="border px-4 py-2"><?=$val->nombre;?></td>
								<td class="border px-4 py-2"><?=$val->fecha_nacimiento;?></td>
								<td class="border px-4 py-2"><?=$val->email;?></td>
								<td class="border px-4 py-2"><?=$val->telefono;?></td>
								<td class="border px-4 py-2"><?=$val->orientacion_sexual;?></td>
								<td class="border px-4 py-2">
									<a href="" class="mx-2">
										<span class="material-icons text-green-600" title="editar">edit</span>
									</a>
									<a href="" class="mx-2">
										<span class="material-icons text-red-600" title="eliminar">delete</span>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
    </div>
  </div>
</body>
</html>