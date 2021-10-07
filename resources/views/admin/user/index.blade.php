@extends('template_backend.home')
@section('sub-judul','User')
@section('content')

	<a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambah User</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama User</th>
				<th>Email</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($user as $result => $hasil)
			<tr>
				<td>{{ $result + $user->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>{{ $hasil->email }}</td>
				<td>
					@if($hasil->tipe)
						<span class="badge badge-info">Administrator</span>
						@else
						<span class="badge badge-warning">Staff</span>
					@endif

				</td>
				<td>
					{{-- <form action="{{ route('user.destroy', $hasil->id )}}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('user.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form> --}}
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Delete</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	{{ $user->links() }}

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
				window.location = "/user/"+hapus_id+"/destroy";
				}
			});
		});
	</script>	
@stop