{{-- <div class="container mt-5">
    <div class="mb-3" >
        <div class="row g-0">
            <div class="col-md-4">
                <img @if (!empty($item['mainly_image'])) src="{{ $item['mainly_image'] }}" @else src="****" @endif
                alt="image cap" class="card-img-top" height="225" />
            </div>
            <div style="margin-left: 30px" class="col-md-4 ml-3">
                <div style="display: flex; flex-direction:column; gap:35px" class="">
                    <div style="display: flex; gap:15px; justify-content:flex-start;">
                        <h5 class="card-title">{{ $cars['name'] }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; gap:15px; justify-content:flex-start;">
            <h5 class="card-title">Description :</h5>
            <p>{{ $cars['details'] }}</p>
        </div>
    </div>
</div> --}}

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
                            <img src="{{ asset($cars->mainly_image) }}" alt="" class="w-100">
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div style="width: 100%; height:100%; object-fit: cover;" class="slide__img">
                            <img src="{{ asset($cars->secondary_image) }}" alt="" class="w-100">
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="slide__img">
                            <img src="{{ asset($cars->tertiary_image) }}" alt="" class="w-100">
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
            <p>{{ $cars['name'] }}</p>
            <p>Catégorie: {{ $cars->category->name }}</p>
        </div>
    </div>
</div>
