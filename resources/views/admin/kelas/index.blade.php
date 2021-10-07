@extends('template_backend.home')
@section('sub-judul','Daftar Kelas Praktikum Labsimi')
@section('content')

    @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
	@endif

	<a href="{{ route('kelas.create') }}" class="btn btn-info btn-sm">Tambah Kelas</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul</th>
				<th>Gambar</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kelas as $result => $hasil)
			<tr>
				<td>{{ $result + $kelas->firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>
					<img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:50px">
				</td>
				<td>@foreach($hasil->kategoris as $kategori)
					<ul>
						<h6><span class="badge badge-info">{{ $kategori->name }}</span></h6>
					</ul>
					@endforeach		
				</td>
				<td>
					<a href="{{ route('kelas.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $kelas->links() }}

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
				window.location = "/kelas/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop