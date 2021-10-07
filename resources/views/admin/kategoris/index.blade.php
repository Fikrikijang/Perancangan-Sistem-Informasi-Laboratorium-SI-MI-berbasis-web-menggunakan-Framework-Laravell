@extends('template_backend.home')
@section('sub-judul','Kategori - Playsit')
@section('content')

	<a href="{{ route('kategoris.create') }}" class="btn btn-info btn-sm">Tambah Kategori Playlist</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori Playlist</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kategori as $result => $hasil)
			<tr>
				<td>{{ $result + $kategori->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>
					<a href="{{ route('kategoris.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $kategori->links() }}

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
				window.location = "/kategoris/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop