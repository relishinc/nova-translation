<?php

namespace RelishInc\NovaTranslation\Http\Controllers;

use Illuminate\Routing\Controller;
use RelishInc\Translation\Drivers\Translation;
use RelishInc\Translation\Http\Requests\LanguageRequest;

class LanguageController extends Controller
{
    private $translation;

    public function __construct(Translation $translation)
    {
        $this->translation = $translation;
    }

    public function index()
    {
        return response()->json($this->translation->allLanguages());
    }

    public function store(LanguageRequest $request)
    {
        $this->translation->addLanguage($request->locale, $request->name);

        return response()->json(['success' => true]);
    }
}
