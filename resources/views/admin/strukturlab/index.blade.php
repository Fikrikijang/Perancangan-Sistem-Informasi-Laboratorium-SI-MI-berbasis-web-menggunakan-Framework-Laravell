@extends('template_backend.home')
@section('sub-judul','Struktur Labsimi')
@section('content')

	<div class="row">
	    <div class="col-9 ">
	      <a href="{{ route('strukturlab.create') }}" class="btn btn-info btn-sm">Tambah Data</a>
	    </div>
	</div>

	<table class="table table-striped table-hover table-sm table-bordered mt-1">
		<thead>
			<tr class="text-center">
				<th>No.</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Foto</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($strukturlab as $result => $hasil)
			<tr>
                <td>{{ $result + $strukturlab->firstitem() }}</td>
				<td>{{ $hasil->nama }}</td>
				<td>
                    @if ($hasil->jabatan==('Kepala Laboratorium SI/MI'))
                    	<h6><span class="btn btn-success">{{ $hasil->jabatan }}</span></h6>
                    @elseif ($hasil->jabatan==('Staff Administrasi Laboratorium SI/MI'))
						<h6><span class="btn btn-primary">{{ $hasil->jabatan }}</span></h6>
					@else
						<h6><span class="btn btn-danger">{{ $hasil->jabatan }}</span></h6>
                     @endif
                </td>
				<td>
					<img src="{{ asset( $hasil->gambar ) }}" class="img-fluid" style="width:50px">
				</td>
				<td>
					<a href="{{ route('strukturlab.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Hapus</a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">
	        {{ $strukturlab->links() }}
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
				window.location = "/strukturlab/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
@stop