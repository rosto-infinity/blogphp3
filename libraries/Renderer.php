<?php
class Renderer {
    //render('articles/show')
    public static function render(string $path, $variables=[]){
        extract($variables);   
        ob_start();
        require('templates/articles/' . $path . '.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout.html.php');
    }
}