@extends('layouts.app')

@section('content')

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Gudang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Gudang</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-book"></i> 	   Daftar gudang
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
									<th>Nama Gudang</th>
									<th>Alamat</th>
									<th>Kapasitas</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($gudang as $gudangs)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$gudangs->nama}}</td>
									<td>{{$gudangs->alamat}}</td>
									<td>{{$gudangs->kapasitas}}</td>
									<td>
										<a href="gudang/edit/{{$gudangs->id}}"><i class="fa fa-edit"></i> </a>
										<a href="gudang/delete/{{$gudangs->id}}"><i class="fa fa-trash"></i> </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Add new Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="{{url('gudang')}}">
        	@csrf()
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
	            <input class="form-control" name="nama"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Alamat Gudang:</label>
	            <textarea class="form-control" name="alamat"></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
	            <input type="number" name="kapasitas" class="form-control" id="recipient-name">
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