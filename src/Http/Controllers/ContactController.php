<?php 

namespace Tum\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tum\Contact\Http\Models\Contact;

class ContactController extends Controller {

    public function getIndex()
    {
        return view('contact::index');
    }

    public function postIndex(Request $request)
    {
        Contact::create($request->all());
        return redirect(route('contact'));
    }

}