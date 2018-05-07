<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
class noteFound
{
    public function compose(View $view){
    $view->width('variable','variable');
}
}