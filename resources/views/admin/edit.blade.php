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
        <p class="section-lead"></p>
        <br>
        <form method="POST" action="{{ route('update', $edit['id'])}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
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
                                    <input type="text" class="form-control" name="title" value="{{$edit['title']}}">
                                </div>

                                <div class="col-sm-12">
                                    <label>Writer</label>
                                    <input type="text" class="form-control" name="writer" value="{{$edit['writer']}}">
                                </div>

                                <div class="col-sm-6">
                                    <label>Publisher</label>
                                    <input type="text" name="publisher" class="form-control" value="{{$edit['publisher']}}">
                                </div>

                                <div class="col-sm-6">
                                    <label>No ISBN</label>
                                    <input type="text" name="no_isbn" class="form-control" value="{{$edit['no_isbn']}}">
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
                                    <textarea name="synopsis" class="form-control">{{$edit['synopsis']}}</textarea>
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label></label>
                                        <input class="form-control" type="file" id="image" name="image">
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
</section>

@endsection