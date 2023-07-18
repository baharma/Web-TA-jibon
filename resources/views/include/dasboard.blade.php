@extends('layout.apps')
@section('content')
    <div class="container p-3">

        <div class="card mb-3 mt-5" id="card-divace-1" style="">
            <div class="row g-0"  id="card-data">
                <div class="col-md-4" id="card-image-id">
                    <img src="" class="img-fluid rounded-start" id="image-divace1" alt="..." style="width: 300px; height: 300px;">
                </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1  id="card-title-divace-1">Divace 1</h1>
                  <h2 class="card-text h1" id="card-text-divace-1">Aman tidak ada kebocoran</h2>
                  <p class="h4 card-text"><small class="text-muted h3" id="card-text-1-small">tetap perhatikan dan tidak sampai kehilangan fokus</small></p>
                  <p class="h2 card-text" id="status-level-divace-1"></p>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-3 mt-5 " style="">
            <div class="row g-0"  id="card-data-sacond">
                <div class="col-md-4" id="card-image-id-sacond">
                    <img src="" class="img-fluid rounded-start" id="image-divace2" alt="..." style="width: 300px; height: 300px;">
                </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1  id="card-title-divace-sacond">Divace 2</h1>
                  <h2 class="card-text h1" id="card-text-divace-sacond">Aman tidak ada kebocoran</h2>
                  <p class="h4 card-text"><small class="text-muted h3" id="card-text-sacond-small">tetap perhatikan dan tidak sampai kehilangan fokus</small></p>
                  <p class="h2 card-text" id="status-level-divace-sacond"></p>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-3 mt-5" style="">
            <div class="row g-0"  id="card-data-third">
                <div class="col-md-4" id="card-image-id-third">
                    <img src="" class="img-fluid rounded-start" id="image-divace3" alt="..." style="width: 300px; height: 300px;">
                </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h1  id="card-title-divace-third">Divace 3</h1>
                  <h2 class="card-text h1" id="card-text-divace-third">Aman tidak ada kebocoran</h2>
                  <p class="h4 card-text"><small class="text-muted h3" id="card-text-third-small">tetap perhatikan dan tidak sampai kehilangan fokus</small></p>
                  <p class="h2 card-text" id="status-level-divace-third"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a href="{{route('history')}}" class="btn btn-primary btn-lg btn-block">History</a>
          </div>

    </div>
@endsection


@push('script')
    <script src="{{asset('js/dasboard.js')}}"></script>

@endpush
