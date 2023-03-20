@foreach ($parents as $item)
    <div class="testimonial-item px-3 col-4">
        <div class="bg-light shadow-sm rounded mb-4 p-4">
            <h3 class="fas fa-quote-left text-primary mr-3" style="width: 30%"></h3>
            {{ $item['comment_' . \App::getLocale()] }}

        </div>
        <div class="d-flex align-items-center">
            <img class="rounded-circle" src="/images/{{ $item->img }}" style="width: 70px; height: 70px;" alt="Image">
            <div class="pl-3">
                <h5>{{ $item->surname }} {{ $item->name }}</h5>
                <i>{{ $item['rank_' . \App::getLocale()] }}</i>
            </div>
        </div>
    </div>
@endforeach
