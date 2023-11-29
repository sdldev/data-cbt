<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Yajra Datatables Tutorial - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

<div class="container">
    <h1>Hasil</h1>
    <table class="table table-hover data-table" id="data-table">
        <thead>
            <tr>
                <th scope="col">nama_ujian</th>
                <th scope="col">nama_siswa</th>
                <th scope="col">nilai</th>

                <th scope="col">jml_benar</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasilujian as $var)
                <tr>
                    <td>{{ $var->nama_ujian }}</td>
                    <td>{{ $var->nama_siswa }}</td>
                    <td>{{ $var->jml_benar }}</td>
                    <td>{{ $var->nilai }}</td>
                    <td>{{ $var->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#data-table').DataTable();
    });
</script>
{{-- <script type="text/javascript">
  $(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('ajax') }}",
        columns: [
            {data: 'nama_ujian', name: 'nama_ujian'},
            {data: 'nama_siswa', name: 'nama_siswa'},
            {data: 'jml_benar', name: 'jml_benar'},
        ]
    });

  });
</script> --}}
</html>
