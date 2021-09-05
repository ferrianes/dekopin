<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
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
        $data['path'] = $request->file('image')->store(
            "assets/gallery",
            'public'
        );

        Gallery::create($data);

        return redirect()->route('admin.gallery.index')->with('status', 'add-success');
    }
}
