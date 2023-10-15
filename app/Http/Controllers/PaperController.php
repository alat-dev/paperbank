<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use App\Http\Requests\StorePaperRequest;
use App\Http\Requests\UpdatePaperRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\FoS;
use App\Models\University;
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

    public function viewPapers(){
        return view('papers',[
            'user' => auth()->user(),
            'page_title' => "Search for Papers",
            'papers' => Paper::paginate(10),
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
            'fos_id' => 'required|int',
            'course_id' => 'required|int',
            'category_id' => 'required|int',
            'year' => 'required|int',
            
        ]);

        
        $validate["user_id"] = auth()->user()->id;
        $validate["view_count"]=$validate["like_count"] =$validate["dislike_count"] =0;
        $validate["pdf_file"] = $request->file('pdf_file')->store('papers_pdf');

        Paper::create($validate);
        return redirect()->intended('/');
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
            "page_title" => "Paper ".$paper->title
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaperRequest  $request
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaperRequest $request, Paper $paper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper)
    {
        //
    }
}
