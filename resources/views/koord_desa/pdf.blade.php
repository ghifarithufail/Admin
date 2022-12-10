<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Koordinator Desa Tabel</h1>

<table id="customers">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    {{-- <th scope="col">Koordinator Kecamatan</th> --}}
    <th scope="col">Deskripsi</th>
    <th scope="col">Kelurahan</th>
    <th scope="col">Deskripsi Kecamatan</th>
    <th scope="col">Dapil</th>
    <th scope="col">Waktu</th>
  </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($Koord_desa as $data => $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nama}}</td>
            {{-- <td>{{$row->Koord_kecamatans->nama}}</td> --}}
            <td>{{$row->deskripsi}}</td>
            <td>{{$row->Datakelurahans->kelurahan}}</td>
            <td>{{$row->Koord_kecamatans->deskripsi}}</td>
            <td>{{$row->dapil}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
        </tr>
         @endforeach
</table>

</body> 
</html>


