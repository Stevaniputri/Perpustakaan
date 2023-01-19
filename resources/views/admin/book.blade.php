@extends('layouts.admin')

@section('content');
<section class="section">
    <div class="section-header">
        <h1>Create Book</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
        </div>
    </div>

    <div class="section-body">
        @if (session('addBook'))
        <div class="alert alert-success">
            {{ session('addBook') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <p class="section-lead"></p>
        <br>
        <form method="POST" action="{{ route('createBook')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Create Book</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-sm-12">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>

                                <div class="col-sm-12">
                                    <label>Writer</label>
                                    <input type="text" class="form-control" name="writer">
                                </div>

                                <div class="col-sm-6">
                                    <label>Publisher</label>
                                    <input type="text" name="publisher" class="form-control">
                                </div>

                                <div class="col-sm-6">
                                    <label>No ISBN</label>
                                    <input type="text" name="no_isbn" class="form-control">
                                </div>

                                <div class="col-sm-6">
                                    <label>Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($data as $item)
                                        <option value="{{$item['id']}}">{{$item['category']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label>Synopsis</label>
                                    <textarea name="synopsis" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label>PDF Image</label>
                                        <input class="form-control" type="file" name="image_pdf">
                                        @error('image_pdf')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
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
                    <th>Book ID</th>
                    <th>Category ID</th>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Synopsis</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach($book as $show)

                <tr>
                    <td>{{$i++}}</td>
                    <td>{{ $show['id']}}</td>
                    <td>{{ $show['category_id']}}</td>
                    <td>{{ $show['title']}}</td>
                    <td>{{ $show['writer']}}</td>
                    <td>{{ $show['publisher']}}</td>
                    <td>{{ $show['no_isbn']}}</td>
                    <td>{{ $show['synopsis']}}</td>
                    <td class="d-flex">
                        <a href="{{route('edit', $show['id'])}}" class="btn btn-warning mr-2">Edit</a>
                        <form action="{{route('destroy', $show['id'])}}" method="POST">
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