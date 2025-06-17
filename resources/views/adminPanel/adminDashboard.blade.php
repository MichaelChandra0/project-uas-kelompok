<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin-style/adminPanel.css')}}">
</head>
<body>
  <div class="container">
    <div class="content">
      <div class="left">
        <h1>Panel Menu</h1> 
        <p>Create Menu</p>
        <p>Edit / Delete</p>
        <a href="{{ route('tampilContact') }}">Data Contact Us</a>
    </div>

    <div class="right">
    <section>
    <h2 class="section-title">Create Menu</h2>
    
    
    
    
    <div class="categories">
      @forelse($menus as $menu)
        <div class="box" >
            <img src="{{ asset('storage/' . $menu->gambar)}}" alt="{{ $menu->gambar}}">
            <p><strong>Nama : {{$menu->nama}}</strong></p>
            <p>Kategori : {{$menu->kategori}}</p>
            <p>Harga : {{$menu->harga}}</p>
            
            <a href="{{ route('catalog.edit',$menu->id)}}">Edit</a>
            <form action="{{ route('catalog.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
          @csrf
          @method('DELETE')
          <button type="submit">Hapus</button>
          </form>
            
        </div>
        
    @empty
    <p>tidak ada data!</p>
    @endforelse
      </div>
    <div class="containerAdmin">
    <h2>Input Data Toko</h2>
    <form id="formToko" action="{{ route('catalog.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
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

      <div class="form-group">
        <label for="kategoriToko">Kategori</label>
        <select id="kategoriToko" name="kategoriToko" required>
          <option value="">-- Pilih Kategori --</option>
          <option value="Pizza">Pizza</option>
          <option value="Burger">Burger</option>
          <option value="Fried Chicken">Fried Chicken</option>
          <option value="French Fries">French Fries</option>
          <option value="Soda">Soda</option>
        </select>
      </div>
      <button type="submit">Simpan Data Toko</button>
    </form>

    <hr><br>
    <br>


  </section>


    </div>
    </div>
  </div>



</body>

<script src="{{ asset('js/dashboardAdmin.js')}}"></script>
</html>