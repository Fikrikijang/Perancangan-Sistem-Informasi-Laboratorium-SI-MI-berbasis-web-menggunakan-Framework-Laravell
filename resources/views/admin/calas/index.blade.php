@extends('template_backend.home')
@section('sub-judul','Data Calon Asisten LAB')
@section('content')

	{{-- <div class="row">
	    <div class="col-9 ">
	      <a href="{{ route('daftar.create') }}" class="btn btn-info btn-sm">Tambah daftar</a>
	    </div>
	      <form>
	        <div class="input-group mt-1">
	          <input type="text" name="cari" class="form-control" placeholder="Search">
	          <div class="input-group-btn">
	            <button type="submit" class="btn btn-info ml-1 mt-1"><i class="fas fa-search"></i></button>
	          </div>
	        </div>
	      </form>
	</div> --}}

	<table class="table table-striped table-hover table-sm table-bordered mt-1">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Foto</th>
				<th>Nomor HP</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($daftar as $result => $hasil)
			<tr>
				<td>{{ $hasil->npm }}</td>
				<td>{{ $hasil->nama }}</td>
				<td>
					<img src="{{ asset( $hasil->foto ) }}" class="img-fluid" style="width:50px">
				</td>
				<td>{{ $hasil->telp }}</td>
				<td>
					<a href="{{ route('calas.show', $hasil->id ) }}" class="btn btn-success btn-sm">Detail</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">
	        {{ $daftar->onEachSide(1)->links() }}
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
				window.location = "/calas/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop