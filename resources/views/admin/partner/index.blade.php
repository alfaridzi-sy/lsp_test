@extends('admin.layouts.master')

@section('page_title')
    Partnership | UMKM2M Kecamatan Siantar Marimbun
@endsection

@section('breadcrumb')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Partnership</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Master Partner </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="mb-0">Data Master Partner</h2>
                </div>
                <div class="col text-right">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                        data-target="#addPartnerModal">
                        Tambah Partner
                    </button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Nama Partner</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Partner -->
    <div class="modal fade" id="addPartnerModal" tabindex="-1" role="dialog" aria-labelledby="addPartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPartnerModalLabel">Tambah Partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addPartnerForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="partner_name">Nama Partner</label>
                            <input type="text" class="form-control" id="partner_name" name="partner_name" required>
                        </div>
                        <div class="form-group">
                            <label for="logo_url">Logo</label>
                            <input type="file" class="form-control" id="logo_url" name="logo_url" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Partner -->
    <div class="modal fade" id="editPartnerModal" tabindex="-1" role="dialog" aria-labelledby="editPartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="editPartnerModalLabel">Edit Partner</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editPartnerForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="text-center mb-3">
                            <img id="edit_logo_preview" class="rounded-circle" style="display:none; max-width: 100px;" />
                        </div>
                        <input type="hidden" id="edit_partner_id">
                        <div class="form-group">
                            <label for="edit_partner_name">Nama Partner</label>
                            <input type="text" class="form-control" id="edit_partner_name" name="partner_name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_logo_url">Logo</label>
                            <input type="file" class="form-control" id="edit_logo_url" name="logo_url" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#edit_logo_preview').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    $('#edit_logo_preview').hide();
                }
            }

            // Event listener untuk input file di modal edit
            $('#edit_logo_url').change(function() {
                readURL(this);
            });

            // Set CSRF token for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#addPartnerForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('partner.store') }}', // Route untuk menyimpan data partner
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            // Menutup modal
                            $('#addPartnerModal').modal('hide');
                            // Memuat ulang data tabel
                            loadTableData();
                            // Menampilkan pesan sukses
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Partner berhasil ditambahkan.',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            // Menampilkan pesan error
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: response.message ||
                                    'Terjadi kesalahan saat menambahkan partner.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error saving partner:", error);
                    }
                });
            });

            $('#editPartnerForm').submit(function(e) {
                e.preventDefault();
                var partnerId = $('#edit_partner_id').val();
                var formData = new FormData(this);

                // Log the formData for debugging
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ', ' + pair[1]);
                }

                $.ajax({
                    url: '{{ url('partner') }}/' + partnerId,
                    type: 'PUT',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#editPartnerModal').modal('hide');
                            loadTableData();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Partner berhasil diperbarui.',
                                confirmButtonText: 'OK'
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: response.message ||
                                    'Terjadi kesalahan saat memperbarui partner.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error updating partner:", error);
                    }
                });
            });

            $(document).on('click', '.btn-edit', function() {
                var partnerId = $(this).data('id');

                $.ajax({
                    url: '{{ url('partner') }}/' + partnerId,
                    type: 'GET',
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#edit_partner_id').val(response.partner.partner_id);
                            $('#edit_partner_name').val(response.partner.partner_name);
                            if (response.partner.logo_url) {
                                $('#edit_logo_preview').attr('src', '{{ asset('storage') }}/' +
                                    response.partner.logo_url).show();
                            } else {
                                $('#edit_logo_preview').hide();
                            }
                            $('#editPartnerModal').modal('show');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: response.message ||
                                    'Terjadi kesalahan saat memuat data partner.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching partner data:", error);
                    }
                });
            });

            $(document).on('click', '.btn-delete', function(e) {
                e.preventDefault();
                var partnerId = $(this).data('id');
                var deleteUrl = '{{ url('partner') }}/' + partnerId;

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: deleteUrl,
                            type: 'DELETE',
                            success: function(response) {
                                if (response.status === 'success') {
                                    loadTableData();
                                    Swal.fire(
                                        'Terhapus!',
                                        'Data partner telah dihapus.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message ||
                                            'Terjadi kesalahan saat menghapus partner.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Error deleting partner:", error);
                            }
                        });
                    }
                });
            });

            // Memuat data tabel dengan AJAX
            function loadTableData() {
                $.ajax({
                    url: '{{ route('partner.getAll') }}', // Route untuk mengambil data partner
                    type: 'GET',
                    success: function(response) {
                        var tableBody = $('table tbody');
                        tableBody.empty();

                        if (response.partners.length === 0) {
                            tableBody.append(
                                `<tr class="text-center">
                                <td colspan="4">Tidak ada data yang tersedia.</td>
                            </tr>`
                            );
                        } else {
                            response.partners.forEach(function(p, k) {
                                var logoUrl = p.logo_url ? '{{ asset('storage') }}/' + p
                                    .logo_url : '';

                                tableBody.append(
                                    `<tr class="text-center">
                                    <td scope="row">${k + 1}</td>
                                    <td scope="row">
                                        ${logoUrl ? '<img src="' + logoUrl + '" width="100px">' : ''}
                                    </td>
                                    <td scope="row">${p.partner_name}</td>
                                    <td scope="row">
                                        <div class="btn-group" role="group">
                                            <!-- Tombol Edit -->
                                            <button type="button" class="btn btn-sm btn-warning btn-edit" data-id="${p.partner_id}" data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <!-- Tombol Hapus -->
                                            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="${p.partner_id}" data-toggle="tooltip" data-placement="bottom" title="Hapus Data">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>`
                                );
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error loading table data:", error);
                    }
                });
            }

            // Load data saat halaman dimuat
            loadTableData();
        });
    </script>
@endpush
