@extends('admin.layouts.layout')

@section('teachers')
    active
@endsection

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section">
        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $teacher->name }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">surname</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="surname"
                                            value="{{ $teacher->surname }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">rank_uz</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="rank_uz"
                                            value="{{ $teacher->rank_uz }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">rank_en</label>
                                  <div class="col-sm-12 col-md-7">
                                      <input type="text" class="form-control" name="rank_en"
                                          value="{{ $teacher->rank_en }}">
                                  </div>
                              </div>

                              <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">rank_ru</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="rank_ru"
                                        value="{{ $teacher->rank_ru }}">
                                </div>
                            </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">img</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="img" id="image-upload" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <img src="/images/{{ $teacher->img }}" width="60" alt="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">telegram</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="telegram"
                                            value="{{ $teacher->telegram }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">facebook</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ $teacher->facebook }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">instagram</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="instagram"
                                            value="{{ $teacher->instagram }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
