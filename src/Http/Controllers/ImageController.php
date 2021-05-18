<?php

namespace Peresmishnyk\LaravelGlide\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class ImageController extends Controller
{
    public function glide(Filesystem $filesystem, $path)
    {
        $headers = getallheaders();
        $accept = $headers['Accept'] ?? '';
        $accept_webp = (false !== strpos($accept, 'image/webp'));

        if (Str::contains($path, '@')) {
            $disk = Str::startsWith($path, '@') ? Str::before(Str::after($path, '@'), '/') : 'public';
            $path = Str::startsWith($path, '@') ? Str::after($path, '/') : $path;
        } else {
            $disk = 'public';
        }

        $server_conf = [
            'response' => new LaravelResponseFactory(app('request')),
            //  Dropbox integration
            'source' => Storage::disk($disk)->getDriver(),
            // ToDo: $filesystem local or target?
            'cache' => $filesystem->getDriver(),
            'cache_path_prefix' => '.cache',
            'base_url' => 'img',
        ];

        if ($accept_webp) {
            $server_conf['defaults']['fm'] = 'webp';
        }

        $server = ServerFactory::create($server_conf);

        try {
            $response = $server->getImageResponse($path, request()->all());
            return $response;
        } catch (\Exception $e) {
            return abort(404);
        }
    }
}
