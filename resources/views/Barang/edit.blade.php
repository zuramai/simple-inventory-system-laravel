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
						 <form method="POST" action="{{url('barang/update')}}">
				        	@csrf()
					      <div class="modal-body">
				        		@foreach($barangs as $barang)
				        		<input type="hidden" value="{{$barang->id}}" name="id_barang"></input>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
					            <input class="form-control" name="nama" value="{{$barang->nama}}"></input>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Berat:</label>
					            <input type="number" name="berat" value="{{$barang->berat}}" class="form-control">
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