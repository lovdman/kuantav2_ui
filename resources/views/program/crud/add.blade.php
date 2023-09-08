@include('navbar')
<title>Add Program</title>
<div class="container py-3">
{{--    <form action="{{ route('addtask') }}" method="POST">--}}
{{--        @csrf--}}
    <label for="Form1">Judul KPI's</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form1" value="ini judul kpi" readonly>
    </div>
    <label for="Form2">Judul</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form2" placeholder="Masukkan Judul Program">
    </div>

{{--    <select class="form-select" aria-label="Select multiple options" multiple>--}}
{{--        <option value="1">One</option>--}}
{{--        <option value="2">Two</option>--}}
{{--        <option value="3">Three</option>--}}
{{--    </select>--}}

    <label for="opt">PJ</label>
    <select class="form-select" id="opt" aria-label="Default select example">
        <option selected>Pilih PJ</option>
        <option value="1">yourself</option>
        <option value="2">him</option>
        <option value="3">Them</option>
    </select>


    <br/>
        <div>Submit Program & Tambah Kegiatan</div>
    <button class="btn btn-primary" type="submit">Submit</button>
{{--    </form>--}}

</div>
