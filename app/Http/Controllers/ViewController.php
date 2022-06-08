<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ViewController extends Controller
{
    public function index()
    {
        $this->_client = new Client([
            'base_uri' => 'http://192.168.56.10:8000/api/articles'
        ]);
        $response = $this->_client->request('GET');
        $result = json_decode($response->getBody()->getContents(), true);

        $articles['articles'] = $result;

        // dd($articles);

        return view('viewAPI', $articles);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://192.168.56.10:8000/api/articles', [
            'author' => $request->author,
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'urlToImage' => $request->urlToImage,
            'publishedAt' => $request->publishedAt,
            'content' => $request->content,
        ]);

        return redirect()->route('view');
    }

    public function edit($id)
    {
        $this->_client = new Client([
            'base_uri' => 'http://192.168.56.10:8000/api/articles/' . $id
        ]);
        $response = $this->_client->request('GET');
        $result = json_decode($response->getBody()->getContents(), true);

        $articles['articles'] = $result;

        // dd($articles);
        return view('edit', $articles);
    }

    public function update(Request $request, $id)
    {
        // $this->_client = new Client([
        //     'base_uri' => 'http://192.168.56.10:8000/api/articles/' . $id
        // ]);

        // $data = [
        //     'id' => $id,
        //     'author' => $request->author,
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'url' => $request->url,
        //     'urlToImage' => $request->urlToImage,
        //     'publishedAt' => $request->publishedAt,
        //     'content' => $request->content,
        // ];
        // $response = $this->_client->request('PUT', '/view/{id}/update', [
        //     'form_params' => $data
        // ]);
        // $result = json_decode($response->getBody()->getContents(), true);


        $response = Http::put('http://192.168.56.10:8000/api/articles/' . $id, [
            'id' => $id,
            'author' => $request->author,
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'urlToImage' => $request->urlToImage,
            'publishedAt' => $request->publishedAt,
            'content' => $request->content,
        ]);

        // $client = new Client();
        // $res = $client->put('http://192.168.56.10:8000/api/articles/' . $id, [
        //     'form_params' => [
        //         'id' => $id,
        //         'author' => $request->author,
        //         'title' => $request->title,
        //         'description' => $request->description,
        //         'url' => $request->url,
        //         'urlToImage' => $request->urlToImage,
        //         'publishedAt' => $request->publishedAt,
        //         'content' => $request->content,
        //     ],
        //     [
        //         '_method' => 'PUT'
        //     ]
        // ]);
        return redirect()->route('view');
    }


    public function delete($id)
    {
        // $this->_client = new Client([
        //     'base_uri' => 'http://192.168.56.10:8000/api/articles'
        // ]);

        // $response = $this->_client->request('DELETE', 'http://192.168.56.10:8000/api/articles', [
        //     'form_params' => [
        //         'id' => $id
        //     ]
        // ]);

        // $result = json_decode($response->getBody()->getContents(), true);

        // $client  = new Client([
        //     'base_uri' => 'http://192.168.56.10:8000/api/articles'
        // ]);
        // $res = $client->delete(
        //     "http://192.168.56.10:8000/api/articles",
        //     [
        //         "json" => [
        //             "id" => $id
        //         ]

        //     ]
        // );
        // echo $res->getBody();

        $client = new Client();
        $res = $client->post('http://192.168.56.10:8000/api/articles/' . $id, [
            'form_params' => [
                '_method' => 'DELETE'
            ]
        ]);

        return redirect('/view');
    }
}
