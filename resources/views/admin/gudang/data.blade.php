@extends('layouts.admin')

@section('content')
<hr>
<div class="container-fluid">
  <h1 class="text-center">Gudang Data</h1>
  <hr>
  <div class="text-left">
    <a class="btn btn-primary" href="{{url('admin/gudang/process/add')}}" role="button">Add Data</a>
  </div>
  <hr>
  <div class="text-center">
    <div class="table-responsive">
      <table class="table" style="width: 100%;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Picture</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($gudang as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->kapasitas}}</td>
            <td><img src="{{$row->pic}}" class="rounded"></td>
            <td>
              <a href="{{url('admin/gudang/process/edit/'.$row->id)}}" class="nav-link">Edit</a>
            </td>
            <td>
              <a onclick="return confirm('Are you sure want to delete {{$row->name}} ? ')" href="{{url('admin/gudang/process/delete/'.$row->id)}}" class="nav-link">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
	</div>
</div>
<hr>
@endsection