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

<h1>User Tabel</h1>

<table id="customers">
  <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">ID</th>
            <th scope="col">email</th>
            <th scope="col">No Telpon</th>
            <th scope="col">Role</th>
            <th scope="col">Dibuat</th>
  </tr>
  @php
  $no = 1;
  @endphp
  @foreach ($user as $data => $row)
  <tr>
      <td>{{$no++}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->id}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->no_telpon}}</td>
      <td>{{$row->role}}</td>
      <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
      @endforeach
  </tr>
</table>

</body> 
</html>


