
<div>
    <div style="display: flex; align-items:start; gap:30px">
        <div class="slides" style="width: 500px">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div style="position:absolute; top:400px" class="carousel-indicators">
                    <button style="text-indent: 0; width: 200px; height: 50px;" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"><img src="{{ asset($cars->mainly_image) }}" alt=""
                            class="w-100"></button>
                    <button style="text-indent: 0; width: 200px; height: 50px;" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><img
                            src="{{ asset($cars->secondary_image) }}" alt="" class="w-100"></button>
                    <button style="text-indent: 0; width: 200px; height: 50px;" type="button"
                        data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><img
                            src="{{ asset($cars->tertiary_image) }}" alt="" class="w-100"></button>
                </div>
                <div class="carousel-inner" style="background-color: var(--gray-base)">
                    <div class="carousel-item active">
                        <div style="width: 100%; height:100%; object-fit: cover;" class="slide__img card">
                            <img class="img" src="{{ asset($cars->mainly_image) }}" alt="" class="w-100">
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div style="width: 100%; height:100%; object-fit: cover;" class="slide__img">
                            <img class="img" src="{{ asset($cars->secondary_image) }}" alt="" class="w-100">
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="slide__img">
                            <img class="img" src="{{ asset($cars->tertiary_image) }}" alt="" class="w-100">
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div style="display: flex; flex-direction:column; gap:350px">
            <p>
                {{ $cars['name'] }} <br> <strong>Prix</strong> :{{ $cars->price }}
            </p>
            <p><strong>Catégorie</strong> : {{ $cars->category->name }}</p>
        </div>
    </div>
</div>

<div style="margin-top: 100px">
    <hr>
    <p>Description</p>
    {{ $cars->details }}
</div>

<div style="margin-top: 100px">
    <hr>
    <h5>PRODUITS SIMILAIRES</h5>

    <div class="row">
        @foreach ($car as $item)
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
    </div>
</div>
