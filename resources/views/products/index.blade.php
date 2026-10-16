<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - TokoApp</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="container header-content">
        <a href="{{ route('products.index') }}" class="logo">
            Toko<span>App</span>
        </a>

        <nav class="nav">
            <a href="{{ route('products.index') }}" class="nav-link active">Produk</a>
            <a href="{{ route('products.create') }}" class="nav-link">Tambah Produk</a>
            <span class="admin">Admin</span>
        </nav>
    </div>
</header>

<main>
    <div class="container">

        <div class="welcome">
            <div>
                <p class="eyebrow">Manajemen Produk</p>
                <h1>Produk</h1>
            </div>

            <a href="{{ route('products.create') }}" class="btn btn-main">
                + Tambah Produk
            </a>
        </div>

        <div class="stats">
            <div class="stat-card">
                <div>
                    <p>Total Produk</p>
                    <h2>{{ $products->count() }}</h2>
                </div>
                <div class="stat-icon">P</div>
            </div>

            <div class="stat-card">
                <div>
                    <p>Jenis Produk</p>
                    <h2>{{ $products->pluck('kategori')->unique()->count() }}</h2>
                </div>
                <div class="stat-icon">T</div>
            </div>

            <div class="stat-card">
                <div>
                    <p>Total Stok</p>
                    <h2>{{ $products->sum('stok') }}</h2>
                </div>
                <div class="stat-icon">S</div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div>
                    <h2>List Produk</h2>
                </div>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <span class="product-name">
                                        {{ $product->nama_produk }}
                                    </span>
                                </td>

                                <td>
                                    <span class="category">
                                        {{ $product->kategori }}
                                    </span>
                                </td>

                                <td class="price">
                                    Rp {{ number_format($product->harga, 0, ',', '.') }}
                                </td>

                                <td>
                                    <span class="stock">
                                        {{ $product->stok }}
                                    </span>
                                </td>

                                <td>
                                    <div class="actions">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-light">
                                            Detail
                                        </a>

                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-edit">
                                            Edit
                                        </a>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty">
                                    No products available.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

</body>
</html>