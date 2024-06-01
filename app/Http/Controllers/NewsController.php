<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newss = News::query()
        ->where("user_id", request()->user()->id)
        ->orderBy("created_at", "DESC")->paginate(10);
        return view("news.index", [
            "newss" => $newss
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "status" => "required",
        ]);

        $data["user_id"] = request()->user()->id;

        $imageName = null;

        if($request->banner_image != null){
            $imageObject = $request->banner_image;

            $imageExtension = $imageObject->getClientOriginalExtension();
            $newImageName = time().".".$imageExtension;

            $imageObject->move(public_path("images"), $newImageName);

            $imageName = $newImageName;
        }
        
        $data["banner_image"] = $imageName;

        News::create($data);

        return to_route('news.create')->with("success", "News created");
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        if($news->usr_id != request()->user()->id){
            abort(403);
        }
        return view("news.show", [
            "news" => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view("news.edit", [
            "news" => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "status" => "required",
        ]);

        if($request->banner_image != null){

            $imageName = null;
            
            $imageObject = $request->banner_image;

            $imageExt = $imageObject->getclientOriginalExtension();

            $newImageName = time() .".".$imageExt;

            $imageObject->move(public_path('images'), $newImageName);

            $imageName = $newImageName;

            $data["banner_image"] = $imageName;
        }

        $news->update($data);

        return to_route('news.show', $news)->with("success", "News Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return to_route("news.index")->with("success", "News Deleted");
    }
}
