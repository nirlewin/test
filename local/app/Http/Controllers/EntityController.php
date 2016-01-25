<?php namespace App\Http\Controllers;

use App\Language;

class EntityController extends Controller
{

    public function languages() {
        return Language::select("id","title")->lists("title", "id");
    }

}
