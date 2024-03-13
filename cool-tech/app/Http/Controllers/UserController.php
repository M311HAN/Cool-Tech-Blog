<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function getTagsFromArticleId($article_id) {
    // Retrieve unique tags for the given article ID
    $theTags = DB::table('article_tag')
    ->join('tags', 'article_tag.tag_id', '=', 'tags.id')
    ->where('article_tag.article_id', '=', $article_id)
    // Ensure that each tag is only retrieved once
    ->distinct() 
    // Use pluck to get a simple array of 'tag' values
    ->pluck('tags.tag') 
    // Convert the collection to an array, if needed for the view
    ->toArray(); 
    
    return $theTags;
}

// Gets the category name of an article by its ID.
function getCategoryFromArticleId($article_id) {
    $specifics = DB::table("categories")
    ->selectRaw('categories.category')
    ->join('articles', 'categories.id', '=', 'articles.category_id')
    ->where('articles.id', '=', $article_id)
    ->get();
    return $specifics[0]->category;
}

// Retrieves article titles associated with a given tag ID.
function getArticlesFromTagId($tag_id) {
    $specifics = DB::table('articles')
    ->selectRaw('articles.title')
    ->join('article_tag', 'article_tag.article_id', '=', 'articles.id')
    ->join('tags', 'tags.id', '=', 'article_tag.tag_id')
    ->where('tags.id', '=', $tag_id)
    ->get();
    $theArticles = [];
    foreach ($specifics as $array) {
        array_push($theArticles, $array->title);
    }
    return $theArticles;
}

// Fetches article titles belonging to a specific category ID.
function getArticlesFromCategoryId($category_id) {
    $specifics = DB::table('articles')
    ->selectRaw('articles.id, articles.title')
    ->where('articles.category_id', '=', $category_id)
    ->get();
    $theArticles = [];
    foreach($specifics as $article) {
        array_push($theArticles, $article->title);
    }
    return $theArticles;
}

// Gets unique tags associated with articles in a specific category.
function getTagsFromCategoryId($category_id) {
    $specifics = DB::table('tags')
    ->selectRaw('tags.tag')
    ->join('article_tag', 'tags.id', '=', 'article_tag.tag_id')
    ->join('articles', 'article_tag.article_id', '=', 'articles.id')
    ->where('articles.category_id', '=', $category_id)
    ->get();
    $theTags = [];
    foreach ($specifics as $specific) {
        if (in_array($specific->tag, $theTags)) {
            continue;
        } else {
            array_push($theTags, $specific->tag);
        }
    }
    return $theTags;
}

// Retrieves the category name for articles tagged with a specific tag ID.
function getCategoryFromTagId($tag_id) {
    $specifics = DB::table('categories')
    ->selectRaw('categories.category')
    ->join('articles', 'categories.id', '=', 'articles.category_id')
    ->join('article_tag', 'articles.id', '=', 'article_tag.article_id')
    ->join('tags', 'article_tag.tag_id', '=', 'tags.id')
    ->where('tags.id', '=', $tag_id)
    ->get();
    return $specifics[0]->category;
}

// Defines a UserController class extending a base controller.
class UserController extends Controller
{
    // Fetches content for the homepage, including top articles with their first paragraph and tags.
    public function fetchHomePageContent() {
        
        $top_articles = DB::table('articles')
        ->selectRaw('articles.*, categories.category')
        ->join('categories', 'categories.id', '=', 'articles.category_id')
        ->orderByDesc('articles.creation_date')
        ->take(5)
        ->get();
        foreach ($top_articles as $article) {
            $article->tags = getTagsFromArticleId($article->id);
        }
        
        foreach($top_articles as $i => $article) {
            $body = $article->body;
            $start = strpos($body, '<p>');
            $end = strpos($body, '</p>', $start);
            $paragraph = substr($body, $start, $end - $start + 4);
            $article->body = strip_tags($paragraph);
        }
        return view('home', [
            'articles' => $top_articles
        ]);
    }
    
    // Retrieves a single article by its ID, including category and tags.
    public function fetchOneArticle($id) {
        $article = DB::table('articles')
        ->selectRaw('articles.*, categories.category')
        ->join('categories', 'categories.id', '=', 'articles.category_id')
        ->where('articles.id', '=', $id)
        ->first();
        
        if (!$article) {
            abort(404); // or return a response indicating that the article was not found
        }
        
        $article->tags = getTagsFromArticleId($id);
        
        return view('article', [
            'theArticle' => $article
        ]);
    }
    
    // Fetches articles belonging to a category identified by a slug.
    public function fetchCategoryArticles($slug) {
        $articles = DB::table('articles')
        ->selectRaw('articles.id, articles.title, categories.category')
        ->join('categories', 'categories.id', '=', 'articles.category_id')
        ->where('categories.slug', '=', $slug)
        ->get();
        
        $n = count($articles);
        
        if ($n === 0) {
            return redirect('/')->with('failure', 'The requested category does not exist');
        }
        else {
            return view('category', [
                'articles' => $articles
            ]);
        }
    }
    
    // Retrieves all articles associated with a tag identified by a slug.
    public function fetchAllTags($slug) {
        $articles = DB::table('articles')
        ->selectRaw('articles.id, articles.title, tags.tag')
        ->join('article_tag', 'articles.id', '=', 'article_tag.article_id')
        ->join('tags', 'article_tag.tag_id', '=', 'tags.id')
        ->where('tags.slug', '=', $slug)
        ->get();
        
        foreach ($articles as $article) {
            $article->tags = getTagsFromArticleId($article->id);
        }
        
        $n = count($articles);
        
        if ($n === 0) {
            return redirect('/')->with('failure', 'The requested tag does not exist.');
        }
        else {
            $officialTag = $articles[0]->tag;
            return view('tag', [
                'articles' => $articles,
                'slug' => $slug,
                'tag' => $officialTag
            ]);
        }
    }
    
    // Displays the legal page.
    public function showLegalPage() { 
        return view('legalPage');
    }
}