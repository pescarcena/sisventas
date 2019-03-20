@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<h3>Editar Proveedor: {{$persona->nombre}}</h3>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>
					{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
		@endif
		</div>
</div>
{!! Form::model($persona,['method'=>'PATCH','route'=>['proveedor.update',$persona->idpersona]]) !!}
{{Form::token()}}
<div class="row">	
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
		</div>
</div>

<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="nombre">Dirección</label>
			<input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control" placeholder="Dirección...">
		</div>
</div>


<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label>Documentos</label>
			<select name="tipo_documento" class="form-control">
			@if($persona->tipo_documento=='DNI')
				<option value="Cc" selected> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
			@elseif($persona->tipo_documento=='NIT')
			   <option value="Cc"> Cedula </option>
				<option value="NIT" selected> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
				@elseif($persona->tipo_documento=='PASSP')
			   <option value="Cc"> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP" selected> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
				@else($persona->tipo_documento=='Registmerca')
			   <option value="Cc"> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca" selected> Registro Mercantil </option>
			@endif
			</select>
		</div>
</div>

<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="num_documento">Numero de documento</label>
			<input type="text" name="num_documento" value="{{$persona->num_documento}}" class="form-control" placeholder="Numero de identificacion...">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="telefono">Telefono</label>
			<input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control" placeholder="telefono...">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" value="{{$persona->email}}" class="form-control" placeholder="email...">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="notas">Notas</label>
			<input type="notas" name="notas" value="{{$persona->Notas}}" class="form-control" placeholder="Notas...">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		 <a class="btn btn-default" href="/cotizaciones" role="button">Cancelar</a>
	</div>
</div>
</div>
{!!Form::close()!!}
@endsection