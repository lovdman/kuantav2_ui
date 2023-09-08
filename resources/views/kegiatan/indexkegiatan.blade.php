@extends('kegiatan.kegiatan')
@section('indexkegiatan')

    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">List Kegiatan dari Program...</h2>
        <a href='{{route('addkegiatan', "program")}}' class="btn btn-dark">Add Kegiatan + </a>
    </div>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
        <tr >
            <th>Judul Program</th>
            <th>Judul Kegiatan</th>
            <th>Circle</th>
            <th>Target</th>
            <th>Capaian</th>
            <th>Catatan</th>
            <th>User Name</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Presentase Ketercapaian</th>
        </tr>
        </thead>
        <tbody>
        <tr >
            <td class="align-middle">ini judul Program</td>
            <td class="align-middle">ini judul Kegiatan</td>
            <td class="align-middle">Kuanta Institute</td>
            <td class="align-middle">10 juta</td>
            <td class="align-middle">7 juta</td>
            <td class="align-middle">Menangani pasien</td>
            <td class="align-middle">Dimyadi</td>
            <td class="align-middle">20 Agustus</td>
            <td class="align-middle">on progress</td>
            <td class="align-middle">81%</td>
        </tr>
        </tbody>
    </table>

@endsection
