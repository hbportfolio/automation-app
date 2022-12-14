<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'user_count' => DB::table('visitors')->count(),
            'messages' => DB::table('contacts')->count(),
            'newsletters' => DB::table('newsletters')->count()
        ]);
    }

    public function messages() {
        return view('admin.messages', [
            'messages' => DB::table('contacts')->get()
            // ->filter(request(['filter-date1', 'filter-date2', 'filter-name', 'filter-email', 'filter-company', 'filter-status']))
            // ->paginate(25),
        ]);
    }

    public function login() {
        return view('admin.login', []);
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/admin')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('message', 'You have been logged out.');
    }

    public function edit(Contact $contact) {
        return view('admin.edit', ['message' => $contact]);
    }

    public function update(Request $request, Contact $updated_contact) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            'message' => 'required',
            'status' => 'required'
        ]);

        $updated_contact->update($formFields);

        return redirect('/admin/messages');
    }

    public function articles() {
        return view('admin.articles', [
            'articles' => DB::table('articles')->get()
        ]);
    }

    public function newArticle() {
        return view('admin.create-article');
    }

    public function newArticleCreate(Request $request) {
        $formFields = $request->validate([
            'article_head' => 'required',
            'article_body' => 'required',
            'article_slug' => 'required'
        ]);
        
        Article::create($formFields);

        return redirect('/admin/articles')->with('message', 'Article created');
    }

    public function editArticle(Article $article) {
        return view('admin.edit-article', [
            'article' => $article
        ]);
    }

    public function updateArticle(Request $request, Article $updated_article) {
        $formFields = $request->validate([
            'article_head' => 'required',
            'article_body' => 'required',
            'article_slug' => 'required'
        ]);

        $updated_article->update($formFields);

        return redirect('/admin/articles');
    }


    public function destroyArticle(Article $delete_article) {
        $delete_article->delete();
        return back()->with('message', 'Expense deleted seccessfully.');
    }
}
