<?php
    class BlogModel extends CI_Model {

        public function getAllBlogs() {
            $data = array(
                array("title" => "Title goes here"),
                array("title" => "Title goes here1"),
                array("title" => "Title goes here2"),
                array("title" => "Title goes here3"),
            );

            return $data;
        }

    }
?>