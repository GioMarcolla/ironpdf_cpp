<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('filesystem');
        $json_path = WRITEPATH . 'mock/mock_db.json';

        if (file_exists($json_path)) {
            $json_string = file_get_contents($json_path);
            $jsonData = json_decode($json_string, true);
        } else {
            $jsonData = [];
        }

        return view('home', [
            'title' => 'Iron Software - Home',
            'description' => 'PDF library for C++ developers',
            'pageCSS' => 'home.css',
            'jsonData' => $jsonData
        ]);
    }
}
