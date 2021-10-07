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
				<th>Kelas</th>
                <th>Pertemuan</th>
                <th>Nilai</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($mahasiswa as $result => $hasil)
			<tr>
                <td>{{ $hasil->npm }}</td>
				<td>{{ $hasil->nama }}</td>
                @foreach ($hasil->matkul as $item)
				  <td>{{ $item->pivot->kelas }}</td>
                  <td>{{ $item->pivot->pertemuan }}</td>
                  <td>{{ $item->pivot->nilai }}</td>
                @endforeach
			</tr>
			@endforeach

		</tbody>
	</table>
	<div class="text-right">
		<nav class="d-inline-block">

	    </nav>
	</div>
	
@endsection
