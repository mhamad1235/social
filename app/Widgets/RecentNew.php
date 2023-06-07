<?php

namespace App\Widgets;
use App\Models\Lokk;
use Arrilot\Widgets\AbstractWidget;

class RecentNew extends AbstractWidget
{
    public $reloadTimeout = 10;
    protected $config = [];
  
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
       $id=58;
        $post=Lokk::where('uid' , $id)->get();
      
        return view('RecentNew', [
            'config' => $this->config,
            'post'=>$post
        ]);
    }
}