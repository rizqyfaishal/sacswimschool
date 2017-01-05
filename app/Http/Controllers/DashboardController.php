<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth');
    }

    public function update(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        if(!Hash::check($request->input('old_password'), $user->password)) {
            Session::flash('change_password_success','Password lama tidak valid!');
            return redirect()->back();
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        Session::flash('change_password_success','Penggantian Password Sukses!');
        return redirect()->back();
    }

    public function index()  {
        $this->page->setTitle('Dashboard');
        return view('pages.dashboard.index')->with([
            'page' => $this->page
        ]);
    }
}
