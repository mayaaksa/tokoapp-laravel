<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk | TokoApp</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="container header-content">
        <div class="logo">
            Toko<span>App</span>
        </div>

    <div class="admin">
        Admin
    </div>
</div>

</header>

<main>
    <div class="container">
    <div class="form-card">

        <h2>Informasi Produk</h2>
        <p>Masukkan informasi produk di bawah ini.</p>

        <form action="{{ route('products.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="nama_produk">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="nama_produk"
                    name="nama_produk"
                    class="form-control"
                    placeholder="Masukkan nama produk"
                    value="{{ old('nama_produk') }}"
                >

                @error('nama_produk')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">

                <label for="kategori">
                    Kategori
                </label>

                <input
                    type="text"
                    id="kategori"
                    name="kategori"
                    class="form-control"
                    placeholder="Masukkan kategori"
                    value="{{ old('kategori') }}"
                >

                @error('kategori')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">

                <label for="harga">
                    Harga
                </label>

                <input
                    type="number"
                    id="harga"
                    name="harga"
                    class="form-control"
                    placeholder="Masukkan harga"
                    value="{{ old('harga') }}"
                >

                @error('harga')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">

                <label for="stok">
                    Stok
                </label>

                <input
                    type="number"
                    id="stok"
                    name="stok"
                    class="form-control"
                    placeholder="Masukkan jumlah stok"
                    value="{{ old('stok') }}"
                >

                @error('stok')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-actions">

                <a href="{{ route('products.index') }}"
                   class="btn btn-light">
                    Kembali
                </a>

                <button type="submit" class="btn btn-main">
                    Simpan Produk
                </button>

            </div>

        </form>

    </div>

</div>

</main>

</body>
</html>
