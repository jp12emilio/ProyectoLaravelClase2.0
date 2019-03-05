<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Games;
use Illuminate\Http\Request;
class CatalogController extends Controller {
	public function getIndex() {
		return view('catalog.index')->with('arrayJuegos', Games::all());
	}
	public function getShow($id) {
		return view('catalog.show')->with('arrayJuegos', Games::findOrFail($id));
	}
	public function getCreate() {
		return view('catalog.create');
	}
	public function getEdit($id) {
		return view('catalog.edit')->with('juego', Games::findOrFail($id));
	}
	public function postCreate(Request $request) {
		$game = new Games;
		$game->name = $request->input('name');
		$game->price = $request->input('price');
		$game->category = $request->input('category');
		$game->image = $request->input('image');
		$game->launch = $request->input('launch');
		$game->creator = $request->input('creator');
		$game->editor = $request->input('editor');
		$game->video = $request->input('video');
		$game->key = $request->input('key');
		$game->description = $request->input('description');
		$game->save();
		
		return redirect()->action('CatalogController@getIndex');
	}
	public function putEdit(Request $request, $id) {
		$game = Games::findOrFail($id);
		$game->name = $request->input('name');
		$game->price = $request->input('price');
		$game->category = $request->input('category');
		$game->image = $request->input('image');
		$game->launch = $request->input('launch');
		$game->creator = $request->input('creator');
		$game->editor = $request->input('editor');
		$game->video = $request->input('video');
		$game->key = $request->input('key');
		$game->description = $request->input('description');
		$game->save();
		
		return view('catalog.show')->with('arrayJuegos', Games::findOrFail($id));
	}
}
?>