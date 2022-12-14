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

<h1>Kelurahan Tabel</h1>

<table id="customers">
    <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Kelurahan</th>
        <th scope="col">Dapil</th>
        <th scope="col">TPS</th>
        <th scope="col">DPT</th>
        <th scope="col">Target</th>
        <th scope="col">Total Balad Husein</th>
      </tr>
    </thead>
    <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($kelurahan as $data => $row)
    <tr>
        <th scope="row">{{$data + $kelurahan->firstItem()}}</th>
        <td>{{$row->id}}</td>
        <td>{{$row->kelurahan}}</td>
        <td>{{$row->dapil}}</td>
        <td>{{$row->tps}}</td>
        <td>{{$row->jumlah}}</td>
        <td>{{$row->target}}</td>
        <td>{{$row->relawansData->count()}}</td>
    </tr>
     @endforeach
</table>
</body> 
</html>


