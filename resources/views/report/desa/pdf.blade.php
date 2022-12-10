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

<h1>Report</h1>

<table id="customers">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Koordinator Desa</th>
    <th scope="col">Deskripsi Desa</th>
    <th scope="col">Kecamatan</th>
    <th scope="col">Koordinator Kecamatan</th>
    <th scope="col">Kelurahan</th>
    <th scope="col">Total Relawan</th>
  </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($desa as $data => $row)
        <tr>
          <th scope="row">{{$data + $desa->firstItem()}}</th>
          <td>{{$row->nama}}</td>
          <td>{{$row->deskripsi}}</td>
          <td>{{$row->Koord_kecamatans->deskripsi}}</td>
          <td>{{$row->Koord_kecamatans->nama}}</td>
          <td>{{$row->Datakelurahans->kelurahan}}</td>
          <td>{{$row->data_relawan->count()}}</td>
        </tr>
         @endforeach
</table>

</body> 
</html>


