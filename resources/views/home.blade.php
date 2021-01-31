@extends('perusahaan.layouts.app')
@section('content')
@if (Session::has('penawaran'))
<script>
    swal("Gagal!", "Penawaran anda terlalu kecil!", "error");
</script>
@endif
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent">
                <h3 class="mb-0">Daftar Proyek</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    @if ($pelelangan->count() > 0)

                    @foreach($pelelangan as $p)
                    <div class="col-md-6">
                        <div class="card shadow col">
                            <br>
                            <h4 class="mb-0">{{ $p->nama }}</h4>
                            <div class="dropdown-divider"></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Tanggal Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: <?php
                                                $tanggal = $p->tanggal;
                                                $hari = substr($tanggal, 8, 2);
                                                $bulan = substr($tanggal, 5, 2);
                                                $tahun = substr($tanggal, 0, 4);
                                                if ($bulan == '01') {
                                                    $bulan = 'Januari';
                                                } elseif ($bulan == '02') {
                                                    $bulan = 'Februari';
                                                } elseif ($bulan == '03') {
                                                    $bulan = 'Maret';
                                                } elseif ($bulan == '04') {
                                                    $bulan = 'April';
                                                } elseif ($bulan == '05') {
                                                    $bulan = 'Mei';
                                                } elseif ($bulan == '06') {
                                                    $bulan = 'Juni';
                                                } elseif ($bulan == '07') {
                                                    $bulan = 'Juli';
                                                } elseif ($bulan == '08') {
                                                    $bulan = 'Agustus';
                                                } elseif ($bulan == '09') {
                                                    $bulan = 'September';
                                                } elseif ($bulan == '10') {
                                                    $bulan = 'Oktober';
                                                } elseif ($bulan == '11') {
                                                    $bulan = 'November';
                                                } elseif ($bulan == '12') {
                                                    $bulan = 'Desember';
                                                }

                                                echo $hari . " " . $bulan . " " . $tahun;
                                                ?>
                                    </small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Nilai Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: Rp. {{ $p->nilai }}</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Lama Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: {{ $p->lama }} hari</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Tanggal Mulai Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: <?php
                                                $tanggal = $p->mulai;
                                                $hari = substr($tanggal, 8, 2);
                                                $bulan = substr($tanggal, 5, 2);
                                                $tahun = substr($tanggal, 0, 4);
                                                if ($bulan == '01') {
                                                    $bulan = 'Januari';
                                                } elseif ($bulan == '02') {
                                                    $bulan = 'Februari';
                                                } elseif ($bulan == '03') {
                                                    $bulan = 'Maret';
                                                } elseif ($bulan == '04') {
                                                    $bulan = 'April';
                                                } elseif ($bulan == '05') {
                                                    $bulan = 'Mei';
                                                } elseif ($bulan == '06') {
                                                    $bulan = 'Juni';
                                                } elseif ($bulan == '07') {
                                                    $bulan = 'Juli';
                                                } elseif ($bulan == '08') {
                                                    $bulan = 'Agustus';
                                                } elseif ($bulan == '09') {
                                                    $bulan = 'September';
                                                } elseif ($bulan == '10') {
                                                    $bulan = 'Oktober';
                                                } elseif ($bulan == '11') {
                                                    $bulan = 'November';
                                                } elseif ($bulan == '12') {
                                                    $bulan = 'Desember';
                                                }

                                                echo $hari . " " . $bulan . " " . $tahun;
                                                ?>
                                    </small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Tanggal Selesai Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: <?php
                                                $tanggal = $p->selesai;
                                                $hari = substr($tanggal, 8, 2);
                                                $bulan = substr($tanggal, 5, 2);
                                                $tahun = substr($tanggal, 0, 4);
                                                if ($bulan == '01') {
                                                    $bulan = 'Januari';
                                                } elseif ($bulan == '02') {
                                                    $bulan = 'Februari';
                                                } elseif ($bulan == '03') {
                                                    $bulan = 'Maret';
                                                } elseif ($bulan == '04') {
                                                    $bulan = 'April';
                                                } elseif ($bulan == '05') {
                                                    $bulan = 'Mei';
                                                } elseif ($bulan == '06') {
                                                    $bulan = 'Juni';
                                                } elseif ($bulan == '07') {
                                                    $bulan = 'Juli';
                                                } elseif ($bulan == '08') {
                                                    $bulan = 'Agustus';
                                                } elseif ($bulan == '09') {
                                                    $bulan = 'September';
                                                } elseif ($bulan == '10') {
                                                    $bulan = 'Oktober';
                                                } elseif ($bulan == '11') {
                                                    $bulan = 'November';
                                                } elseif ($bulan == '12') {
                                                    $bulan = 'Desember';
                                                }

                                                echo $hari . " " . $bulan . " " . $tahun;
                                                ?>
                                    </small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>PIC</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: {{ $p->pic }}</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <small>Harga Kontrak</small>
                                </div>
                                <div class="col-md-7">
                                    <small>: Rp. {{ $p->harga }}</small>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tawar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Penwaran Anda</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route('penawaran.store') }}">
                                            @csrf
                                            <div class="modal-body">

                                                <div class="form-group row">
                                                    <div class="col-md-2">
                                                        <label for="exampleFormControlInput1">Rp. </label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input name="penawaran" type="number" class="form-control" id="exampleFormControlInput1" placeholder="masukan nominal" required>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id_proyek" class="form-control" id="exampleFormControlInput1" value="{{ $p->id }}">
                                                <input type="hidden" name="id_perusahaan" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->id }}">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Ok</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @endif
                </div>
                <br>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $pelelangan->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection