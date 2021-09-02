<?php
// format class

    class Format {
        // date formation
        public function formatDate($date){
            return date('F j,Y, g:i a',strtotime($date));
        }
        //readmore formation
        public function textShorten($text,$limit = 400){
            $text = $text." ";
            $text = substr($text, 0 , $limit);
            $text = substr($text, 0 , strrpos($text, ' '));
            $text = $text."...";
            return $text;
        }

        public function title(){
            $path = $_SERVER['SCRIPT_FILENAME'];
            $title = basename($path, '.php');
            //$title = str_replace('_', ' ', $title);
            if($title == 'index'){
                $title = 'home';
            }elseif($title == 'contact'){
                $title = 'contact';
            }
            return $title = ucwords($title);
        }
    }
?>