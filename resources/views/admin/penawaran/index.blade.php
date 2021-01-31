@extends('admin.layouts.app')
@section('content')
@if (Session::has('tambah'))
<script>
    swal("Berhasil!", "Data telah ditambahkan!", "success");
</script>
@endif
@if (Session::has('hapus'))
<script>
    swal("Berhasil!", "Data telah dihapus!", "success");
</script>
@endif
@if (Session::has('sunting'))
<script>
    swal("Berhasil!", "Data telah diubah!", "success");
</script>
@endif
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">Tabel Proyek</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Proyek</th>
                                <th scope="col">Tanggal Kontrak</th>
                                <th scope="col">Nilai Kontrak</th>
                                <th scope="col">Lama Kontrak (hari)</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Selesai</th>
                                <th scope="col">PIC</th>
                                <th scope="col">Harga Proyek</th>
                                <th scope="col">Nama Perusahaan</th>
                                <th scope="col">Penawaran</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        @if ($penawaran->count() > 0)
                            <?php $no = 0; ?>
                            @foreach($penawaran as $p)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>
                                    <?php
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

                                </td>
                                <td>Rp. {{ $p->nilai }}</td>
                                <td>{{ $p->lama }}</td>
                                <td>
                                    <?php
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
                                </td>
                                <td>
                                    <?php
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
                                </td>
                                <td>{{ $p->pic }}</td>
                                <td>Rp. {{ $p->harga }}</td>
                                <td>{{ $p->nama_perusahaan }}</td>
                                <td>
                                    Rp. {{ $p->penawaran }}
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form id="data-{{ $p->id }}" action="{{ route('adminpenawaran.update', $p->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id_perusahaan" value="{{ $p->id_perusahaan }}">
                                            <input type="hidden" name="id_proyek" value="{{ $p->id_proyek }}">
                                        </form>
                                       
                                        <button class="dropdown-item" onclick="hapusProyek( {{ $p->id }} )"><i class="nc-icon nc-icon nc-cart-simple"></i> Persetujuan</button>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $penawaran->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function hapusProyek(id) {
        swal({
                title: "Setujui penawaran ini?",
                icon: "warning",
                buttons: true,
                primaryMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // document.getElementById("delete-user").click();
                    $('#data-' + id).submit();
                } else {
                    swal("Penawaran tidak disetujui!");
                }
            });
    }
</script>

@endsection