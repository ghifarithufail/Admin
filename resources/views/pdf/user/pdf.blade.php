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

<h1>User Tabel</h1>

<table id="customers">
    <tr>
        <th scope="col">No</th>
        <th scope="col">User</th>
        <th scope="col">Role</th>
        <th scope="col">Total relawan</th>
      </tr>
    </thead>
    <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($user as $data => $row)
    <tr>
        {{-- <th scope="row">{{$data + $user->firstItem()}}</th> --}}
        <td>{{$no++}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->role}}</td>
        <td>{{$row->datarelawans->count() }}</td>
    </tr>
     @endforeach
</table>

</body> 
</html>


