<?php
    namespace Fifi\Blog;
    use \DateTime;

    class Post {

        public $id;
        public $name;
        public $content;
        public $created_at;

        public function __construct()
        {
            if(is_int($this->created_at) || is_string($this->created_at))
            {
                $this->created_at = new DateTime('@' . $this->created_at);
            }
        }

        /**
         * Renvoie un extrait de l'article
         * @return string
         */
        public function getExcerpt(): string {
            return substr($this->content, 0, 150);
        }
    }
?>