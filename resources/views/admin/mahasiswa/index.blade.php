@extends('template_backend.home')
@section('sub-judul','Data Mahasiswa')
@section('content')

	<div class="row">
	    <div class="col-9 ">
	      <a href="{{ route('mahasiswa.create') }}" class="btn btn-info btn-sm">Tambah Mahasiswa</a>
	    </div>
	      <form>
	        <div class="input-group mt-1">
	          <input type="text" name="cari" class="form-control" placeholder="Search">
	          <div class="input-group-btn">
	            <button type="submit" class="btn btn-info ml-1 mt-1"><i class="fas fa-search"></i></button>
	          </div>
	        </div>
	      </form>
	</div>

	<table class="table table-striped table-hover table-sm table-bordered mt-1">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Foto</th>
				<th>Kelas</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($mahasiswa as $result => $hasil)
			<tr>
				<td>{{ $hasil->npm }}</td>
				<td>{{ $hasil->name }}</td>
				<td>
					<img src="{{ asset( $hasil->foto ) }}" class="img-fluid" style="width:50px">
				</td>
				<td>{{ $hasil->kelas }}</td>
				<td>
					<ul>
						@if($hasil->status == 'Aktif')
		                  <h6><span class="btn btn-success">{{ $hasil->status }}</span></h6>
		                @else
		                  <h6><span class="btn btn-danger">{{ $hasil->status }}</span></h6>
		                @endif
					</ul>
				</td>
				<td>
					<a href="{{ route('mahasiswa.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">
	        {{ $mahasiswa->onEachSide(1)->links() }}
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
				window.location = "/ilabsimi/mahasiswa/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop