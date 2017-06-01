<?php

namespace App\Http\Controllers;

use App\Article;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index() {
        // 查询所有Article
        // $articles = Article::all();
        // 最新的会放到上面
        // $articles = Article::latest()->get();
        // 只显示当前时间之前发布的文章
        // $articles = Article::latest()->where('published_at','<=',Carbon::now())->get();
        // 抽取函数 Article->scopePublished()
        // dd(Auth::user());
        $articles = Article::latest()->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        // $article = Article::find($id);
        $article = Article::findOrFail($id);
        return view('articles.article', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Requests\ArticlesRequest $request) {
        // 调试
        // dd($request->all());
        // 获取单个属性
        // $request->get('field_name');
        // 1. 接受post数据
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        // dd($input);
        // $input['published_at'] = Carbon::now();
        // 2. 存入数据库
        Article::create($input);
        // Article::create(array_merge(['user_id'=>Auth::user()->id], $request->all()));
        // 3. 重定向
        return redirect('/articles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        // dd($article);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Requests\ArticlesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ArticlesRequest $request, $id)
    {
        // dd($request);
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/articles');
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
