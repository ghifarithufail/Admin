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

<h1>Raihan Suara Tabel</h1>

<table id="customers">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kelurahan</th>
        <th scope="col">Dapil</th>
        <th scope="col">TPS</th>
        <th scope="col">DPT</th>
        <th scope="col">Target</th>
        <th scope="col">jumlah relawan</th>
        <th scope="col">JML Suara</th>
        <th scope="col">Pembuat</th>
        <th scope="col">Waktu</th>
        {{-- <th scope="col">Aksi</th> --}}
    </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($raihan_suara as $data => $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->kelurahans->kelurahan}}</td>
            <td>{{$row->kelurahans->dapil}}</td>
            <td>{{$row->kelurahans->tps}}</td>
            <td>{{$row->kelurahans->jumlah}}</td>
            <td>{{$row->kelurahans->target}}</td>
            <td>{{$row->datarelawans->count()}}</td>
            <td>{{$row->jumlah_suara}}</td>
            <td>{{$row->user->name}}</td>
            <td>{{$row->created_at->format ('D d-M-Y H:i:s')}}</td>
        </tr>
         @endforeach
</table>

</body> 
</html>


