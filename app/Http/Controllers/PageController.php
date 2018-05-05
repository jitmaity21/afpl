<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Page;

class PageController extends Controller
{

    /**
     * Show public single pages
     * @return [type] [description]
     */
    public function viewSingle(Request $request)
    {
      //$he = Page::findOrFail($request->slug);
      $page = Page::where('slug', $request->slug)->where('status', 1)->firstOrFail();
      if($page){
        $page->url = route('page.single',$page->slug);
        return view( $this->getTemplate($page->template),['page' => $page]);
      }

    }

    /**
     * get template;
     * if template exist return template else return default template
     * @param  string $template [template path]
     * @return [type]           [string]
     */
    public function getTemplate($template = "")
    {
      if($template != "" && View::exists($template)){
        return 'pages.'.$template;
      }else{
        return 'pages.default';
      }
    }



}
