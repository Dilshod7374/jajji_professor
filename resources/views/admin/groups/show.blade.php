@extends('admin.layouts.layout')

@section('groups', 'active')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.groups.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>Name_uz : </td>
                                            <td><b>{{ $group->name_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Name_en : </td>
                                            <td><b>{{ $group->name_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Name_ru : </td>
                                            <td><b>{{ $group->name_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>img : </td>
                                            <td><b><img src="/images/{{ $group->img }}" width="60" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>Title_uz : </td>
                                            <td><b>{{ $group->title_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Title_en : </td>
                                            <td><b>{{ $group->title_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Title_ru : </td>
                                            <td><b>{{ $group->title_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>Age : </td>
                                            <td><b>{{ $group->age }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>seat : </td>
                                            <td><b>{{ $group->seat }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>copurse_time : </td>
                                            <td><b>{{ $group->course_time }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>payment : </td>
                                            <td><b>{{ $group->payment }}</b></td>
                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
