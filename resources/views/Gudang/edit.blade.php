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
							<i class="fa fa-book"></i> 	   Ubah Gudang
						</div>
						<div>
							
						</div>
				</div>
				<div class="panel-body">
					<div class="form">
						 <form method="POST" action="{{url('gudang/update')}}">
				        	@csrf()
					      <div class="modal-body">
				        		@foreach($gudangs as $gudang)
				        		<input type="hidden" value="{{$gudang->id}}" name="id_gudang"></input>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
					            <input class="form-control" name="nama" value="{{$gudang->nama}}"></input>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Alamat:</label>
					            <textarea class="form-control" name="alamat">{{$gudang->alamat}}</textarea>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
					            <input class="form-control" name="kapasitas" type="number" value="{{$gudang->kapasitas}}"></input>
					          </div>
					          @endforeach
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Ubah</button>
					      </div>
				       </form>
					</div>			
				</div>
			</div>
		</section>
	</div>			
</div>

@endsection