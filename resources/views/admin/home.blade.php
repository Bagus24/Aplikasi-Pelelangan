@extends('admin.layouts.app')
@section('content')
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent">
                <h3 class="mb-0">Pilih Data Proyek</h3>
            </div>
            <div class="card-body">
                <form method="GET" action="{{ route('proyek.create')}}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="exampleFormControlSelect1">Nama Proyek</label>
                        </div>
                        <div class="col-md-10">
                            <select name="nama" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-- Pilih --</option>
                                <option value="Proyek Jalanan">Proyek Jalanan</option>
                                <option value="Proyek Tampungan Air / Bendungan">Proyek Tampungan Air / Bendungan</option>
                                <option value="Proyek Jembatan">Proyek Jembatan</option>
                                <option value="Proyek Rumah">Proyek Rumah</option>
                                <option value="Proyek Saluran Irigasi">Proyek Saluran Irigasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <button class="btn btn-primary" type="submit">Cek</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection