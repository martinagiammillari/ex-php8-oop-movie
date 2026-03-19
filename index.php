<?php
echo "Benvenuto nel database film! <br><br>";

//DEFINISCO CLASSE GENRE-------------------------------------------------------
class Genre
{
    public $name;


    //COSTRUTTORE GENRE
    public function __construct($name,)
    {
        $this->name = $name;
        
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
    public function getGenresString() {
        $names = [];
        foreach ($this->genres as $genre) {
            // Estraiamo il nome da ogni oggetto Genre nell'array
            $names[] = $genre->name;
        }
        return implode(", ", $names); // Unisce i nomi con una virgola
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
$action = new Genre("Azione");
$sciFi = new Genre("Fantascienza");
$drama = new Genre("Drammatico");



//ISTAZIO 2 OGGETTI MOVIE
$movie1 = new Movie("Oppenheimer", 2023, "Christopher Nolan", [$action, $sciFi], "Inglese");
$movie2 = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", [$action, $drama], "Inglese");

//STAMPA DEI RISULTATI
echo "--- DETTAGLI FILM 1 ---<br>";
echo "Titolo: " . $movie1->name . "<br>";
echo "Anno: " . $movie1->release . "<br>";
echo "Regista: " . $movie1->director . "<br>";
echo "Lingua: " . $movie1->language . "<br>";
echo "Generi: " . $movie1->getGenresString() . "<br>"; // Usiamo il metodo per l'array
echo "Recente? " . $movie1->isRecent() . "<br>";

echo "<br>-----------------------<br><br>";

echo "--- DETTAGLI FILM 2 ---<br>";
echo "Titolo: " . $movie2->name . "<br>";
echo "Anno: " . $movie2->release . "<br>";
echo "Regista: " . $movie2->director . "<br>";
echo "Lingua: " . $movie2->language . "<br>";
echo "Generi: " . $movie2->getGenresString() . "<br>"; // Usiamo il metodo per l'array
echo "Recente? " . $movie2->isRecent() . "<br>";

?>