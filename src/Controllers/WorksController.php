<?php
namespace IIKWorks\Portfolio\Controllers;

use IIKWorks\Portfolio\App\Controller;
use IIKWorks\Portfolio\App\Router;

class WorksController extends Controller
{
    public function index(): void
    {
        $works = $this->app->db->getAll('works', 'created_at:desc');

        foreach($works as $key => $work) {
            $image = $this->app->db->get('images', unserialize($work['images'])[0]);
            $works[$key]['image'] = $image;
        }

        view('works/index', [
            'title' => 'Работы',
            'page' => 'works',
            'works' => $works
        ]);
    }

    public function detail(int $id): void
    {
        $work = $this->app->db->get('works', $id);
        if(!$work) Router::not_found();

        $images = $this->app->db->getMultiple('images', unserialize($work['images']));

        view('works/detail', [
            'title' => sprintf('Работа «%s»', $work['title']),
            'page' => 'works',
            'work' => $work,
            'images' => $images
        ]);
    }
}