<?php
echo "Benvenuto nel database film! <br><br>";

//DEFINISCO CLASSE GENRE-------------------------------------------------------
class Genre
{
    public $name;
    public $description;

    //COSTRUTTORE GENRE
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

}
//-----------------------------------------------------------------------------






//DEFINISCO CLASSE MOVIE--------------------------------------------------------------
class Movie
{
    public $name;
    public $release;
    public $director;
    public $language;
    public $genre;

    //COSTRUTTORE MOVIE
    function __construct($name, $release, $director, Genre $genre, $language)
    {
        $this->name = $name;
        $this->release = $release;
        $this->director = $director;
        $this->genre = $genre;
        $this->language = $language;


    }


    //METODO MOVIE
    public function isRecent()
    {
        if ($this->release >= 2020) {
            return "Sì, è un film recente.";
        } else {
            return "No, è un classico.";
        }
    }
}
//-----------------------------------------------------------------------------



//ISTANZIO 2 OGGETTI GENRE
$action = new Genre("Azione", "Film con inseguimenti, combattimenti e molta adrenalina.");
$drama = new Genre("Drammatico", "Film che trattano temi seri e profondi legati alla condizione umana.");



//ISTAZIO 2 OGGETTI MOVIE
$film1 = new Movie("Oppenheimer", 2023, "Christopher Nolan", $drama, "Inglese");
$film2 = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", $action, "Inglese");

//STAMPA DEI RISULTATI
echo "--- DETTAGLI FILM ---<br>";
echo "Titolo: " . $film1->name . "<br>";
echo "Anno: " . $film1->release . "<br>";
echo "Regista: " . $film1->director . "<br>";
echo "Genere: " . $film1->genre->name . "<br>"; 
echo "Descrizione Genere: " . $film1->genre->description . "<br>";
echo "Recente? " . $film1->isRecent() . "<br><br>";

echo "--- DETTAGLI FILM 2 ---<br>";
echo "Titolo: " . $film2->name . "<br>";
echo "Genere: " . $film2->genre->name . "<br>";
echo "Recente? " . $film2->isRecent() . "<br>";

?>