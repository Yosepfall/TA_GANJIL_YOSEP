@include('assets.header')

<!-- Search Bar and Dropdown -->
<div class="container mt-3">
    <div class="col-lg-12">
        <input type="text" id="searchKodeBuku" class="form-control" placeholder="Cari Kode Buku..." onkeyup="searchBooks()">
        <div class="dropdown-menu" id="kodeBukuDropdown">
            @foreach($buku as $b)
                <a href="{{ url('/' . $b->kode_buku) }}" class="dropdown-item kode-buku-item">
                    {{ $b->kode_buku }} - {{ $b->judul }}
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Book Cards Section -->
<div class="container">
    <div class="col-lg-12">
        <div class="card shadow mb-3">
            <div class="card-body">
                <div class="d-flex flex-wrap" id="bookList">
                    @foreach ($buku as $b)
                        <div class="p-2" style="width: 180px;">
                            <div class="card-body text-center">
                                @if ($b->data_gambar)
                                    <img src="data:image/jpeg;base64,{{ base64_encode($b->data_gambar) }}" 
                                         alt="{{ $b->nama_file }}"
                                         style="width: 100px; height: 150px; cursor: pointer;">
                                    <div class="card-title mt-2">{{ $b->judul }}</div>
                                    <a href="{{ url('buku/' . $b->kode_buku) }}">
                                @else
                                    <p>No image</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('assets.footer')
