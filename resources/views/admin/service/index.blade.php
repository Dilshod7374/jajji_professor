@extends('admin.layouts.layout')

@section('service', 'active')

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Services</h4>
                            <a href="{{ route('admin.services.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                            </th>
                                            <th>img</th>
                                            <th>service_differrent_uz</th>
                                            <th>service_differrent_en</th>
                                            <th>service_differrent_ru</th>
                                            <th>comment_uz</th>
                                            <th>comment_en</th>
                                            <th>comment_ru</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($service as $item)
                                            <tr>
                                                <td> {{ ++$loop->index }}</td>
                                                <td><img src="/images/{{ $item->img }}" width="60" alt="">
                                                </td>
                                                <td>{{ $item->service_different_uz }}</td>
                                                <td>{{ $item->service_different_en }}</td>
                                                <td>{{ $item->service_different_ru }}</td>
                                                <td>{{ $item->comment_uz }}</td>
                                                <td>{{ $item->comment_en }}</td>
                                                <td>{{ $item->comment_ru }}</td>

                                                <td>
                                                    <form action="{{ route('admin.services.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.services.show', $item->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.services.edit', $item->id) }}"
                                                            class="btn btn-primary">
                                                            <ion-icon class="far fa-edit"></ion-icon>
                                                        </a>
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                                            <ion-icon class="fas fa-times"></ion-icon>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{ $service->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
