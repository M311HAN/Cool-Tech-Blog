<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // Define the search method to handle search functionality
    function search() {
        // Check if query1 parameter is set in the GET request
        if (isset($_GET['query1'])) {
            
            // Retrieve the ID from the query1 parameter
            $id_request = $_GET['query1'];
            
            // Query the articles table for an article with a matching ID, and paginate the results by 2
            $article = DB::table('articles')
            ->where('id', '=', $id_request)
            ->paginate(2);
            
            // Return the search view with the article data
            return view('search', [
                'article' => $article
            ]);
          // Check if query2 parameter is set in the GET request
        } else if (isset($_GET['query2'])) {
            
            // Retrieve the category ID from the query2 parameter
            $category_id_request = $_GET['query2'];
            
            // Query the articles table joined with categories table for articles in the specified category, and paginate the results by 5           
            $articles = DB::table('articles')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->where('category_id', '=', $category_id_request)
            ->paginate(5);
            
            // Return the search view with the articles data
            return view('search', [
                'articles' => $articles
            ]);
        
          // Check if query3 parameter is set in the GET request
        } else if (isset($_GET['query3'])) {
            
            // Retrieve the tag ID from the query3 parameter
            $tag_id_request = $_GET['query3'];
            
            // Query the articles table joined with article_tag and tags table for articles tagged with the specified tag, and paginate the results by 5
            $tagArticles = DB::table('articles')
            ->join('article_tag', 'articles.id', '=', 'article_tag.article_id')
            ->join('tags', 'article_tag.tag_id', '=', 'tags.id')
            ->where('tags.id', '=', $tag_id_request)
            ->paginate(5);
            
            // Return the search view with the tagArticles data
            return view('search', [
                'tagArticles' => $tagArticles
            ]);
        } else {
            // If none of the above conditions are met, return the search view without any data
            return view('search');
        }
    }
}
