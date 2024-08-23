<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="javascript:void(0);">
                {{-- <img src="{{ asset('customer/images/pemko.png') }}" alt="" /> --}}
                <img src="{{ asset('master/assets/img/pemko.png') }}" >
                <span>
                    UMKM2M Siantar Marimbun
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{ route('customer.beranda') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.productList') }}"> Produk</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.about') }}"> Tentang </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.contactList') }}">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
