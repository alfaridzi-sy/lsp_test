@extends('customer.layouts.master')

@section('page_title')
    Kemitraan | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('page_type')
    <div class="hero_area sub_pages">
    @endsection

    @section('content')
        <section class="fruit_section mt-5">
            <div class="container">
                <h2 class="custom_heading mb-4">Mitra Kami</h2>
                <div class="row">
                    @foreach ($partners as $partner)
                        <div class="col-md-3 col-sm-6 my-4 text-center">
                            <img src="{{ asset('storage/' . $partner->logo_url) }}" alt="{{ $partner->name }}"
                                class="img-fluid partner-logo" style="height: 150px; width: auto; object-fit: contain;">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection
