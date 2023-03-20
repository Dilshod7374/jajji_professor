@extends('admin.layouts.layout')

@section('parents', 'active')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.parents.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>name : </td>
                                            <td><b>{{ $parent->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>surname : </td>
                                            <td><b>{{ $parent->surname }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>img : </td>
                                            <td><b><img src="/images/{{ $parent->img }}" width="60" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_uz : </td>
                                            <td><b>{{ $parent->comment_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_en : </td>
                                            <td><b>{{ $parent->comment_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_ru : </td>
                                            <td><b>{{ $parent->comment_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_uz : </td>
                                            <td><b>{{ $parent->rank_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_en : </td>
                                            <td><b>{{ $parent->rank_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_ru : </td>
                                            <td><b>{{ $parent->rank_ru }}</b></td>
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
