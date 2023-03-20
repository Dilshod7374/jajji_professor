@extends('admin.layouts.layout')

@section('groups', 'active')


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
                            <h4>Groups</h4>
                            <a href="{{ route('admin.groups.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                            </th>
                                            <th>name_uz</th>
                                            <th>name_en</th>
                                            <th>name_ru</th>
                                            <th>img</th>
                                            <th>title_uz</th>
                                            <th>title_en</th>
                                            <th>title_ru</th>
                                            <th>age</th>
                                            <th>seat</th>
                                            <th>course_time</th>
                                            <th>payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($group as $item)
                                            <tr>
                                                <td> {{ ++$loop->index }}</td>
                                                <td>{{ $item->name_uz }}</td>
                                                <td>{{ $item->name_en }}</td>
                                                <td>{{ $item->name_ru }}</td>
                                                <td><img src="/images/{{ $item->img }}" width="60" alt=""></td>
                                                <td>{{ $item->title_uz }}</td>
                                                <td>{{ $item->title_en }}</td>
                                                <td>{{ $item->title_ru }}</td>
                                                <td>{{ $item->age }}</td>
                                                <td>{{ $item->seat }}</td>
                                                <td>{{ $item->course_time }}</td>
                                                <td>{{ $item->payment }}</td>


                                                <td>
                                                    <form action="{{ route('admin.groups.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('admin.groups.show', $item->id) }}"
                                                            class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('admin.groups.edit', $item->id) }}"
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
                                {{ $group->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
