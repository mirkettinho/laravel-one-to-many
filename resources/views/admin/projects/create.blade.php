@extends("layouts.app")




@section("content")



<form action="{{route("admin.projects.store")}}" method="POST"  enctype="multipart/form-data" scroll>
  @csrf

  @if ($errors->any())

  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  {{-- 1 --}}
  <div class="mb-3">
    <label for="title" class="form-label">Titolo *</label>
    <input
    type="text"
    class="form-control @error("title") is-invalid @enderror"
    id="title"
    name="title"
    placeholder="inserisci il titolo"
    value="{{old("title")}}"
    >
    @error("title") <p class="text-danger">{{$message}}</p> @enderror
  </div>
  {{-- 2 --}}
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <input type="text-area" class="form-control" id="description" name="description" placeholder="inserisci la descrizione"
    value="{{old("description")}}"
    >
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Immagine</label>
    <input type="file" onchange="anteprima(event)"  class="form-control mb-4" id="image" name="image" placeholder="inserisci la descrizione"
    value="{{old("image")}}"
    >
    <img width="500" id="prev-image" src="" alt="">
  </div>
  {{-- 3 --}}
  <div class="mb-3">
    <label for="languages" class="form-label">Linguaggio</label>
    <input type="text" class="form-control" id="languages" name="languages" placeholder="inserisci il linguaggio"
    value="{{old("languages")}}"
    >
  </div>
  {{-- 4 --}}
  <div class="mb-3">
    <label for="end_date" class="form-label">Data Consegna</label>
    <input
    type="text"
    class="form-control"
    id="end_date"
    name="end_date"
    placeholder="inserisci la data di consegna"
    value="{{old("end_date")}}"
    >
  </div>

  <button type="submit" class="btn btn-primary">Aggiungi Prodotto</button>
</form>



<script>
  function anteprima(event){
    const tagImage = document.getElementById("prev-image");
    tagImage.src = URL.createObjectURL(event.target.files[0]);
  }
</script>

@endsection
