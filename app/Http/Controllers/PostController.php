<?php 

namespace App \ Http \ Controllers; 
use App\Posts;
use Illuminate\Http\Request;

class PostController extends Controller 
{ 
    /** 
     * Create a new controller instance. 
     * 
     * @return void 
     */ 
    public function index(){
		return response()->json(Posts::all());
	}
    public function create_post(Request $request){
		$this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'description' => 'required'
        ]);

		 $post = Posts::create($request->all());
       return response()->json($post, 201);
	}
	public function delete_post($id){
		 Posts::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
	}
	public function edit_post($id, Request $request){
		$post = Posts::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, 200);
	}
	public function read_post($id){
		return response()->json(Posts::find($id));
	}
}