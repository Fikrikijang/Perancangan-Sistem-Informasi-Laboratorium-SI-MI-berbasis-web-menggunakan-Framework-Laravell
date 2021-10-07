@extends('template_backend.home')
@section('sub-judul','Berita dan Kegiatan')
@section('content')

	<a href="{{ route('post.create') }}" class="btn btn-info btn-sm">Tambah Berita</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Berita</th>
				<th>Kategori</th>
				<th>Daftar Tags</th>
				<th>Creator</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($post as $result => $hasil)
			<tr>
				<td>{{ $result + $post->firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>{{ $hasil->category->name }}</td>
				<td>@foreach($hasil->tags as $tag)
					<ul>
						<h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
					</ul>
					@endforeach		
				</td>
				<td>{{$hasil->users->name }}</td>
				<td><img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:100px"></td>
				<td>
					<a href="{{ route('post.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $post->links() }}

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
				window.location = "/ilabsimi/post/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop