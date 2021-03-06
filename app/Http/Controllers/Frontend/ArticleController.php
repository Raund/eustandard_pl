<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;

use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Text;
use App;
use Illuminate\Support\Facades\Response;
use Validator;
use Mail;
use Redirect;
use Session;
use Storage;
//use Illuminate\Contracts\View\View;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($lang, $type = 'main')
	{
		$company = null;
		$news = null;
		$works = null;
		$slides = null;
		$gallery = null;
		switch($type) {
			case 'main':
				$slides = Category::where('link', '=', 'slider')
					->first()
					->articles()
					->where('active', '=', 1)
					->get()
					->sortByDesc("priority");
				//dd($slides);
				break;
			case 'company':
				break;
			case 'news':
				break;
			case 'work':
				break;
			case 'gallery':
				break;
			case 'slider':
				break;
		}
		
		 $meta = view()->share('meta', Article::where('name', '=', 'meta.'.$type)->first());


		return view('frontend.'.$type, [
			'slides' => $slides,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($lang,$type, $id)
	{
		$article = Article::find($id);
		view()->share('meta', $article);
		return view('frontend.article', [
			'article' => $article,
		]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function send(Request $request){
		$validator = Validator::make($request->all(), [
		'name' => 'required|max:50',
		'mobile' => 'required|max:20',
		'email' => "email",
		'message_body' => 'required',
		]);
		if ($validator->fails()) {
			return Response::json(array(
				'success' => false,
				'message' => $validator->messages()->first()
			));
		}
		$all = $request->all();
		/*dd($data);*/


		Mail::send('emails.message', $all, function($message) {
			$email = Text::where("name","=","config.email")->first();
			$email = $email['description'];
			$message->to($email, 'Eurostandard')->subject('Повідомлення з сайту Eurostandard ');
		});
		return response()->json([
			"success" => true
		]);
	}
}
