@extends('admin.layouts.layout')

@section('service', 'active')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Show Product</h4>
                            <a href="{{ route('admin.services.index') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Back</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <td>img : </td>
                                            <td><b><img src="/images/{{ $service->img }}" width="60" alt=""></b></td>
                                        </tr>

                                        <tr>
                                            <td>service_different_uz : </td>
                                            <td><b>{{ $service->service_different_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>service_different_en : </td>
                                            <td><b>{{ $service->service_different_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>service_different_ru : </td>
                                            <td><b>{{ $service->service_different_ru }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_uz : </td>
                                            <td><b>{{ $service->comment_uz }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_en : </td>
                                            <td><b>{{ $service->comment_en }}</b></td>
                                        </tr>

                                        <tr>
                                            <td>comment_ru : </td>
                                            <td><b>{{ $service->comment_ru }}</b></td>
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
