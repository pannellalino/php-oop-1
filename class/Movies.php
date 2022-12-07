<?php

class Movie{
  public $title;
  public $year;
  public $genre;
  public $seasons;
  public $characteristic;
  public $img;

  /**
   * @param String $title
   * @param Number $year
   * @param String $genre
   * @param Number $seasons
   * @param String $characteristic
   */
  public function __construct($_title, $_year, $_genre, $_seasons, $_characteristic)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genre = $_genre;
    $this->seasons = $_seasons;
    $this->characteristic = $_characteristic;
  }
  public function setImg($_img){
    $this->img = $_img;
  }
  public function getImg(){
        $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';
        if ($this->img) {
            return $this->img;
        }
        return $placeholder;
    }
}

?>