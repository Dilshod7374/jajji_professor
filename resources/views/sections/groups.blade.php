                @foreach ($groups as $item)
                    <div class="col-lg-4 mb-5">
                        <div class="card border-0 bg-light shadow-sm pb-2">
                            <img class="card-img-top mb-2" src="/images/{{ $item->img }}" alt="">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{ $item['name_'.\App::getLocale()] }}</h4>
                                <p class="card-text">{{ $item['title_'.\App::getLocale()] }}</p>


                            </div>
                            <div class="card-footer bg-transparent py-4 px-5">
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>@lang('words.childrens_young')</strong></div>
                                    <div class="col-6 py-1">{{ $item->age }}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>@lang('words.overal_seat')</strong>
                                    </div>
                                    <div class="col-6 py-1">{{ $item->seat }}</div>
                                </div>
                                <div class="row border-bottom">
                                    <div class="col-6 py-1 text-right border-right"><strong>@lang('words.course_time')</strong></div>
                                    <div class="col-6 py-1">{{ $item->course_time }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-6 py-1 text-right border-right"><strong>@lang('words.payment')</strong></div>
                                    <div class="col-6 py-1">{{ $item->payment }} / Oy</div>
                                </div>
                            </div>
                            <a href="tel:+998996111300" class="btn btn-primary px-4 mx-auto mb-4">@lang('words.add_now')</a>
                        </div>
                    </div>
                @endforeach
