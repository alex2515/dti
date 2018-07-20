<div class="col-md-8 col-md-offset-2">
	<div class="box box-primary ">
		<div class="box-header  with-border">
			<h3 class="box-title">Configuración General</h3><a href="{{ route('home') }}" class="badge bg-orange pull-right"><< Ver Lista</a>
		</div>
		<div class="box-body">
			{{ Form::label('note', 'Los campos con (*) son olbigatorios', ['class' => 'text-red']) }}
			<div class="form-group has-success">
				{{ Form::label('name', 'Nombre de la compañía') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'id' =>'name']) }}
			</div>
			<div class="form-group has-success">
				{{ Form::label('description', 'Descripción') }}
				{{ Form::textarea('description', null, ['class' => 'form-control', 'id' =>'description']) }}
			</div>
			<hr>
			<div class="form-group has-success col-xs-2">
				{{ Form::label('logo', 'Logo') }}
				{{ Form::text('logo', null, ['class' => 'form-control', 'id' =>'logo']) }}
			</div>
			<div class="form-group has-success col-xs-10">
				{{ Form::label('address', 'Dirección') }}
				{{ Form::text('address', null, ['class' => 'form-control', 'id' =>'address']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('phone', 'Teléfono') }}
				{{ Form::text('phone', null, ['class' => 'form-control', 'id' =>'phone']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'id' =>'email']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('twitter', 'Twitter') }}
				{{ Form::text('twitter', null, ['class' => 'form-control', 'id' =>'twitter']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('facebook', 'Facebook') }}
				{{ Form::text('facebook', null, ['class' => 'form-control', 'id' =>'facebook']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('gmail', 'Gmail') }}
				{{ Form::text('gmail', null, ['class' => 'form-control', 'id' =>'gmail']) }}
			</div>
			<div class="form-group has-success col-xs-6">
				{{ Form::label('instagram', 'Instagram') }}
				{{ Form::text('instagram', null, ['class' => 'form-control', 'id' =>'instagram']) }}
			</div>
			<hr>
			<div class="form-group has-success col-xs-12">
				{{ Form::label('url', 'URL Sistema de Vigilancia Tec.') }}
				{{ Form::text('url', null, ['class' => 'form-control', 'id' =>'url']) }}
			</div>
{{-- 			<div class="input-group has-success">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
            </div>
            <div class="form-group has-feedback">
		        <input name="email" type="email" class="form-control" placeholder="Email">
		        <span class="fa fa-facebook-square form-control-feedback"></span>
	      	</div> --}}


		</div>
		<div class="box-footer">
			<div class="form-group" style="text-align: center;">
		        <button type="reset" class="btn btn-danger"><i class="fa  fa-times-circle"></i> Cancelar</button>
		        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Guargar</button>
			</div>
		</div>
	</div>
</div>