@extends('admin.layouts.master')

@section('page_title')
UMKM | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">UMKM</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data UMKM </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-0 text-center">Edit Data UMKM</h1>
                    <hr width=50%>
                </div>
            </div>
        </div>
        <div class="card-body border-0">
            <form action="{{route('user.update',$users -> user_id)}}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama UMKM') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users -> name}}" required autocomplete="name" autofocus>
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
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$users -> address}}" required autocomplete="address" autofocus>
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
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$users -> username}}" required autocomplete="username" autofocus>
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
                        <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $users -> contact }}" required autocomplete="contact" autofocus>
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
                        <input id="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" value="{{ $users -> account_number }}" required autocomplete="account_number" autofocus>
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
                            <option value="Bank Mandiri" <?php if($users -> account_bank == "Bank Mandiri" ) echo "selected"; ?> >Bank Mandiri</option>
                            <option value="Bank Rakyat Indonesia" <?php if($users -> account_bank == "Bank Rakyat Indonesia" ) echo "selected"; ?> >Bank Rakyat Indonesia</option>
                            <option value="BNI (Bank Negara Indonesia)" <?php if($users -> account_bank == "BNI (Bank Negara Indonesia)" ) echo "selected"; ?> >BNI (Bank Negara Indonesia)</option>
                            <option value="Bank Central Asia" <?php if($users -> account_bank == "Bank Central Asia" ) echo "selected"; ?> >Bank Central Asia</option>
                            <option value="BSI (Bank Syariah Indonesia)" <?php if($users -> account_bank == "BSI (Bank Syariah Indonesia)" ) echo "selected"; ?> >BSI (Bank Syariah Indonesia)</option>
                            <option value="CIMB Niaga & CIMB Niaga Syariah" <?php if($users -> account_bank == "CIMB Niaga & CIMB Niaga Syariah" ) echo "selected"; ?> >CIMB Niaga & CIMB Niaga Syariah</option>
                            <option value="Muamalat" <?php if($users -> account_bank == "Muamalat" ) echo "selected"; ?> >Muamalat</option>
                            <option value="Bank Danamon & Danamon Syariah" <?php if($users -> account_bank == "Bank Danamon & Danamon Syariah" ) echo "selected"; ?> >Bank Danamon & Danamon Syariah</option>
                            <option value="Bank Permata & Permata Syariah" <?php if($users -> account_bank == "Bank Permata & Permata Syariah" ) echo "selected"; ?> >Bank Permata & Permata Syariah</option>
                            <option value="Maybank Indonesia" <?php if($users -> account_bank == "Maybank Indonesia" ) echo "selected"; ?> >Maybank Indonesia</option>
                            <option value="Panin Bank" <?php if($users -> account_bank == "Panin Bank" ) echo "selected"; ?> >Panin Bank</option>
                            <option value="TMRW/UOB" <?php if($users -> account_bank == "TMRW/UOB" ) echo "selected"; ?> >TMRW/UOB</option>
                            <option value="OCBC NISP" <?php if($users -> account_bank == "OCBC NISP" ) echo "selected"; ?> >OCBC NISP</option>
                            <option value="Citibank" <?php if($users -> account_bank == "Citibank" ) echo "selected"; ?> >Citibank</option>
                            <option value="Bank Artha Graha Internasional" <?php if($users -> account_bank == "Bank Artha Graha Internasional" ) echo "selected"; ?> >Bank Artha Graha Internasional</option>
                            <option value="Bank of Tokyo Mitsubishi UFJ" <?php if($users -> account_bank == "Bank of Tokyo Mitsubishi UFJ" ) echo "selected"; ?> >Bank of Tokyo Mitsubishi UFJ</option>
                            <option value="DBS Indonesia" <?php if($users -> account_bank == "DBS Indonesia" ) echo "selected"; ?> >DBS Indonesia</option>
                            <option value="Standard Chartered Bank" <?php if($users -> account_bank == "Standard Chartered Bank" ) echo "selected"; ?> >Standard Chartered Bank</option>
                            <option value="Bank Capital Indonesia" <?php if($users -> account_bank == "Bank Capital Indonesia" ) echo "selected"; ?> >Bank Capital Indonesia</option>
                            <option value="ANZ Indonesia" <?php if($users -> account_bank == "ANZ Indonesia" ) echo "selected"; ?> >ANZ Indonesia</option>
                            <option value="Bank of China (Hong Kong) Limited" <?php if($users -> account_bank == "Bank of China (Hong Kong) Limited" ) echo "selected"; ?> >Bank of China (Hong Kong) Limited</option>
                            <option value="Bank Bumi Arta" <?php if($users -> account_bank == "Bank Bumi Arta" ) echo "selected"; ?> >Bank Bumi Arta</option>
                            <option value="HSBC Indonesia" <?php if($users -> account_bank == "HSBC Indonesia" ) echo "selected"; ?> >HSBC Indonesia</option>
                            <option value="Rabobank International Indonesia" <?php if($users -> account_bank == "Rabobank International Indonesia" ) echo "selected"; ?> >Rabobank International Indonesia</option>
                            <option value="Bank Mayapada" <?php if($users -> account_bank == "Bank Mayapada" ) echo "selected"; ?> >Bank Mayapada</option>
                            <option value="BJB" <?php if($users -> account_bank == "BJB" ) echo "selected"; ?> >BJB</option>
                            <option value="Bank DKI Jakarta" <?php if($users -> account_bank == "Bank DKI Jakarta" ) echo "selected"; ?> >Bank DKI Jakarta</option>
                            <option value="BPD DIY" <?php if($users -> account_bank == "BPD DIY" ) echo "selected"; ?> >BPD DIY</option>
                            <option value="Bank Jateng" <?php if($users -> account_bank == "Bank Jateng" ) echo "selected"; ?> >Bank Jateng</option>
                            <option value="Bank Jatim" <?php if($users -> account_bank == "Bank Jatim" ) echo "selected"; ?> >Bank Jatim</option>
                            <option value="Bank Jambi" <?php if($users -> account_bank == "Bank Jambi" ) echo "selected"; ?> >Bank Jambi</option>
                            <option value="Bank Sumut" <?php if($users -> account_bank == "Bank Sumut" ) echo "selected"; ?> >Bank Sumut</option>
                            <option value="Bank Sumbar (Bank Nagari)" <?php if($users -> account_bank == "Bank Sumbar (Bank Nagari)" ) echo "selected"; ?> >Bank Sumbar (Bank Nagari)</option>
                            <option value="Bank Riau Kepri" <?php if($users -> account_bank == "Bank Riau Kepri" ) echo "selected"; ?> >Bank Riau Kepri</option>
                            <option value="Bank Sumsel Babel" <?php if($users -> account_bank == "Bank Sumsel Babel" ) echo "selected"; ?> >Bank Sumsel Babel</option>
                            <option value="Bank Lampung" <?php if($users -> account_bank == "Bank Lampung" ) echo "selected"; ?> >Bank Lampung</option>
                            <option value="Bank Kalsel" <?php if($users -> account_bank == "Bank Kalsel" ) echo "selected"; ?> >Bank Kalsel</option>
                            <option value="Bank Kalbar" <?php if($users -> account_bank == "Bank Kalbar" ) echo "selected"; ?> >Bank Kalbar</option>
                            <option value="Bank Kaltim" <?php if($users -> account_bank == "Bank Kaltim" ) echo "selected"; ?> >Bank Kaltim</option>
                            <option value="Bank Kalteng" <?php if($users -> account_bank == "Bank Kalteng" ) echo "selected"; ?> >Bank Kalteng</option>
                            <option value="Bank Sulselbar" <?php if($users -> account_bank == "Bank Sulselbar" ) echo "selected"; ?> >Bank Sulselbar</option>
                            <option value="Bank SulutGo" <?php if($users -> account_bank == "Bank SulutGo" ) echo "selected"; ?> >Bank SulutGo</option>
                            <option value="Bank NTB Syariah" <?php if($users -> account_bank == "Bank NTB Syariah" ) echo "selected"; ?> >Bank NTB Syariah</option>
                            <option value="BPD Bali" <?php if($users -> account_bank == "BPD Bali" ) echo "selected"; ?> >BPD Bali</option>
                            <option value="Bank NTT" <?php if($users -> account_bank == "Bank NTT" ) echo "selected"; ?> >Bank NTT</option>
                            <option value="Bank Maluku" <?php if($users -> account_bank == "Bank Maluku" ) echo "selected"; ?> >Bank Maluku</option>
                            <option value="Bank Papua" <?php if($users -> account_bank == "Bank Papua" ) echo "selected"; ?> >Bank Papua</option>
                            <option value="Bank Bengkulu" <?php if($users -> account_bank == "Bank Bengkulu" ) echo "selected"; ?> >Bank Bengkulu</option>
                            <option value="Bank Sulteng" <?php if($users -> account_bank == "Bank Sulteng" ) echo "selected"; ?> >Bank Sulteng</option>
                            <option value="Bank Sultra" <?php if($users -> account_bank == "Bank Sultra" ) echo "selected"; ?> >Bank Sultra</option>
                            <option value="Bank Nusantara Parahyangan" <?php if($users -> account_bank == "Bank Nusantara Parahyangan" ) echo "selected"; ?> >Bank Nusantara Parahyangan</option>
                            <option value="Bank of India Indonesia" <?php if($users -> account_bank == "Bank of India Indonesia" ) echo "selected"; ?> >Bank of India Indonesia</option>
                            <option value="Bank Mestika Dharma" <?php if($users -> account_bank == "Bank Mestika Dharma" ) echo "selected"; ?> >Bank Mestika Dharma</option>
                            <option value="Bank Sinarmas" <?php if($users -> account_bank == "Bank Sinarmas" ) echo "selected"; ?> >Bank Sinarmas</option>
                            <option value="Bank Maspion Indonesia" <?php if($users -> account_bank == "Bank Maspion Indonesia" ) echo "selected"; ?> >Bank Maspion Indonesia</option>
                            <option value="Bank Ganesha" <?php if($users -> account_bank == "Bank Ganesha" ) echo "selected"; ?> >Bank Ganesha</option>
                            <option value="ICBC Indonesia" <?php if($users -> account_bank == "ICBC Indonesia" ) echo "selected"; ?> >ICBC Indonesia</option>
                            <option value="QNB Indonesia" <?php if($users -> account_bank == "QNB Indonesia" ) echo "selected"; ?> >QNB Indonesia</option>
                            <option value="BTN/BTN Syariah" <?php if($users -> account_bank == "BTN/BTN Syariah" ) echo "selected"; ?> >BTN/BTN Syariah</option>
                            <option value="Bank Woori Saudara" <?php if($users -> account_bank == "Bank Woori Saudara" ) echo "selected"; ?> >Bank Woori Saudara</option>
                            <option value="BTPN" <?php if($users -> account_bank == "BTPN" ) echo "selected"; ?> >BTPN</option>
                            <option value="Bank BTPN Syariah" <?php if($users -> account_bank == "Bank BTPN Syariah" ) echo "selected"; ?> >Bank BTPN Syariah</option>
                            <option value="BJB Syariah" <?php if($users -> account_bank == "BJB Syariah" ) echo "selected"; ?> >BJB Syariah</option>
                            <option value="Bank Mega" <?php if($users -> account_bank == "Bank Mega" ) echo "selected"; ?> >Bank Mega</option>
                            <option value="Wokee/Bukopin" <?php if($users -> account_bank == "Wokee/Bukopin" ) echo "selected"; ?> >Wokee/Bukopin</option>
                            <option value="Bank Bukopin Syariah" <?php if($users -> account_bank == "Bank Bukopin Syariah" ) echo "selected"; ?> >Bank Bukopin Syariah</option>
                            <option value="Bank Jasa Jakarta" <?php if($users -> account_bank == "Bank Jasa Jakarta" ) echo "selected"; ?> >Bank Jasa Jakarta</option>
                            <option value="LINE Bank/KEB Hana" <?php if($users -> account_bank == "LINE Bank/KEB Hana" ) echo "selected"; ?> >LINE Bank/KEB Hana</option>
                            <option value="Motion/MNC Bank" <?php if($users -> account_bank == "Motion/MNC Bank" ) echo "selected"; ?> >Motion/MNC Bank</option>
                            <option value="BRI Agroniaga" <?php if($users -> account_bank == "BRI Agroniaga" ) echo "selected"; ?> >BRI Agroniaga</option>
                            <option value="SBI Indonesia" <?php if($users -> account_bank == "SBI Indonesia" ) echo "selected"; ?> >SBI Indonesia</option>
                            <option value="Blu/BCA Digital" <?php if($users -> account_bank == "Blu/BCA Digital" ) echo "selected"; ?> >Blu/BCA Digital</option>
                            <option value="Nobu (Nationalnobu) Bank" <?php if($users -> account_bank == "Nobu (Nationalnobu) Bank" ) echo "selected"; ?> >Nobu (Nationalnobu) Bank</option>
                            <option value="Bank Mega Syariah" <?php if($users -> account_bank == "Bank Mega Syariah" ) echo "selected"; ?> >Bank Mega Syariah</option>
                            <option value="Bank Ina Perdana" <?php if($users -> account_bank == "Bank Ina Perdana" ) echo "selected"; ?> >Bank Ina Perdana</option>
                            <option value="Bank Sahabat Sampoerna" <?php if($users -> account_bank == "Bank Sahabat Sampoerna" ) echo "selected"; ?> >Bank Sahabat Sampoerna</option>
                            <option value="Seabank/Bank BKE" <?php if($users -> account_bank == "Seabank/Bank BKE" ) echo "selected"; ?> >Seabank/Bank BKE</option>
                            <option value="BCA (Bank Central Asia) Syariah" <?php if($users -> account_bank == "BCA (Bank Central Asia) Syariah" ) echo "selected"; ?> >BCA (Bank Central Asia) Syariah</option>
                            <option value="Jago/Artos" <?php if($users -> account_bank == "Jago/Artos" ) echo "selected"; ?> >Jago/Artos</option>
                            <option value="Bank Mayora Indonesia" <?php if($users -> account_bank == "Bank Mayora Indonesia" ) echo "selected"; ?> >Bank Mayora Indonesia</option>
                            <option value="Bank Index Selindo" <?php if($users -> account_bank == "Bank Index Selindo" ) echo "selected"; ?> >Bank Index Selindo</option>
                            <option value="Bank Victoria International" <?php if($users -> account_bank == "Bank Victoria International" ) echo "selected"; ?> >Bank Victoria International</option>
                            <option value="Bank IBK Indonesia" <?php if($users -> account_bank == "Bank IBK Indonesia" ) echo "selected"; ?> >Bank IBK Indonesia</option>
                            <option value="CTBC (Chinatrust) Indonesia" <?php if($users -> account_bank == "CTBC (Chinatrust) Indonesia" ) echo "selected"; ?> >CTBC (Chinatrust) Indonesia</option>
                            <option value="Commonwealth Bank" <?php if($users -> account_bank == "Commonwealth Bank" ) echo "selected"; ?> >Commonwealth Bank</option>
                            <option value="Bank Victoria Syariah" <?php if($users -> account_bank == "Bank Victoria Syariah" ) echo "selected"; ?> >Bank Victoria Syariah</option>
                            <option value="BPD Banten" <?php if($users -> account_bank == "BPD Banten" ) echo "selected"; ?> >BPD Banten</option>
                            <option value="Bank Mutiara" <?php if($users -> account_bank == "Bank Mutiara" ) echo "selected"; ?> >Bank Mutiara</option>
                            <option value="Panin Dubai Syariah" <?php if($users -> account_bank == "Panin Dubai Syariah" ) echo "selected"; ?> >Panin Dubai Syariah</option>
                            <option value="Bank Aceh Syariah" <?php if($users -> account_bank == "Bank Aceh Syariah" ) echo "selected"; ?> >Bank Aceh Syariah</option>
                            <option value="Bank Antardaerah" <?php if($users -> account_bank == "Bank Antardaerah" ) echo "selected"; ?> >Bank Antardaerah</option>
                            <option value="Bank China Construction Bank Indonesia" <?php if($users -> account_bank == "Bank China Construction Bank Indonesia" ) echo "selected"; ?> >Bank China Construction Bank Indonesia</option>
                            <option value="Bank CNB (Centratama Nasional Bank)" <?php if($users -> account_bank == "Bank CNB (Centratama Nasional Bank)" ) echo "selected"; ?> >Bank CNB (Centratama Nasional Bank)</option>
                            <option value="Bank Dinar Indonesia" <?php if($users -> account_bank == "Bank Dinar Indonesia" ) echo "selected"; ?> >Bank Dinar Indonesia</option>
                            <option value="BPR EKA (Bank Eka)" <?php if($users -> account_bank == "BPR EKA (Bank Eka)" ) echo "selected"; ?> >BPR EKA (Bank Eka)</option>
                            <option value="Allo Bank/Bank Harda Internasional" <?php if($users -> account_bank == "Allo Bank/Bank Harda Internasional" ) echo "selected"; ?> >Allo Bank/Bank Harda Internasional</option>
                            <option value="BANK MANTAP (Mandiri Taspen)" <?php if($users -> account_bank == "BANK MANTAP (Mandiri Taspen)" ) echo "selected"; ?> >BANK MANTAP (Mandiri Taspen)</option>
                            <option value="Bank Multi Arta Sentosa (Bank MAS)" <?php if($users -> account_bank == "Bank Multi Arta Sentosa (Bank MAS)" ) echo "selected"; ?> >Bank Multi Arta Sentosa (Bank MAS)</option>
                            <option value="Bank Prima Master" <?php if($users -> account_bank == "Bank Prima Master" ) echo "selected"; ?> >Bank Prima Master</option>
                            <option value="Bank Shinhan Indonesia" <?php if($users -> account_bank == "Bank Shinhan Indonesia" ) echo "selected"; ?> >Bank Shinhan Indonesia</option>
                            <option value="Neo Commerce/Yudha Bhakti" <?php if($users -> account_bank == "Neo Commerce/Yudha Bhakti" ) echo "selected"; ?> >Neo Commerce/Yudha Bhakti</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-12 text-center">
                        <button type="submit" class="btn btn-warning" onclick="return confirm('Apakah Data Sudah Benar ?')">
                            {{ __('Update') }}
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
