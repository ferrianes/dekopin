<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, News $news)
    {
        $data = $request->all();
        if ($request->has('image')) {
            $data['image'] = $request->file('image')->store(
                "assets/news/$news->id",
                'public'
            );
        }

        Storage::disk('public')->delete($news->image);

        $news->update($data);

        return redirect()->route('admin.news.index')->with('status', 'edit-success');
    }
}
