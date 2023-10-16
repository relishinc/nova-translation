<?php

namespace RelishInc\NovaTranslation;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaTranslation extends Tool
{

    /**
    * Build the menu that renders the navigation links for the tool.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return mixed
    */
    public function menu(Request $request) 
    {
        return false;
    }
    
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-translation', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-translation', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-translation::navigation');
    }
}
