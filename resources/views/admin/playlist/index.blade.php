@extends('template_backend.home')
@section('sub-judul','Playlist')
@section('content')

	<a href="{{ route('playlist.create') }}" class="btn btn-info btn-sm">Tambah Playlist</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Pertemuan</th>
				<th>Judul</th>
				<th>Kelas</th>
				<th>Praktikum</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($playlist as $result => $hasil)
			<tr>
				<td>{{ $result + $playlist->firstitem() }}</td>
				<td>{{ $hasil->pertemuan }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>{{ $hasil->kelas->judul }}</td>
				<td>{{ $hasil->praktikum->name }}</td>
				<td>
					<a href="{{ route('playlist.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $playlist->links() }}

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
				window.location = "/ilabsimi/playlist/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop