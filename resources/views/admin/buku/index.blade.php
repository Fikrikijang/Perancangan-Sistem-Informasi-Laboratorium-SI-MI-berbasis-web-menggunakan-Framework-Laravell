@extends('template_backend.home')
@section('sub-judul','Buku Praktikum Labsimi')
@section('content')

	<div class="row">
	    <div class="col-9 ">
	      <a href="{{ route('buku.create') }}" class="btn btn-info btn-sm">Tambah Data</a>
	    </div>
	</div>

	<table class="table table-striped table-hover table-sm table-bordered mt-1">
		<thead>
			<tr class="text-center">
				<th>No.</th>
				<th>Nama</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($buku as $result => $hasil)
			<tr>
                <td class="text-center">{{ $result + $buku->firstitem() }}</td>
                <td>{{ $hasil->nama_buku }}</td>
				<td>
					<a href="{{ route('buku.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">
	        {{ $buku->links() }}
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
				window.location = "/buku/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop