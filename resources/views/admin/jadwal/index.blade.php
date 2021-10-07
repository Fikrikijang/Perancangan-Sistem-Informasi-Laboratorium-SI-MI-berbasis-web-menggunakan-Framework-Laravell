@extends('template_backend.home')
@section('sub-judul','Jadwal Praktikum')
@section('content')

<div class="row">
	<div class="col-9 ">
		<a href="{{ route('jadwal.create') }}" class="btn btn-info btn-sm">Tambah Jadwal</a>
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

<div class="card">
	<div class="row">
	  <div class="col">
		<div class="card">
			<div class="card-header">
			  <h6>TABEL JADWAL PRAKTIKUM LAB NCOMPUTING</h6>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover table-sm table-bordered mt-3">
					<thead>
						<tr>
							<th>Hari</th>
							<th>Kelas</th>
							<th>Shift</th>
							<th>Ruang</th>
							<th>Praktikum</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($jadwalnc as $result => $hasil)
							<tr>
								<td>{{ $hasil->hari_pr }}</td>
								<td>{{ $hasil->kelas_pr }}</td>
								<td>{{ $hasil->jam_pr }}</td>
								<td>{{ $hasil->ruang_pr }}</td>
								<td>{{ $hasil->praktikum->name }}</td>
								<td>
								<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				
				<div class="text-right">
					<nav class="d-inline-block">
						{{ $jadwalnc->onEachSide(1)->links() }}
					</nav>
				</div>
			</div>
		</div>
	  </div>
	  <div class="col">
		<div class="card">
			<div class="card-header">
				<h6>TABEL JADWAL PRAKTIKUM LAB PC</h6>
			</div>
			<div class="card-body">
				<table class="table table-striped table-hover table-sm table-bordered mt-3">
					<thead>
						<tr>
							<th>Hari</th>
							<th>Kelas</th>
							<th>Shift</th>
							<th>Ruang</th>
							<th>Praktikum</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($jadwalpc as $result => $hasil)
							<tr>
								<td>{{ $hasil->hari_pr }}</td>
								<td>{{ $hasil->kelas_pr }}</td>
								<td>{{ $hasil->jam_pr }}</td>
								<td>{{ $hasil->ruang_pr }}</td>
								<td>{{ $hasil->praktikum->name }}</td>
								<td>
								<a href="#" class="btn btn-danger btn-sm delete" hapus-id="{{$hasil->id}}">Delete</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-right">
					<nav class="d-inline-block">
						{{ $jadwalpc->onEachSide(1)->links() }}
					</nav>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>





@endsection

@section('footer')
	<script>
		$('.delete').click(function(){
		var hapus_id = $(this).attr('hapus-id');
			swal({
				title: "Yakin ingin menghapus ?",
				text: "Data "+hapus_id+" yang di hapus tidak dapat dikembalikan kembali !",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				console.log(willDelete);
				if (willDelete) {
				window.location = "/ilabsimi/jadwal/"+hapus_id+"/destroy";

				}
			});
		});
	</script>	
	
@stop