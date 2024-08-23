@extends('admin.layouts.master')

@section('page_title')
    UMKM | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">UMKM</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data UMKM </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Tambah Data UMKM</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            @if(session('error'))
                <div class="alert alert-danger mx-auto text-center">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{route('user.store')}}" method="POST">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama UMKM') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Telepon') }}</label>
                    <div class="col-md-6">
                        <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="62" required autocomplete="contact" autofocus>
                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('No. Rekening') }}</label>
                    <div class="col-md-6">
                        <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ old('account_number') }}" required autocomplete="account_number" autofocus>
                        @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="account_bank" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Bank') }}</label>
                    <div class="col-md-6">
                        <select class="form-control" name="account_bank" id="account_bank" required>
                            <option value="" selected disabled hidden>Pilih Bank</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                            <option value="Bank Rakyat Indonesia">Bank Rakyat Indonesia</option>
                            <option value="BNI (Bank Negara Indonesia)">BNI (Bank Negara Indonesia)</option>
                            <option value="Bank Central Asia">Bank Central Asia</option>
                            <option value="BSI (Bank Syariah Indonesia)">BSI (Bank Syariah Indonesia)</option>
                            <option value="CIMB Niaga & CIMB Niaga Syariah">CIMB Niaga & CIMB Niaga Syariah</option>
                            <option value="Muamalat">Muamalat</option>
                            <option value="Bank Danamon & Danamon Syariah">Bank Danamon & Danamon Syariah</option>
                            <option value="Bank Permata & Permata Syariah">Bank Permata & Permata Syariah</option>
                            <option value="Maybank Indonesia">Maybank Indonesia</option>
                            <option value="Panin Bank">Panin Bank</option>
                            <option value="TMRW/UOB">TMRW/UOB</option>
                            <option value="OCBC NISP">OCBC NISP</option>
                            <option value="Citibank">Citibank</option>
                            <option value="Bank Artha Graha Internasional">Bank Artha Graha Internasional</option>
                            <option value="Bank of Tokyo Mitsubishi UFJ">Bank of Tokyo Mitsubishi UFJ</option>
                            <option value="DBS Indonesia">DBS Indonesia</option>
                            <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                            <option value="Bank Capital Indonesia">Bank Capital Indonesia</option>
                            <option value="ANZ Indonesia">ANZ Indonesia</option>
                            <option value="Bank of China (Hong Kong) Limited">Bank of China (Hong Kong) Limited</option>
                            <option value="Bank Bumi Arta">Bank Bumi Arta</option>
                            <option value="HSBC Indonesia">HSBC Indonesia</option>
                            <option value="Rabobank International Indonesia">Rabobank International Indonesia</option>
                            <option value="Bank Mayapada">Bank Mayapada</option>
                            <option value="BJB">BJB</option>
                            <option value="Bank DKI Jakarta">Bank DKI Jakarta</option>
                            <option value="BPD DIY">BPD DIY</option>
                            <option value="Bank Jateng">Bank Jateng</option>
                            <option value="Bank Jatim">Bank Jatim</option>
                            <option value="Bank Jambi">Bank Jambi</option>
                            <option value="Bank Sumut">Bank Sumut</option>
                            <option value="Bank Sumbar (Bank Nagari)">Bank Sumbar (Bank Nagari)</option>
                            <option value="Bank Riau Kepri">Bank Riau Kepri</option>
                            <option value="Bank Sumsel Babel">Bank Sumsel Babel</option>
                            <option value="Bank Lampung">Bank Lampung</option>
                            <option value="Bank Kalsel">Bank Kalsel</option>
                            <option value="Bank Kalbar">Bank Kalbar</option>
                            <option value="Bank Kaltim">Bank Kaltim</option>
                            <option value="Bank Kalteng">Bank Kalteng</option>
                            <option value="Bank Sulselbar">Bank Sulselbar</option>
                            <option value="Bank SulutGo">Bank SulutGo</option>
                            <option value="Bank NTB Syariah">Bank NTB Syariah</option>
                            <option value="BPD Bali">BPD Bali</option>
                            <option value="Bank NTT">Bank NTT</option>
                            <option value="Bank Maluku">Bank Maluku</option>
                            <option value="Bank Papua">Bank Papua</option>
                            <option value="Bank Bengkulu">Bank Bengkulu</option>
                            <option value="Bank Sulteng">Bank Sulteng</option>
                            <option value="Bank Sultra">Bank Sultra</option>
                            <option value="Bank Nusantara Parahyangan">Bank Nusantara Parahyangan</option>
                            <option value="Bank of India Indonesia">Bank of India Indonesia</option>
                            <option value="Bank Mestika Dharma">Bank Mestika Dharma</option>
                            <option value="Bank Sinarmas">Bank Sinarmas</option>
                            <option value="Bank Maspion Indonesia">Bank Maspion Indonesia</option>
                            <option value="Bank Ganesha">Bank Ganesha</option>
                            <option value="ICBC Indonesia">ICBC Indonesia</option>
                            <option value="QNB Indonesia">QNB Indonesia</option>
                            <option value="BTN/BTN Syariah">BTN/BTN Syariah</option>
                            <option value="Bank Woori Saudara">Bank Woori Saudara</option>
                            <option value="BTPN">BTPN</option>
                            <option value="Bank BTPN Syariah">Bank BTPN Syariah</option>
                            <option value="BJB Syariah">BJB Syariah</option>
                            <option value="Bank Mega">Bank Mega</option>
                            <option value="Wokee/Bukopin">Wokee/Bukopin</option>
                            <option value="Bank Bukopin Syariah">Bank Bukopin Syariah</option>
                            <option value="Bank Jasa Jakarta">Bank Jasa Jakarta</option>
                            <option value="LINE Bank/KEB Hana">LINE Bank/KEB Hana</option>
                            <option value="Motion/MNC Bank">Motion/MNC Bank</option>
                            <option value="BRI Agroniaga">BRI Agroniaga</option>
                            <option value="SBI Indonesia">SBI Indonesia</option>
                            <option value="Blu/BCA Digital">Blu/BCA Digital</option>
                            <option value="Nobu (Nationalnobu) Bank">Nobu (Nationalnobu) Bank</option>
                            <option value="Bank Mega Syariah">Bank Mega Syariah</option>
                            <option value="Bank Ina Perdana">Bank Ina Perdana</option>
                            <option value="Bank Sahabat Sampoerna">Bank Sahabat Sampoerna</option>
                            <option value="Seabank/Bank BKE">Seabank/Bank BKE</option>
                            <option value="BCA (Bank Central Asia) Syariah">BCA (Bank Central Asia) Syariah</option>
                            <option value="Jago/Artos">Jago/Artos</option>
                            <option value="Bank Mayora Indonesia">Bank Mayora Indonesia</option>
                            <option value="Bank Index Selindo">Bank Index Selindo</option>
                            <option value="Bank Victoria International">Bank Victoria International</option>
                            <option value="Bank IBK Indonesia">Bank IBK Indonesia</option>
                            <option value="CTBC (Chinatrust) Indonesia">CTBC (Chinatrust) Indonesia</option>
                            <option value="Commonwealth Bank">Commonwealth Bank</option>
                            <option value="Bank Victoria Syariah">Bank Victoria Syariah</option>
                            <option value="BPD Banten">BPD Banten</option>
                            <option value="Bank Mutiara">Bank Mutiara</option>
                            <option value="Panin Dubai Syariah">Panin Dubai Syariah</option>
                            <option value="Bank Aceh Syariah">Bank Aceh Syariah</option>
                            <option value="Bank Antardaerah">Bank Antardaerah</option>
                            <option value="Bank China Construction Bank Indonesia">Bank China Construction Bank Indonesia</option>
                            <option value="Bank CNB (Centratama Nasional Bank)">Bank CNB (Centratama Nasional Bank)</option>
                            <option value="Bank Dinar Indonesia">Bank Dinar Indonesia</option>
                            <option value="BPR EKA (Bank Eka)">BPR EKA (Bank Eka)</option>
                            <option value="Allo Bank/Bank Harda Internasional">Allo Bank/Bank Harda Internasional</option>
                            <option value="BANK MANTAP (Mandiri Taspen)">BANK MANTAP (Mandiri Taspen)</option>
                            <option value="Bank Multi Arta Sentosa (Bank MAS)">Bank Multi Arta Sentosa (Bank MAS)</option>
                            <option value="Bank Prima Master">Bank Prima Master</option>
                            <option value="Bank Shinhan Indonesia">Bank Shinhan Indonesia</option>
                            <option value="Neo Commerce/Yudha Bhakti">Neo Commerce/Yudha Bhakti</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-12 text-center">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Tambah') }}
                        </button>
                        <button type="reset" class="btn btn-light">
                            {{ __('Reset') }}
                        </button>
                        <a href="{!! url('user') !!}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
