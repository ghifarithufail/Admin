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
  color: black;
}
</style>
</head>
<body>

<h1>Koordinator Kecamatan Tabel</h1>

<table id="customers">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Desa</th>
        <th scope="col">Dapil</th>
        <th scope="col">Waktu</th>
      </tr>
    </thead>
    <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($Koord_kecamatan as $data => $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->deskripsi}}</td>
        <td>{{$row->desa}}</td>
        <td>{{$row->dapil}}</td>
        <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
    </tr>
     @endforeach
</table>

</body> 
</html>


