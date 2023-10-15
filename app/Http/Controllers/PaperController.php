<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use App\Http\Requests\StorePaperRequest;
use App\Http\Requests\UpdatePaperRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\FoS;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index',[
            'user' => auth()->user(),
            'page_title' => "Home Page"
        ]);
    }

    public function viewPapers(Request $request){
        return view('papers',[
            'user' => auth()->user(),
            'page_title' => "Search for Papers",
            'papers' => Paper::latest()->filter(request(['search','category_id','year','university_id','course_id']))->paginate(20),
            'universities' => University::orderBy('name')->get(),
            'fo_s' => FoS::orderBy('name')->get(),
            'courses' => Course::orderBy('name')->get(),
            'categories' =>Category::orderBy('name')->get(),
        ]);
    }

    public function viewCreate(){
        return view('create',[
            'user' => auth()->user(),
            'page_title' => 'Create Paper',
            'universities' => University::orderBy('name')->get(),
            'fo_s' => FoS::orderBy('name')->get(),
            'courses' => Course::orderBy('name')->get(),
            'categories' =>Category::orderBy('name')->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $validate = $request->validate([
            'title' => 'required|max:255|string',
            'university_id' => 'required|int',
            'course_id' => 'required|int',
            'category_id' => 'required|int',
            'year' => 'required|int',
            'pdf_file' => 'file|required',
            'description' => 'string'
        ]);
        
        $validate["description"] = $request->description;
        $validate["user_id"] = auth()->user()->id;
        $validate["view_count"] = $validate["like_count"] = $validate["dislike_count"] = 0;
        if($validate["pdf_file"] = $request->file('pdf_file')->store('papers_pdf')){
            Paper::create($validate);
            return redirect()->intended('/');
        };

        return redirect()->back();
        // dd($validate["description"]);
        
    }

    public function showPaperList(User $user){

        return view('profile',[
            "user_id" => $user->id,
            "page_title" => $user->name.' Paper',
            "papers" =>Paper::whereBelongsTo($user)->paginate(20)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper)
    {
        return view('paper', [
            "paper" => $paper,
            "page_title" => "Paper ".$paper->title,
           
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function edit(Paper $paper)
    {   
        return view('edit',[
            'paper' => $paper,
            'page_title' => 'Edit Paper',   
            'user' => auth()->user(),
            'page_title' => 'Create Paper',
            'universities' => University::orderBy('name')->get(),
            'fo_s' => FoS::orderBy('name')->get(),
            'courses' => Course::orderBy('name')->get(),
            'categories' =>Category::orderBy('name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaperRequest  $request
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paper $paper)
    {   
        
        $validate = $request->validate([
        'title' => 'required|max:255|string',
        'university_id' => 'required|int',
        'course_id' => 'required|int',
        'category_id' => 'required|int',
        'year' => 'required|int',
        ]);

        $validate["description"] = $request->description;
        $validate["user_id"] = auth()->user()->id;
        $validate["view_count"]= $paper->view_count;
        $validate["like_count"]= $paper->like_count;
        $validate["dislike_count"] = $paper->dislike_count;
        // dd($validate);
        if($request["pdf_file"] != null){
            $validate["pdf_file"] = $request->file('pdf_file')->store('papers_pdf');
        } else {    
            $validate["pdf_file"] = $paper->pdf_file;
        }

        

        if(Paper::where('id',$paper->id)->update($validate)){
            return redirect('/')->with('success_message', 'Update successful');
        } else {
            return redirect('/')->with('failed_message', 'Update failed');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {  
        // dd(auth()->user()->id, $paper->user_id);    
        if(auth()->user()->id != $paper->user_id) abort(404);
        if(Paper::destroy($paper->id)){
            return redirect('/users/'.auth()->user()->username)->with('success_message', 'Paper deleted');
        } else {
            return redirect('/users/'.auth()->user()->username)->with('failed_message', 'Failed to delete');
        }
    }
}
