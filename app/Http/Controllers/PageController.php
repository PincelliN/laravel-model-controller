<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Termwind\Components\Dd;

class PageController extends Controller
{
    public function index(){
         $movies=Movies::all();


        /*
        Recupera tutti i film con l'anno di uscita maggiore 1991-01-30
        $movies = Movies::where('date','>=','1991-01-30')->orderby('date')->get(); */

       /*
       Recupera i film con voto maggiore di 8,5 oppure con anno di uscita  maggiore 1977-01-30
       $movies = Movies::where('vote', '>', 8.5)
               ->orWhere('date','>=','1977-01-30')
               ->orderby('vote','desc')
               ->get(); */

         /*
         Recupera i film con ID 1, 2 o 3
           $movies = Movies::whereIn('id', [1, 5, 10])->get(); */

           /*
           Filtra i film dove il valore di una colonna id non è in un elenco di valori
                $movies = Movies::whereNotIn('id', [1, 5, 10])->get(); */

                /*
                Recupera i film rilasciati tra il 1977-05-25 e il 1995-11-19
                $movies = Movies::whereBetween('date', ['1977-05-25', '1995-11-19'])->orderby('date')->get(); */


                /*
                Recupera i film rilasciati nel 1994
                $movies = Movies::whereYear('date',[1994])->orderby('date')->get(); */

/*    Recupera i primi 5 film
$movies = Movies::limit(5)->get();*/

/* Estrae solo i titoli dei film */
$titles = Movies::pluck('title');


/* Raggruppa i film per nazionalità e conta quanti film hanno la stessa nazionalità  ragruppandoli per quest'ultima
non stampato in tabella nessuno di questi parametri  per visualizzare questa variabile necessitiamo di un dump nella pagina home
$movies = Movies::selectRaw('count(*) as movie_count,nationality')
               ->groupBy('nationality')
               ->having('movie_count', '>', 2)
               ->get(); */

        return view('home',compact('movies','titles'));
    }

    public function film(){

        $movies_vote=Movies::orderby('date')->get();

        return view('film',compact('movies_vote'));
    }

    public function scheda($title){

        $film= Movies::where('title', $title)->first();


        return view('scheda',compact('film'));

    }
}
