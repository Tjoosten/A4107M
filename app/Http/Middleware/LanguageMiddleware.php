<?php

namespace Sijot\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

/**
 * Class LanguageMiddleware
 * @package Sijot\Http\Middleware
 */
class LanguageMiddleware
{
    /**
     * Array for the supported languages.
     * ----
     * nl = dutch.
     * en = english
     *
     * @var array
     */
    protected static $supportedLanguages = ['nl', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = (Input::get('lang')) ?: Session::get('lang');
        $this->setSupportedLanguage($language);

        return $next($request);
    }

    /**
     * Check if the language is supported.
     *
     * @param  string $lang
     * @return bool
     */
    private function isLanguageSupported($lang)
    {
        return in_array($lang, self::$supportedLanguages);
    }

    /**
     * Set the language.
     *
     * @param  string $lang
     * @return void
     */
    private function setSupportedLanguage($lang)
    {
        if ($this->isLanguageSupported($lang)) { // Check if the language is supported.
            App::setLocale($lang);
            Session::put('lang', $lang);
        }
    }
}
