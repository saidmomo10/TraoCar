@if (session('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Message success </strong> <br>{{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>

    </div>

@endif

@if (session('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Message success </strong> <br>{{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>

@endif

@if ($errors->any())

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li><br />
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>

@endif

@if (count($cars) !=0)

<div class="row">
    @foreach ($cars as $item)
        <div class="col-md-4 ">
            <div class="mb-4">
                <a href="{{ route('indexWithID', ['id' => $item['id']]) }}">

                <img @if (!empty($item['mainly_image'])) src="{{ $item['mainly_image'] }}" @else src="****" @endif
                    alt="image cap" class="card-img-top" height="225" /></a>
                <div class="card-body">
                    <p class="card-text text-muted">
                        {{ $item->category->name }}
                    </p>
                    <p>{{ $item->name }}/Prix : {{ $item->price }}£</p>
                </div>

            </div>
        </div>
    @endforeach
    {{ $cars->links() }}
</div>
@else
    <div class="empty__page">
        <h3>Aucune voiture disponible</h3>
    </div>
@endif
