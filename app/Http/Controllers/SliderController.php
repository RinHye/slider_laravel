<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add(Request $request) {
		$post = new Slider;
		$post->content = $request->slide_content;
		$post->save();
		return redirect('slider');
    }
    /*
    public function modify(Request $request) {
		$post->content = $request->slide_content;
		$post->save();
		return redirect('slider');
    }
    public function delete(Request $request) {
		$post = new Slider;
		$post->content = $request->slide_content;
		$post->save();
		return redirect('slider');
	}*/
}
