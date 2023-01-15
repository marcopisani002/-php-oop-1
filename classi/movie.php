<?php

class Movie {
  
    private $title;
    private $subtitle;
    private $duration;
    private $movieDirector;


    // funzione costruttore
    function __construct(string $_title, string $_subtitle, int $_duration, string $_movieDirector){

        $this -> setTitle($_title);
        $this -> setSubTitle($_subtitle);
        $this -> setDuration($_duration);
        $this -> getMovieDirector($_movieDirector);

    }


  
    public function getTitle()
    {
        return $this->title;
    }

  
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle()
    {
        return $this->subtitle;
    }

   
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

   
    public function getDuration()
    {
        return $this->duration;
    }

   
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }


    public function getMovieDirector()
    {
        return $this->movieDirector;
    }

    public function setMovieDirector($movieDirector)
    {
        $this->movieDirector = $movieDirector;

        return $this;
    }

 
    public function getFullName (){
        return $this->title . " " . $this->subtitle;
      }
    

}


?>