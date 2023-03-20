@extends('admin.layouts.layout')

@section('parents', 'active')
    

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
                            <h4>Parents_idea</h4>
                            <a href="{{ route('admin.parents.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                            </th>
                                            <th>name</th>
                                            <th>surname</th>
                                            <th>img</th>
                                            <th>comment_uz</th>
                                            <th>comment_en</th>
                                            <th>comment_ru</th>
                                            <th>rank_uz</th>
                                            <th>rank_en</th>
                                            <th>rank_ru</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($parent as $item)
                                            <tr>
                                                <td> {{ ++$loop->index }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->surname }}</td>
                                                <td><img src="/images/{{ $item->img }}" width="60" alt="">
                                                </td>
                                                <td>{{ $item->comment_uz }}</td>
                                                <td>{{ $item->comment_en }}</td>
                                                <td>{{ $item->comment_ru }}</td>
                                                <td>{{ $item->rank_uz }}</td>
                                                <td>{{ $item->rank_en }}</td>
                                                <td>{{ $item->rank_ru }}</td>

                                                <td>
                                                    <form action="{{ route('admin.parents.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.parents.show', $item->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.parents.edit', $item->id) }}"
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
                                {{ $parent->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
