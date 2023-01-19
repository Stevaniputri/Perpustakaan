@extends('layouts.admin')

@section('content')


<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
        <div class="section-header-breadcrumb">

            <div class="breadcrumb-item">Data user</div>
        </div>
    </div>
    <div class="section-body">
        <table id="data-admin" class="table table-striped table-bordered table-md" style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($registrasi as $show)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $show['name']}}</td>
                    <td>{{ $show['alamat']}}</td>
                    <td>{{ $show['no_hp']}}</td>
                    <td>{{ $show['email']}}</td>
                    <td class="d-flex">
                        <form action="{{route('destroy_user', $show['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

<script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
<script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#data-admin').DataTable({
            "iDisplayLength": 25
        });
    });
</script>


@endsection