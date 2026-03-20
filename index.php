<?php
echo "Benvenuto nel database film! <br><br>";

// 1. DEFINISCO TRAIT----------------------------------------------------------
trait Discountable {
    public $price;      
    public $discount;   

    // Metodo
    public function getDiscountedPrice() {
        return $this->price - $this->discount;
    }
}
//----------------------------------------------------------------------------------





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
    use Discountable;
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
            // Estrggo il nome da ogni oggetto Genre nell'array
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

//APPLICO I VALORI DI DISCOUNTABLE 
$movie1->price = 15;     // Prezzo base 15€
$movie1->discount = 3;   // Sconto 3€

$movie2->price = 10;    
$movie2->discount = 2;  

//STAMPA DEI RISULTATI
echo "--- DETTAGLI FILM 1 ---<br>";
echo "Titolo: " . $movie1->name . "<br>";
echo "Anno: " . $movie1->release . "<br>";
echo "Regista: " . $movie1->director . "<br>";
echo "Lingua: " . $movie1->language . "<br>";
echo "Generi: " . $movie1->getGenresString() . "<br>"; // Usiamo il metodo per l'array
echo "Recente? " . $movie1->isRecent() . "<br>";
echo "Prezzo Originale: " . $movie1->price . "€<br>";
echo "Prezzo Scontato: " . $movie1->getDiscountedPrice() . "€<br>"; // Metodo del trait

echo "<br>-----------------------<br><br>";

echo "--- DETTAGLI FILM 2 ---<br>";
echo "Titolo: " . $movie2->name . "<br>";
echo "Anno: " . $movie2->release . "<br>";
echo "Regista: " . $movie2->director . "<br>";
echo "Lingua: " . $movie2->language . "<br>";
echo "Generi: " . $movie2->getGenresString() . "<br>"; // Usiamo il metodo per l'array
echo "Recente? " . $movie2->isRecent() . "<br>";
echo "Prezzo Originale: " . $movie2->price . "€<br>";
echo "Prezzo Scontato: " . $movie2->getDiscountedPrice() . "€<br>"; // Metodo del trait


?>