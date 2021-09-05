<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->all();

        $news = News::create($data);
        $news->image = $request->file('image')->store(
            "assets/news/$news->id",
            'public'
        );
        $news->save();

        return redirect()->route('admin.news.index')->with('status', 'add-success');
    }
}
