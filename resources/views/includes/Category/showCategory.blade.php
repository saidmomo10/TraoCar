    <h1>{{ $category->name }}</h1>
    <hr>

    <div class="row">
        @foreach ($cars as $item)
            <div class="col-md-4 ">
                <div class="mb-4">
                    <a href="{{ route('indexWithID', ['id' => $item['id']]) }}">
    
                    <img @if (!empty($item->category->mainly_image)) src="{{ $item->category->mainly_image }}" @else src="****" @endif
                        alt="image cap" class="card-img-top" height="225" />@if (!empty($item->category->mainly_image))
                        <p>Aucune image disponible</p>
                        @endif</a>
                    <div class="card-body">
                        <p class="card-text text-muted">
                            {{ $item->category->name }}
                        </p>
                        <p>{{ $item->name }}/Prix : {{ $item->price }}£</p>
                    </div>
    
                </div>
            </div>
        @endforeach
    </div>
