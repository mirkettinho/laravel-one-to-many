<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::all();
      return view("admin.projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $form_data = $request->all();

        // verifica esistenza image -> primo parametro chiave, secondo è dove la cerco
        if(array_key_exists("image", $form_data)){
          // nome originale image
          $form_data["image_original_name"] = $request->file("image")->getClientOriginalName();
          // salvo image dentro uploads e salvo il percorso
          $form_data["image_path"] = Storage::put("uploads", $form_data["image"] );
        }


        $new_project = new Project();
        $form_data['slug'] = Project::generateSlug($form_data['title']);
        $new_project->fill($form_data);
        $new_project->save();

        return redirect()->route("admin.projects.show", $new_project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view("admin.projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
      return view("admin.projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $form_data = $request->all();

        if($form_data['title'] !== $project->title ){

          $form_data['slug'] = Project::generateSlug($form_data['title']);
        }else{
          $form_data['slug'] = $project->slug;
        }

        // verifico esistenza image
        if(array_key_exists("image", $form_data)){

          // se esiste, elimino quella vecchia
          if($project->image_path){
            Storage::disk("public")->delete($project->image_path);
          }
          // nome originale image
          $form_data["image_original_name"] = $request->file("image")->getClientOriginalName();
          // salvo image dentro uploads e salvo il percorso
          $form_data["image_path"] = Storage::put("uploads", $form_data["image"]);
        }



        $project->update($form_data);

        return redirect()->route("admin.projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

      if($project->image_path){
        Storage::disk("public")->delete($project->image_path);
      }


      $project->delete();

      return redirect()->route("admin.projects.index")->with("deleted", "il progetto $project->title é stato eliminato con successo");
    }
}
