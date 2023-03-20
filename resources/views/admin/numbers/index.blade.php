@extends('admin.layouts.layout')

@section('numbers')
active
@endsection

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
              <h4>Raqamlar</h4>
              <a href="{{ route('admin.numbers.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Raqam</th>
                      <th>Sotib olgan mijoz</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($numbers) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($numbers as $item)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->human->name ?? 'Sotib olinmagan'}}</td>
                        <td>
                            <form action="{{ route('admin.numbers.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                            <a href="{{ route('admin.numbers.edit', $item->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                            <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                            </form>
                        </td>

                      </tr>
                    @endforeach

                  </tbody>
                </table>
                {{ $numbers->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection