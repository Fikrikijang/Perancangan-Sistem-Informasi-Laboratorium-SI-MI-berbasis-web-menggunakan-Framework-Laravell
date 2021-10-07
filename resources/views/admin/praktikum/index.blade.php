@extends('template_backend.home')
@section('sub-judul','Praktikum Laboratorium')
@section('content')

	<a href="{{ route('praktikum.create') }}" class="btn btn-info btn-sm">Tambah Praktikum</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Praktikum</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($praktikum as $result => $hasil)
			<tr>
				<td>{{ $result + $praktikum->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>
					<a href="{{ route('praktikum.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $praktikum->links() }}

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
				window.location = "/praktikum/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop

 