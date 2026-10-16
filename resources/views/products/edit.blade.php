<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk | TokoApp</title>
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

        <h2>Edit Informasi</h2>
        <p>Perbarui data produk yang dipilih.</p>

        <form action="{{ route('products.update', $product->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="nama_produk">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="nama_produk"
                    name="nama_produk"
                    class="form-control"
                    value="{{ old('nama_produk', $product->nama_produk) }}"
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
                    value="{{ old('kategori', $product->kategori) }}"
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
                    value="{{ old('harga', $product->harga) }}"
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
                    value="{{ old('stok', $product->stok) }}"
                >

                @error('stok')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-actions">

                <a href="{{ route('products.index') }}"
                   class="btn btn-light">
                    Batal
                </a>

                <button type="submit" class="btn btn-main">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

</main>

</body>
</html>
