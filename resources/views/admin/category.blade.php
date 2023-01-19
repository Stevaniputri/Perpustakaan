@extends('layouts.admin')

@section('content');
<section class="section">
    <div class="section-header">
        <h1>Create Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
        </div>
    </div>

    <div class="section-body">
        @if (session('addCategory'))
        <div class="alert alert-success">
            {{ session('addCategory') }}
        </div>
        @endif
        <p class="section-lead"></p>
        <br>
        <form method="POST" action="{{ route('createCategory')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-sm-12">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="category">
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-start">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <input type="submit" value="Simpan" class="btn btn-block btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="section-body">
        <table id="data-admin" class="table table-striped table-bordered table-md" style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($data as $show)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $show['id']}}</td>
                    <td>{{ $show['category']}}</td>
                    <td class="d-flex">
                        <form action="{{route('destroy_category', $show['id'])}}" method="POST">
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

@endsection