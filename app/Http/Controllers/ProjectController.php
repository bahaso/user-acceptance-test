<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Project;
use App\Feature;
use App\Action;
use App\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class ProjectController extends Controller
{
    public function projectList(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $projects = DB::table('project_list')->select('id','project_name','platform','version')->get();

            return view('frontend.projects')->with('projects', $projects);
        }
    }

    public function createProject(Request $req){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{

            $data =  new Project();
            $data->project_name = $req->project_name;
            $data->platform = $req->platform;
            $data->version = $req->version;
            $data->save();
            return redirect('/projects')->with('alert-success','Project Created');
    
        }
        
    }

    public function deleteProject($id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $projects = DB::table('project_list')->select('id','project_name','platform','version')->get();
            DB::delete('delete from project_list where id = ?',[$id]);
            return redirect('/projects');
        }
    }

    public function createFeatureForm(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('frontend.addfeature');
        }
    }

    public function createFeature(Request $req,$project_id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = new Feature;
            $data->project_id=$project_id;
            $data->features_name=$req->features_name;
            $data->description=$req->description;
            $data->save();
            return redirect("/projects/{$project_id}/featureList");
        }
    }

    public function deleteFeature($project_id,$id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $features = DB::table('features')->select('id','features_name','description')->get();
            DB::delete('delete from features where id = ?',[$id]);
            return redirect("/projects/{$project_id}/featureList");
        }
    }

    public function featureList($project_id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $features = DB::table('features')->select('id','features_name','description')->where('project_id',$project_id)->get();
            
            return view('frontend.featureList',['features'=> $features,'project_id'=>$project_id]);
        }
    }

    public function actionList($feature_id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        
        else{
            $features= Feature::with(['actions'=>function($query){
                $query->with('cases');
            }])->get();
            // dd($features->toArray());
            // $features= DB::table('features')->select('id','features_name','description')->get();
            // $action=DB::table('action')->select('id','action_name','type','feature_id')->where('feature_id',$feature_id)->get();
            
            // return view('frontend.actionlist',['testcase'=>$case,'features'=>$features]);
            return view('frontend.actionlist', compact('features'));
        }
    }

    public function createAction(Request $req,$feature_id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = new Action;
            $data->feature_id=$req->feature_id;
            $data->action_name=$req->action_name;
            $data->type=$req->type;
            $data->save();
            return redirect("/featureList/{$feature_id}/actionList");

        }

    }

    public function createActionForm(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('frontend.addaction');
        }
    }

    public function createCase(Request $req,$action_id,$feature_id){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = new TestCase;
            $data->feature_id=$feature_id;
            $data->action_id=$req->action_id;
            $data->steps=$req->steps;
            $data->expectation=$req->expectation;
            $data->status="";
            $data->save();
            return redirect("/featureList/{$feature_id}/actionList");
        }
    }

    public function createCaseForm(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('frontend.addcase');
        }

    }

    public function createProjectForm(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('frontend.createproject');
        }
    }

   
}
