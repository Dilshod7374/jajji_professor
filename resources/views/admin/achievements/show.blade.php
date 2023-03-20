@extends('admin.layouts.layout')

@section('wins', 'active')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.achievements.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>name : </td>
                                            <td><b>{{ $achievement->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>surname : </td>
                                            <td><b>{{ $achievement->surname }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>title_uz : </td>
                                            <td><b>{{ $achievement->title_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>title_en : </td>
                                            <td><b>{{ $achievement->title_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>title_ru : </td>
                                            <td><b>{{ $achievement->title_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>img : </td>
                                            <td><b> <img src="/images/{{ $achievement->img }}" width="60"
                                                        alt="">
                                                </b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_uz : </td>
                                            <td><b>{{ $achievement->comment_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_en : </td>
                                            <td><b>{{ $achievement->comment_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_ru : </td>
                                            <td><b>{{ $achievement->comment_ru }}</b></td>
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
