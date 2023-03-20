@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>name : </td>
                                            <td><b>{{ $teacher->name }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>surname : </td>
                                            <td><b>{{ $teacher->surname }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_uz : </td>
                                            <td><b>{{ $teacher->rank_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_en : </td>
                                            <td><b>{{ $teacher->rank_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>rank_ru : </td>
                                            <td><b>{{ $teacher->rank_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>img : </td>
                                            <td><b><img src="/images/{{ $teacher->img }}" width="60" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>telegram : </td>
                                            <td><b>{{ $teacher->telegram }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>facebook : </td>
                                            <td><b>{{ $teacher->facebook }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>instagram : </td>
                                            <td><b>{{ $teacher->instagram }}</b></td>
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
