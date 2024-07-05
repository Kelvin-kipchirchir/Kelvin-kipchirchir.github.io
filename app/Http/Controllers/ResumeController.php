<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewEducation()
    {
     
        $education = Education::all();
        if ($education->isEmpty()) {
            return view('resume.neweducation');
        }
      return view('resume.myeducation',compact('education'));
    }
    public function viewSkills()
    { 
        $skills = Skill::all();
        if ($skills->isEmpty()) {
            return view('resume.newskill');
        }
        return view('resume.myskills',compact('skills'));
    }
    public function viewExperience()
    {
        $experiences = Experience::all();
        if ($experiences->isEmpty()) {
            return view('resume.newexperience');
        }
        return view('resume.myexperience',compact('experiences'));
    }
     public function viewCertificate()
    {
         $certification = Certification::all();
         if ($certification->isEmpty()) {
            return view('resume.newcertification');
        }
        return view('resume.mycertification',compact('certification'));
    }
        //return view('index.mycertification',compact('certification'));

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSkills()
    {
         $skills = Skill::all();
         $certification = Certification::all();
        return view('index.myskills',compact('skills','certification'));

    }
      public function showExperience()
    {
         $experience = Experience::all();
        return view('index.myexperience',compact('experience'));

    }  public function showEducation()
    {
         $education = Education::all();
        return view('index.myeducation',compact('education'));

    }
     
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSkill(Request $request)
    {
        $request->validate([
            'skill' => 'required',
            'category' => 'required',
            'icon' => 'required',
            'rate' => 'required'
        ]);
        $data = new Skill();
        if ($request->file('icon')){
           $file = $request->file('icon');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/images'),$filename);
           $data['icon'] = $filename;
        }
        $data->skill = $request ->get('skill');
        $data->category = $request ->get('category');
        $data->rate = $request ->get('rate');
        $data->save();
        return redirect('dashboard')->with('success','skill added successfully');
    }
     public function storeEducation(Request $request)
    {
        $request->validate([
            'course' => 'required',
            'institution' => 'required',
            'icon' => 'required',
            'start_date' => 'required',
               'end_date' => 'required',
               'location' => 'required',
                  'about' => 'required'
        ]);
        $data = new Education();
        if ($request->file('icon')){
           $file = $request->file('icon');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/images'),$filename);
           $data['icon'] = $filename;
        }
        $data->course = $request ->get('course');
        $data->institution = $request ->get('institution');
        $data->location = $request ->get('location');
        $data->start_date = $request ->get('start_date');
        $data->end_date = $request ->get('end_date');
        $data->about = $request ->get('about');
        $data->save();
        return redirect('dashboard')->with('success','skill added successfully');
    }
    public function storeExperience(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'place' => 'required',
            'icon' => 'required',
            'location' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'activities' => 'required',
            

        ]);
        $data = new Experience();
        if ($request->file('icon')){
           $file = $request->file('icon');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/images'),$filename);
           $data['icon'] = $filename;
        }
        $data->role = $request ->get('role');
        $data->place = $request ->get('place');
        $data->location = $request ->get('location');
        $data->start_date = $request ->get('start_date');
        $data->end_date = $request ->get('end_date');
         $data->activities = $request ->get('activities');
        $data->save();
        return redirect('dashboard')->with('success','skill added successfully');
    }
   
    public function  storeCertification(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'certificate' => 'required',
            'certNumber' => 'required',
            'institution' => 'required',
            'date_given' => 'required'
              
        ]);
        $data = new Certification();
        if ($request->file('certificate')){
           $file = $request->file('certificate');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/documents'),$filename);
           $data['certificate'] = $filename;
        }
        $data->name = $request ->get('name');
        $data->institution = $request ->get('institution');
        $data->certNumber = $request ->get('certNumber');
        $data->date_given = $request ->get('date_given');
        $data->save();
        return redirect('dashboard')->with('success','certificate added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function newSkill()
    {
        return view('resume.newskill');
    }
    public function newExperience()
    {
        return view('resume.newexperience');
    }
      public function newCertification()
    {
        return view('resume.newcertification');
    }
    public function newEducation(){
        return view('resume.neweducation');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toHome()
    {
        return view('index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCert(Request $request, $id)
    {
          $request->validate([
        ]);
        $details = $request->all();
        $cert = Certification::where('certificate',$id)->update($details);
        return view('pages.dashboard')->with('success','certificate updated successfully');
    }
    public function updateSkill(Request $request, $id)
    {
          $request->validate([
        ]);
        $details = $request->all();
        $cert = Skill::where('skill',$id)->update($details);
        return view('pages.dashboard')->with('success','certificate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function certMore($id){
        $certs = Certification::all()->where('id',$id);
        return view('cert.morecertificates',compact('certs'));

    }
     public function  skillMore($id){
        $skills = Skill::all()->where('id',$id);
        return view('resume.moreskill',compact('skills'));

    }
   
    public function destroyExperience($id)
    {
        $experience=Experience::find($id);
         $experience->delete();
         return view('pages.dashboard')->with('success','Project deleted successfully');
    }
      public function moreExperience($id){
        $experiences = Experience::all()->where('id',$id);
        return view('resume.moreexperience',compact('experiences'));

    }
    
    public function updateExperience(Request $request, $id)
    {
          $request->validate([
        ]);
        $details = $request->all();
        $experience = Experience::where('id',$id)->update($details);
        return view('pages.dashboard')->with('success','certificate updated successfully');
    }
     public function destroyCert($id)
    {
        $cert=Certification::find($id);
         $cert->delete();
         return view('pages.dashboard')->with('success','certification deleted successfully');
    }
}
