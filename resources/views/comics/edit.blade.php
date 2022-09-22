@extends('layouts.main')
@section('main-content')
    <div class="container py-5">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Type" name="type" value="{{ $comic->type }}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date" value="{{ $comic->sale_data }}">
                </div>
                <div class="col-12 p-2">
                    <textarea rows='5' class="form-control" placeholder="Description" name="description" value="{{ $comic->description }}"></textarea>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
            </div>
    </div>
    </form>
@endsection
