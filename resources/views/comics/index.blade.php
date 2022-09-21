<div class="d-flex flex-wrap">
    @forelse ($comics as $comic)
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
        <h5>{{ $comic->title }}</h5>
        <h6>{{ $comic->series }}</h6>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->type }}</p>
</div>
@empty
@endforelse