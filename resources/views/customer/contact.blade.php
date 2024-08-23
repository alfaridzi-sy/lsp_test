@extends('customer.layouts.master')

@section('page_title')
    Hubungi Kami | UMKM Be Digital Sidamanik
@endsection

@section('page_type')
    <div class="hero_area sub_pages">
@endsection

@section('content')
    <section class="contact_section layout_padding">
        <div class="container">
        <h2 class="font-weight-bold">
            Hubungi Kami
        </h2>
        <div class="row">
            <div class="col-md-8 mr-auto">
            <form action="">
                <div class="contact_form-container">
                <div>
                    <div>
                    <input type="text" placeholder="Nama">
                    </div>
                    <div>
                    <input type="text" placeholder="Nomor Handphone">
                    </div>
                    <div>
                    <input type="email" placeholder="Email">
                    </div>

                    <div class="mt-5">
                    <input type="text" placeholder="Pesan">
                    </div>
                    <div class="mt-5">
                    <button type="submit">
                        Kirim
                    </button>
                    </div>
                </div>

                </div>

            </form>
            </div>
        </div>
        </div>
    </section>
@endsection
