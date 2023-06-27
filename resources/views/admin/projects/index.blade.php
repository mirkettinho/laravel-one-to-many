@extends("layouts.app")

@section("content")


{{-- <div class="bg-h1 ">
  <h1>Elenco Fumetti</h1>


</div> --}}
<div class="scroll">
  @if(session("deleted"))
  <div class="alert alert-success" role="alert">
    {{session("deleted")}}
  </div>
  @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Linguaggio</th>
      <th scope="col">Data Consegna</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project )

    <tr>
      <td>{{$project->id}}</td>
      <td>{{$project->title}}</td>
      <td>{{$project->slug}}</td>
      <td>{{$project->description}}</td>
      <td>{{$project->languages}}</td>
      <td>{{$project->end_date}}</td>
      <td>
        <a class="bg-primary text-white" href="{{route("admin.projects.show", $project)}}"></i>show</a>
        <a class="bg-warning text-white" href="{{route("admin.projects.edit", $project)}}">edit</a>

        @include('admin.partials.modal')
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
