<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | TokoApp</title>
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

    <div class="detail-card">

        <div class="detail-header">
            <h2>{{ $product->nama_produk }}</h2>
            <p>{{ $product->kategori }}</p>
        </div>

        <div class="detail-row">

            <span class="detail-label">
                ID Produk
            </span>

            <span class="detail-value">
                #{{ $product->id }}
            </span>

        </div>

        <div class="detail-row">

            <span class="detail-label">
                Nama Produk
            </span>

            <span class="detail-value">
                {{ $product->nama_produk }}
            </span>

        </div>

        <div class="detail-row">

            <span class="detail-label">
                Kategori
            </span>

            <span class="detail-value">
                {{ $product->kategori }}
            </span>

        </div>

        <div class="detail-row">

            <span class="detail-label">
                Harga
            </span>

            <span class="detail-value">
                Rp {{ number_format($product->harga, 0, ',', '.') }}
            </span>

        </div>

        <div class="detail-row">

            <span class="detail-label">
                Stok
            </span>

            <span class="detail-value">
                {{ $product->stok }} unit
            </span>

        </div>

        <div class="form-actions">

            <a href="{{ route('products.index') }}"
               class="btn btn-light">
                Kembali
            </a>

            <a href="{{ route('products.edit', $product->id) }}"
               class="btn btn-edit">
                Edit
            </a>

            <form action="{{ route('products.destroy', $product->id) }}"
                  method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-delete">
                    Hapus
                </button>

            </form>

        </div>

    </div>

</div>

</main>

</body>
</html>
