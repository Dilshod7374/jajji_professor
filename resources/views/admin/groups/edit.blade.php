@extends('admin.layouts.layout')

@section('groups', 'active')

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
              <form action="{{ route('admin.groups.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $group->name_uz }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_en</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $group->name_en }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name_ru</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $group->name_ru }}">
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
                 <img src="/images/{{ $group->img }}" width="60" alt="">
                </div>
            </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title_uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title" value="{{ $group->title_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title_en</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title" value="{{ $group->title_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">title_ru</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title" value="{{ $group->title_ru }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">age</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="age" value="{{ $group->age }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">seat</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="seat" value="{{ $group->seat }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">course_time</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="course_time" value="{{ $group->course_time }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">payment</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="payment" value="{{ $group->payment }}">
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
