@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Data Sidang
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-default" href="{{ route('admin.syarats.index') }}">
                                    Kembali Ke Daftar
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>
                                            Mahasiswa
                                        </th>
                                        <td>
                                            {{ $syarat->mahasiswa->user->name ?? '' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Skripsi
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->skripsi) }}">{{ $syarat->skripsi }}</a>
                                        </td>
                                        <td class="d-flex">
                                            @if ($syarat->skripsistatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="skripsistatus"
                                                                id="skripsistatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->skripsistatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="skripsistatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->skripsistatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pas Photo
                                        </th>
                                        <td>
                                            <img src="{{ asset("/storage/".$syarat->photo ?? '') }}" alt="">
                                        </td>
                                        <td class="d-flex">
                                            @if ($syarat->photostatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="photostatus"
                                                                id="photostatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->photostatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="photostatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->photostatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Serti Calon Sarjana
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->serticalonsarjana) }}">{{ $syarat->serticalonsarjana }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->serticalonsarjanastatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="serticalonsarjanastatus"
                                                                id="serticalonsarjanastatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->serticalonsarjanastatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="serticalonsarjanastatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->serticalonsarjanastatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Serti Bebas Perpus
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->sertibebasperpus) }}">{{ $syarat->sertibebasperpus }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->sertibebasperpusstatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="sertibebasperpusstatus"
                                                                id="sertibebasperpusstatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->sertibebasperpusstatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="sertibebasperpusstatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->sertibebasperpusstatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Serti Maba
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->sertimaba) }}">{{ $syarat->sertimaba }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->sertimabastatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="sertimabastatus"
                                                                id="sertimabastatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->sertimabastatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="sertimabastatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->sertimabastatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Bebas Lab
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->bebaslab) }}">{{ $syarat->bebaslab }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->bebaslabstatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="bebaslabstatus"
                                                                id="bebaslabstatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->bebaslabstatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="bebaslabstatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->bebaslabstatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Transkrip
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->transkrip) }}">{{ $syarat->transkrip }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->transkripstatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="transkripstatus"
                                                                id="transkripstatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->transkripstatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="transkripstatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->transkripstatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pembayaran
                                        </th>
                                        <td>
                                            <a href="{{ asset("/storage/".$syarat->pembayaran) }}">{{ $syarat->pembayaran }}</a>
                                        </td>
                                        <td>
                                            @if ($syarat->pembayaranstatus == 0)
                                                <div>
                                                    <i class="fa-2x fas fa-ellipsis-h"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-group">
                                                            <select class="form-control" name="pembayaranstatus"
                                                                id="pembayaranstatus">
                                                                <option selected hidden>Pilih Salah Satu!</option>
                                                                <option value="1">Tolak</option>
                                                                <option value="2">Approve</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-success btn-sm" type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            @elseif ($syarat->pembayaranstatus == 1)
                                            <div class="d-flex">
                                                <i class="fa-2x fas fa-times text-danger"></i>
                                                <div>
                                                    <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                                        enctype="multipart/form-data" method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="pembayaranstatus" value="2">
                                                        <button class="btn btn-success btn-sm"
                                                            type="submit">Verif</button>
                                                    </form>
                                                </div>
                                            </div>
                                            @elseif ($syarat->pembayaranstatus == 2)
                                                <i class="fas fa-check fa-2x text-success"></i>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                    enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option {{ old('status', '') === (string) $syarat->status ? 'selected' : '' }} value="{{ $syarat->status }}">{{ $syarat->status }}</option>
                                            <option value="Verifikasi Admin">Verifikasi Admin</option>
                                            <option value="Verifikasi Kasie Akademik">Verifikasi Kasie Akademik</option>
                                            <option value="Verifikasi Wakil Dekan 1">Verifikasi Wakil Dekan 1</option>
                                        </select>
                                    </div>
                                    <button class="mb-3 btn btn-success btn-sm" type="submit">Kirim</button>
                                </form>
                            </div>
                            <div class="form-group">
                                <form action="{{ route('admin.syarats.update', $syarat->id) }}"
                                    enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="feedback">Feedback</label>
                                        <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
                                    </div>
                                    <button class="mb-3 btn btn-success btn-sm" type="submit">Kirim</button>
                                </form>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-default" href="{{ route('admin.syarats.index') }}">
                                    Kembali Ke Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
