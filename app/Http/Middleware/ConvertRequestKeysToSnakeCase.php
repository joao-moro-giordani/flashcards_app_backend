<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class ConvertRequestKeysToSnakeCase
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->isJson()) {
            $data = $this->convertKeysToSnakeCase($request->json()->all());
            $request->merge($data);
        }

        return $next($request);
    }

    /**
     * Recursively convert array keys from camelCase to snake_case.
     */
    private function convertKeysToSnakeCase($input)
    {
        if (!is_array($input)) {
            return $input;
        }

        $output = [];
        foreach ($input as $key => $value) {
            $snakeKey = Str::snake($key);
            $output[$snakeKey] = $this->convertKeysToSnakeCase($value);
        }

        return $output;
    }
}
