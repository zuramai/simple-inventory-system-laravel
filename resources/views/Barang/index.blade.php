@extends('layouts.app')

@section('content')

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Barang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Barang</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-book"></i> 	   Daftar Barang
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus"></i></button>
						</div>
				</div>
				<div class="panel-body">
					<div class="row">
						@if(Session::has('success_add'))
						<div class="col-12">
							<div class="alert alert-success" role="alert">
								{{ Session::get('success_add') }}
							</div>
						</div>
						@endif
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama</th>
									<th>Berat</th>
									<th>Gudang</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($barangs as $barang)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$barang->nama}}</td>
									<td>{{$barang->berat}} KG</td>
									<td>{{$barang->gudang->nama}}</td>
									<td>
										<a href="barang/edit/{{$barang->id}}"><i class="fa fa-edit"></i> </a>
										<a href="barang/delete/{{$barang->id}}"><i class="fa fa-trash"></i> </a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>			
</div>
<div class="modal fade tambah-exam" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="{{url('barang/')}}">
        	@csrf()
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nama Barang:</label>
	            <input class="form-control" name="nama"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Berat:</label>
	            <input class="form-control" type="number" name="berat"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Gudang:</label>
	            <select class="form-control" name="gudang_id">
	            	<option>Pilih salah satu..</option>
	            	@foreach($gudangs as $gudang)
	            	<option value="{{$gudang->id}}">{{$gudang->nama}}</option>
	            	@endforeach
	            </select>
	          </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
       </form>
    </div>
  </div>
</div>
@endsection