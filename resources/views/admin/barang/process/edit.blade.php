@extends('layouts.admin')

@section('content')
<hr>
<div class="container-fluid">
	<div class="text-center">
		<form method="POST" action="{{url('admin/barang/process/update/'.$barang->id)}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label style="float: left;">Alamat Gudang</label>
				<select name="gudangs_id" class="form-control">
					<option value="{{$barang->gudang->id}}">{{$barang->gudang->alamat}}</option>
					@foreach($gudang as $row)
					<option value="{{$row->id}}">{{$row->alamat}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label style="float: left;">Nama</label>
				<input type="text" name="nama" class="form-control" value="{{$barang->nama}}" required="">
			</div>
			<div class="form-group">
				<label style="float: left;">Berat</label>
				<input type="text" name="berat" class="form-control" value="{{$barang->berat}}" required="">
			</div>
			<input type="submit" name="edit" value="Edit" class="btn btn-primary btn-lg btn-block">
		</form>
	</div>
</div>
<hr>
@endsection