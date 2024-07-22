<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use app\Models\User;

        class librosControllers extends Controller
        {
            public $searchNombre;

            public function search()
            {
                // You can add validation here if needed
                $id_autor = $this->searchNombre;
        
                // Perform the search query
                $results = User::where('id_autor', 'like', "%{$id_autor}%")->get();
        
                // Return the results to the view
                return view('livewire.search-results', ['results' => $results]);
            }
        
            public function render()
            {
                return view('livewire.search-form');
            }
    }
