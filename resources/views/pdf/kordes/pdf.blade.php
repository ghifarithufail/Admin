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
    <th scope="col">Koordinator Desa</th>
    <th scope="col">Deskripsi Desa</th>
    <th scope="col">Kelurahan</th>
    <th scope="col">Nama Relawan</th>
    <th scope="col">Balad Husein</th>
    <th scope="col">Waktu</th>
  </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($desa as $data => $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->Koord_desas->nama}}</td>
            <td>{{$row->Koord_desas->deskripsi}}</td>
            <td>{{$row->Datakelurahans->kelurahan}}</td>
            <td>{{$row->user->name}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
        </tr>
         @endforeach
</table>

</body> 
</html>


