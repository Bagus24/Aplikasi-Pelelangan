@extends('admin.layouts.app')
@section('content')
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent">
                <h3 class="mb-0">Sunting Data Proyek</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('proyek.update', $pelelangan->id ) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Nama Proyek</label>
                        </div>
                        <div class="col-md-10">
                            <input name="nama" value="{{ $pelelangan->nama }}" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Tanggal Kontrak</label>
                        </div>
                        <div class="col-md-10">
                            <input name="tanggal" value="{{ $pelelangan->tanggal }}" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Nilai Kontrak</label>
                        </div>
                        <div class="col-md-10">
                            <input name="nilai" value="{{ $pelelangan->nilai }}" type="number" class="form-control" placeholder="isikan nilai kontrak" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Lama Kontrak (hari)</label>
                        </div>
                        <div class="col-md-10">
                            <input name="lama" value="{{ $pelelangan->lama }}" type="number" class="form-control" placeholder="isikan lama kontrak" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Tanggal Mulai</label>
                        </div>
                        <div class="col-md-10">
                            <input name="mulai" value="{{ $pelelangan->mulai }}" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">PIC</label>
                        </div>
                        <div class="col-md-10">
                            <input name="pic" value="{{ $pelelangan->pic }}" type="text" class="form-control" placeholder="isikan pic" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-control-label">Harga Proyek</label>
                        </div>
                        <div class="col-md-10">
                            <input name="harga" value="{{ $pelelangan->harga }}" type="number" class="form-control" placeholder="isikan harga" required>
                        </div>
                    </div>
                    <input name="id_perusahaan" type="hidden" value="0" class="form-control">
                    <div class="dropdown-divider"></div>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection