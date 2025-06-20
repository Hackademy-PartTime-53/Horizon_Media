<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class HomeController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return [
            new Middleware('auth', except: ['index'] ),
        ];    }
    public function index(){
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('home', compact('articles'));
    }
    public function render()
    {
    return view('components.hero-section-title');
    }

    public function careers()
{
    return view('careers');
}

public function careerssubmit(Request $request)
{
    $request->validate([
        'role' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    $user=Auth::user();
    $role=$request->role;
    $email=$request->email;
    $message=$request->message;
    $info=compact('role', 'email', 'message');

    Mail::to('admin@thehorizonmedia.it')->send(new CareerRequestMail($info));

    switch($role){
        case 'admin':
            $user->is_admin=NULL;
            break;
        case 'revisor':
            $user->is_revisor=NULL;
            break;
        case 'writer':
            $user->is_writer=NULL;
            break;
       
    }

    $user->update();
    return redirect(route('careers'))->with('success', 'Email inviata con successo');

}
}
