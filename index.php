<?php

    class book {

      public $title;
      public $author;
      private $numberofpages;

      function __construct($atitle,$aauthor,$apages)
      {
        $this -> title = $atitle;
        $this -> author = $aauthor;
        $this -> setnumberofpages($apages);
      }

      // function hasmorepage()
      // {
      //   if($this -> numberofpages > 400){
      //     return "$this->title has more books";
      //   }
      //   else {
      //     return "$this->title doesnt have more books";
      //   }
        function getnumberofpages(){
          return $this->numberofpages;
        }
        function setnumberofpages($page){
          if ($page > 100 ){
            return $this->numberofpages = $page;
          }
          else{
            return $this->numberofpages = "none";
          }
        }
    }

  $book1 = new book("the world war 2","vincent",400);
  $book2 = new book("Amazon world","chris",500);
  $book1 -> setnumberofpages(80);
  echo $book1-> getnumberofpages();
  echo "<br>";
  echo $book2-> getnumberofpages();

 ?>
