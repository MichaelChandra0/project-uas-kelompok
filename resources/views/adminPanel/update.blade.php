<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="{{ asset('css/adminPanel.css')}}">
</head>
<body>
  <p>INI VIEW UPDATE</p>
  <form id="formToko" method="POST" action="{{ route('catalog.update', $menus->id)}}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    {{$menus->id}}
      <h2>Edit Data</h2>
    <div class="form-group">
      <label for="gambarMakanan">Upload Gambar Makanan</label>
      <input type="file" id="gambarMakanan" name="gambarMakanan">
    </div>
    <div class="form-group">
      <label for="namaMakanan">Nama Makanan</label>
      <input type="text" id="namaMakanan" name="namaMakanan" required>
    </div>
    <div class="form-group">
      <label for="hargaMakanan">Harga Makanan</label>
      <input type="number" id="hargaMakanan" name="hargaMakanan" required>
    </div>
    <br>
    <button>Submit</button>
  </form>
</body>
</html>