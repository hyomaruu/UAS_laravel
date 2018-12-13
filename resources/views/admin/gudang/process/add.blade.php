@extends('layouts.admin')

@section('content')
<hr>
<div class="container-fluid">
	<div class="text-center">
		<form method="POST" action="{{url('admin/gudang/process/save')}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label style="float: left;">Alamat</label>
				<textarea class="form-control" name="alamat" required=""></textarea>
			</div>
			<div class="form-group">
				<label style="float: left;">Kapasitas</label>
				<input type="number" name="kapasitas" class="form-control" required="">
			</div>
			<div class="input-group mb-3">
			<div class="custom-file">
				<input type="file" name="pic" class="custom-file-input" required="">
				<label class="custom-file-label">Picture</label>
			</div>
			</div>
			<input type="submit" name="add" value="Add" class="btn btn-primary btn-lg btn-block">
		</form>
	</div>
</div>
<hr>
@endsection