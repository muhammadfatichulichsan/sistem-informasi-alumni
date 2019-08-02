
<!DOCTYPE html>

<html>

<head>

	<title>Data Alumni</title>
  <style type="text/css">
    table { 
      width: 100%; 
      border-collapse: collapse; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
      background: #eee; 
    }
    th { 
      background: #333; 
      color: white; 
      font-weight: bold;
      text-align: center; 
    }
    td, th { 
      padding: 6px; 
      border: 1px solid #ccc; 
      text-align: center; 
    }
  </style>
</head>

<body>


<table border="1px solid">
		<thead>
				<tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NISN</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jurusan</th>
                  <th>Status Nikah</th>
                  <th>Status Kerja</th>
                  <th>Tahun Masuk</th>
                  <th>Tahun Keluar</th>
				</tr>
		</thead>
		
                <tbody>
                  <?php foreach ($user as $data): ?>
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->nisn }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->no_tlp }}</td>
                      <td>{{ $data->nama_jurusan }}</td>
                      <td>{{ $data->status_nikah }}</td>
                      <td>{{ $data->status_kerja }}</td>
                      <td>{{ $data->tahun_masuk }}</td>
                      <td>{{ $data->tahun_keluar }}</td>
                    </tr>
                  <?php endforeach ?>
                </tbody>

</table>



</body>

</html>