@extends("layouts.guest")


@section("title")
  Portfolio
@endsection

@section("content")

<div class="d-flex flex-wrap ">

  @foreach ($projects as $project)

  <div class="d-flex card-portfolio mx-4 mb-4">
    <div class="card-portfolio-image">
      <img class="" src="{{asset('storage/' . $project->image_path)}}">
        <div class="card-portfolio-description py-2">
          <div class="card-portfolio-title mb-1">{{$project->title}}</div>
        </div>
        <div class="tag">
          <span class="badge badge-pill">
            #photography
          </span>
        </div>
    </div>
  </div>
  @endforeach

</div>


@endsection
