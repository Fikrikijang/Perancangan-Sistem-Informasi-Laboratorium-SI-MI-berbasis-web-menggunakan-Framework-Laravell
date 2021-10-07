@extends('template_backend.home')
@section('sub-judul','Data Asisten Labsimi')
@section('content')

	<div class="row">
	    <div class="col-9 ">
	      <a href="{{ route('asisten.create') }}" class="btn btn-info btn-sm">Tambah Asisten</a>
	    </div>
	    <!-- <div class="card-header-form"> -->
	      <form>
	        <div class="input-group mt-1">
	          <input type="text" name="cari" class="form-control" placeholder="Search">
	          <div class="input-group-btn">
	            <button type="submit" class="btn btn-info ml-1 mt-1"><i class="fas fa-search"></i></button>
	          </div>
	        </div>
	      </form>
	    <!-- </div> -->
	</div>

	<table class="table table-striped table-hover table-sm table-bordered mt-1">
		<thead>
			<tr>
				<th>NPM</th>
              	<th>Nama</th>
              	<th>Foto</th>
              	<th>Status</th>
              	<th>Akun</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		
			@foreach ($penyakit as $result => $hasil)
			<tr>
				<td>{{ $hasil->npm }}</td>
				<td>{{ $hasil->nama }}</td>
				<td>
					<img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:50px">
				</td>
				<td>
					<ul>
						@if($hasil->status == '1')
		                  <h6><span class="btn btn-success">Aktif</span></h6>
		                @else
		                  <h6><span class="btn btn-danger">Tidak Aktif</span></h6>
		                @endif
					</ul>
				</td>
				<td>
					<ul>
						@if($hasil->akun == '1')
		                  <h6><span class="btn btn-info">Asisten Laboratorium</span></h6>
		                @else
		                  <h6><span class="btn btn-primary">Staf Laboratorium</span></h6>
		                @endif
					</ul>
				</td>
				<td>
					<a href="{{ route('asisten.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">
	        {{ $asisten->links() }}
	    </nav>
	</div>
	
@endsection
@section('footer')
	<script>
		$('.delete').click(function(){
		var hapus_id = $(this).attr('hapus-id');
			swal({
				title: "Yakin ingin menghapus ?",
				text: "Data yang di hapus tidak dapat dikembalikan kembali !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
				if (willDelete) {
				window.location = "/asisten/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop