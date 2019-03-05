<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function getIndex() {
		return view('user.indexuser')->with('usuarios', User::all());
	}

	public function getShow($id) {
		return view('user.showuser')->with('usuario', User::findOrFail($id));
	}

	public function getCreate() {
		return view('user.createuser');
	}

	public function getEdit($id) {
		return view('user.edituser')->with('usuario', User::findOrFail($id));
	}
	public function postCreate(Request $request) {
		$user = new User;
		$user->name = $request->input('name');
		$user->subname = $request->input('subname');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->address = $request->input('address');
		$user->admin = "0";
		$user->user = $request->input('user');
		$user->save();
		
		return redirect()->action('CatalogController@getIndex');

	}
	public function putEdit(Request $request, $id) {
		$user = User::findOrFail($id);
		$user->name = $request->input('name');
		$user->subname = $request->input('subname');
		$user->email = $request->input('email');
		$user->password = bcrypt($request->input('password'));
		$user->address = $request->input('address');
		$user->admin = $request->input('admin');
		$user->user = $request->input('user');
		$user->save();
		return view('user.edituser')->with('usuario', User::findOrFail($id));
	}
}

?>