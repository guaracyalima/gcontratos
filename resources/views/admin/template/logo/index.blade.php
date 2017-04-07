@extends('layouts.index')
@section('conteudo')
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
			<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-cogs"></i>Logo
					</div>
					<a href="{{ route('admin.logo.create')}}" class="btn btn-success fileinput-button"><i class="glyphicon glyphicon-plus"></i><span>Alterar logo</span></a>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-scrollable">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>
									#
								</th>
								<th>
									Imagem
								</th>
								<th>
									Ação
								</th>
							</tr>
							</thead>
							<tbody>
							@foreach($logos as $logo)
							<tr>
								<td>{{ $logo->id }}</td>
								<td>
									<img src="{{asset("img/logos/$logo->logo")}}" alt="" width="100" height="100">
								</td>
								<td>
									<a href="{{ route('admin.logo.edit', ['id' => $logo->id]) }}" class="btn btn-info btn-sm">Editar</a>
									<a href="{{ route('admin.logo.destroy', ['id' => $logo->id]) }}" class="btn btn-danger btn-sm">Deletar</a>
								</td>
							</tr>
							@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>
	</div>
	@endsection