@extends('layout.apps')
@section('content')

<div class="container p-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All History</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All Level</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">device_id</th>
                    <th scope="col">Level Status</th>
                    <th scope="col">Alert Time</th>
                  </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody>
                    @foreach ($dataAll as  $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->device_id}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                      </tr>
                    @endforeach

                </tbody>

              </table>

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">device_id</th>
                    <th scope="col">Level Status</th>
                    <th scope="col">Alert Time</th>
                  </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                <tbody>
                    @foreach ($level as  $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->device_id}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->created_at}}</td>
                      </tr>
                    @endforeach

                </tbody>

              </table>
        </div>
      </div>
</div>

<style>
    .pagination-wrapper .page-link {
        font-size: 14px !important; /* Adjust the font size as needed */
        padding: 0.375rem 0.75rem  !important; /* Adjust the padding as needed */
    }

    .pagination-wrapper .page-item.disabled .page-link {
        opacity: 0.5  !important; /* Adjust the opacity for disabled links */
        pointer-events: none  !important; /* Disable pointer events for disabled links */
    }
</style>


@endsection
