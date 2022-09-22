@extends('layouts.main')
@section('main-content')
    <div class="container py-5">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <h2>Aggiungi fumetto</h2>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Type" name="type">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Price" name="price">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Series" name="series">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date">
                </div>
                <div class="col-12 p-2">
                    <textarea rows='5' class="form-control" placeholder="Description" name="description"></textarea>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </div>
            </div>
    </div>
    </form>
@endsection
