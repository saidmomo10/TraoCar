    <h1>{{ $category->name }}</h1>
    <hr>

<div class="row">
    @foreach ($cars as $item)
        <div class="col-md-4 ">
            <div class="mb-4">
                <img @if (!empty($item['mainly_image'])) src="{{ $item['mainly_image'] }}" @else src="****" @endif
                    alt="image cap" class="card-img-top" height="225" />
                <div class="card-body">
                    <p class="card-text text-muted">
                        {{ $item->category->name }}
                    </p>
                    <p>{{ $item->name }}</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary"
                                href="{{ route('indexWithID', ['id' => $item['id']]) }}"> voir </a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                        </div>
                        <small class="text-muted"> 9 mins</small>
                    </div>
                </div>

            </div>
        </div>
    @endforeach    
</div>
