<div class="row">
    @foreach ($cars as $item)
        <div class="col-md-4 ">
            <!-- pour dire utilise 4 colonnes  contraire sm pour dire pour les écrans small-->
            <div class="mb-4">
                <a href="{{ route('indexWithID', ['id' => $item['id']]) }}">

                <img @if (!empty($item['mainly_image'])) src="{{ $item['mainly_image'] }}" @else src="****" @endif
                    alt="image cap" class="card-img-top" height="225" /></a>
                <div class="card-body">
                    <p class="card-text text-muted">
                        {{ $item->category->name }}
                    </p>
                    <p>{{ $item->name }}</p>

                    {{-- <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ route('indexWithID', ['id' => $item['id']]) }}"> voir </a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>
                        </div>
                        <small class="text-muted"> 9 mins</small>
                    </div> --}}
                </div>

            </div>
        </div>
    @endforeach
    {{ $cars->links() }}
</div>
