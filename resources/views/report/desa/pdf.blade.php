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

<h1 class="text-center">Report Data Desa</h1>

<table id="customers">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Koordinator Desa</th>
    <th scope="col">ID</th>
    <th scope="col">Deskripsi Desa</th>
    <th scope="col">Total Balad Husein</th>
  </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($desa as $data => $row)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$row->nama}}</td>
          <td>{{$row->id}}</td>
          <td>{{$row->deskripsi}}</td>
          <td>{{$row->data_relawan->count()}}</td>
        </tr>
         @endforeach
</table>

</body> 
</html>


