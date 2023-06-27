@extends("layouts.app")


@section("content")


<h1>{{$project->title}}</h1>
<h5><span class="badge text-bg-primary">{{$project->type?->name}}</span></h5>
<img src="{{asset("storage/" . $project->image_path)}}" alt="">
<h5>{{$project->end_date}}</h5>
<p>{{$project->description}}</p>




@endsection
