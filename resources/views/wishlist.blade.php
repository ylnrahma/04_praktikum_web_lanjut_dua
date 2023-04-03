<<<<<<< HEAD
@extends('layouts.app2')

@section('content')

=======
>>>>>>> 14a8b56497573d756e85f4a3c211e9d87982a8db
<p>
    Wishlist Jalan - Jalan
</p>

<table border="1">
    <th>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Keterangan</td>
        <td>Harga</td>

    </th>

    @foreach($wishlist as $w)
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama_tempat}}</td>
        <td>{{$w->alamat}}</td>
        <td>{{$w->keterangan}}</td>
        <td>{{$w->harga}}</td>
    </tr>
    @endforeach
<<<<<<< HEAD
</table>

@endsection
=======
</table>
>>>>>>> 14a8b56497573d756e85f4a3c211e9d87982a8db
