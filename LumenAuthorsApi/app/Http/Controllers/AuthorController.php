<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use apiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Return the list of author
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = AUTHOR::all();
        
        return $this->successResponse($authors);
        // return $authors;
    }

    /**
     * Create one new author
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        
    }

    /**
     * Obtain and show one author
     *
     * @return Illuminate\Http\Response
     */
    public function show($author){
        
    }

    /**
     * Update an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author){
        
    }

     /**
     * Delete an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author){
        
    }

}
