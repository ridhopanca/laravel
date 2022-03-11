@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h4>All Post</h4>
      @foreach ($post as $data)
        <div class="card mb-3">
          <div class="card-header">
          {{ $data->title }}
          </div>
          <div class="card-body">
          {{ Str::limit($data->body, 100)  }}
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection