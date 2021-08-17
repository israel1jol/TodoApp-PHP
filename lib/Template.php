<?php
class Template{
    private $template_path;
    private $context = [];

    public function __construct($template){
        $this->template_path = $template;
    }

    public function __set($key, $value){
        $this->context[$key] = $value;
    }

    public function __get($key){
        return $this->context[$key];
    }

    public function __toString(){
        extract($this->context);
        chdir(dirname($this->template_path));
        ob_start();

        include basename($this->template_path);
        return ob_get_clean();
    }
}
?>