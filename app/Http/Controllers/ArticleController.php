<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('query');
        
        $articles = Article::where('status', 'approved')
            ->where(function($query) use ($keyword) {
                $query->where('title', 'LIKE', "%{$keyword}%")
                      ->orWhere('content', 'LIKE', "%{$keyword}%");
            })->get();
        
        return view('articles.search_result', compact('articles', 'keyword'));
    }

    public function index()
    {
        $articles = Article::where('status', 'approved')->latest()->get();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        if (auth()->user()->role === 'siswa') {
            return redirect()->route('articles.index')->with('error', 'Anda tidak memiliki akses untuk membuat artikel.');
        }

        return view('articles.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->role === 'siswa') {
            return redirect()->route('articles.index')->with('error', 'Anda tidak memiliki akses untuk membuat artikel.');
        }

        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'content' => $request->content,
            'status' => 'pending',
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diajukan! Menunggu ACC Admin.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        if ($article->status !== 'approved' && auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('articles.show', compact('article'));
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index');
    }

    public function approve($id)
    {
        $article = Article::findOrFail($id);
        $article->update(['status' => 'approved']);

        return redirect()->back()->with('success', 'Artikel berhasil di-ACC!');
    }
}