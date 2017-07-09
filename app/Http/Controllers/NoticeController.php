<?php
namespace App\Http\Controllers;
use App\Models\Notice;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $notices = Notice::all();
        return view('notice.index')->with('notices', $notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('notice.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'photos' => 'required',
            'description' => 'required|max:255',
            'count' => 'required|max:255',
            'author_name' => 'required|max:255',
            'author_email' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $notice = Notice ::create($request->all());
     
        return redirect()->route('notices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $categories = Category::all();
        $notice = Notice::findOrFail($id);
        return view('notice.show')
        ->with('notice', $notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories = Category::all();
         $notice = Notice::findOrFail($id);
        return view('notice.edit')->with('notice', $notice)
        ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'photos' => 'required',
            'description' => 'required|max:255',
            'count' => 'required|max:255',
            'author_name' => 'required|max:255',
            'author_email' => 'required|max:255',
            'status' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
         $notice = Notice::findOrFail($id);
         $notice->fill($request->all());
         $notice->save();

        return redirect()->route('notices.show', $notice->id);
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
