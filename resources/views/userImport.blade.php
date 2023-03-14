@extends('kurikulum.template.main')

@section('content')
 
	<div class="container">
		<center>
			<h4>Data User</h4>
		</center>
 
		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/data_user_import" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							@csrf
 
							
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
 
		
		
		<table class='table table-bordered mt-3'>
			<thead>
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($user as $s)
				<tr>
					<td>{{ $s->username }}</td>
					<td>{{ $s->password }}</td>
					<td>{{ $s->level }}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
 

	@endsection