@extends('template')

@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun</th>
      <th scope="col">Kota</th>
      <th scope="col">Cover</th>
      <th scope="col">Stock</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th>{{ $loop->iteration }} </th>
      <td>{{ $item['judul'] }}</td>
      <td>{{ $item['penulis'] }}</td>
      <td>{{ $item['tahun'] }}</td>
      <td>{{ $item['kota'] }}</td>
      <td>{{ $item['cover'] }}</td>
      <td>{{ $item['stock'] }}</td>
      {{-- <td> <a href="{{ url('buku/' . $item->id . '/edit')}}" class="btn btn-warning">Edit</a> --}}
      {{-- <form action="{{ route('buku.destroy', $item->id) }}" method="post"> --}}
      @csrf
      {{-- @method('delete')
      <button type="submit" class="btn btn-secondary">Hapus</a></button>
      </form></td> --}}
    </tr>
    @endforeach
  </tbody>
  {{-- <div>
  {{ $data-> links() }}
  </div> --}}
</table>
@endsection