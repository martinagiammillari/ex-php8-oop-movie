<?php
//DEFINISCO CLASSE MOVIE--------------------------------------------------------------
class Movie
{

    //UTILIZZO IL TRAIT
    use Discountable;

    //DEFINISCO GLI ATTRIBUTI
    public $name;
    public $release;
    public $director;
    public $language;
    public $genres;

    //COSTRUTTORE MOVIE
    function __construct($name, $release, $director, array $genres, $language)
    {
        $this->name = $name;
        $this->release = $release;
        $this->director = $director;
        $this->genres = $genres;
        $this->language = $language;


    }

    // MEOTDO MOVIE PER OTTENERE TUTTI I NOMI GENERI 
    public function getGenresString()
    {
        $names = [];
        foreach ($this->genres as $genre) {
            // Estrggo il nome da ogni oggetto Genre nell'array
            $names[] = $genre->name;
        }
        return implode(", ", $names); // Unisce i nomi con una virgola
    }


    //METODO MOVIE
    public function isRecent()
    {
        if ($this->release >= 2010) {
            return "Sì, è un film recente.";
        } else {
            return "No, è un classico.";
        }
    }
}
//-----------------------------------------------------------------------------
