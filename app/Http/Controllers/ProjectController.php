<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Certification;
use App\Models\Project_Images;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.newproject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'details' => 'required',
            'client' => 'required',
            'technologies_used' => 'required',
            'url' => 'required'
        ]);
        $data = new Project();
        if ($request->file('image')){
           $file = $request->file('image');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/images'),$filename);
           $data['image'] = $filename;
        }
        $data->category = $request ->get('category');
        $data->technologies_used = $request ->get('technologies_used');
        $data->project_name = $request ->get('project_name');
        $data->client = $request ->get('client');
        $data->url = $request ->get('url');
        $data->details = $request ->get('details');

        $data->save();
       
         if ($request->file('gallery')){
           $files = $request->file('gallery');
           foreach ($files as $file) {
              $images = new Project_Images;
              $image_name = md5(rand(1000,1000));
              $ext = strtolower($file->getClientOriginalExtension());
              $filename = date('YmdHi').$file->getClientOriginalName();
              $file->move(public_path('public/images'),$filename);
              $images->image = $filename;
              $images->project_id = $data->id;
              $images->save();
           }
         ;

           
        }
        
        //$data->gallery = Project::insert($images);
        return redirect('dashboard')->with('success','profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $projects = Project::all();
        return view('projects.projects',compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = Project::all()->where('id',$id);
        $project_images = Project_Images::all()->where('project_id',$id);
        return view('projects.more_details',compact('details','project_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function moreDetails(Request $request, $id)
    {
        $details = Project::all()->where('id',$id);
        $project_images = Project_Images::all()->where('project_id',$id);
        //print_r($project_images);
        return view('index.projects',compact('details','project_images'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
         $project->delete();
         return view('pages.dashboard')->with('success','Project deleted successfully');
    }
      public function projectMore($id){
       // $projects = Project::all()->where('id',$id);
       // return view('project.more_details',compact('projects'));

    }
    
    
}
