<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="{{ asset('css/admin-style/updatePanel.css')}}">
</head>
<body class="body1">  
  <form id="formToko" method="POST" action="{{ route('catalog.update', $menus->id)}}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
      <h2>Edit Data</h2>
      <br>
    <div class="form-group">
      <label for="gambarMakanan">Upload Gambar Makanan</label>
      <input type="file" id="gambarMakanan" name="gambarMakanan">
    </div>
    <br>
    <div class="form-group">
      <label for="namaMakanan">Nama Makanan</label>
      <input type="text" id="namaMakanan" name="namaMakanan" required>
    </div>
    <br>
    <div class="form-group">
      <label for="hargaMakanan">Harga Makanan</label>
      <input type="number" id="hargaMakanan" name="hargaMakanan" required>
    </div>
    <br>
    <button type="submit">Submit</button  >
  </form>
</body>
</html>