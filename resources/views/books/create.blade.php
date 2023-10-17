@extends('layouts.template')

@section('title', 'Add New Article')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Article</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="body" class="form-label">Halaman</label>
                    <input type="number"class="form-control" rows="10" name="body">{{ old('body') }}
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="body" class="form-label">Kategori</label>


                    <select name="kategori" class="form-control">
                        <option value="uncategorized">Uncategorized</option>
                        <option value="sci-fi">Science Fiction</option>
                        <option value="novel">Novel</option>
                        <option value="history">History</option>
                        <option value="biography">Biography</option>
                        <option value="romance">Romance</option>
                        <option value="education">Education</option>
                        <option value="culinary">Culinary</option>
                        <option value="comic">Comic</option>
                    </select>
                </div>

                <div class="mb-3 col-md-12 col-sm-12">
                    <label class="form-label" for="is_penerbit">Penerbit</label>
                    <input class="form-control" id="is_penerbit" name="is_penerbit">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
