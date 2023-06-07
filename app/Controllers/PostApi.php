<?php

namespace App\Controllers;

use App\Models\PostapiModel;
use App\Transform\PostTransformer;
use Config\Services;
use CodeIgniter\HTTP\URI;
use Ramsey\Uuid\Uuid;

class PostApi extends BaseController
{
    public function list_post_api()
    {
        // Get All data
        $model = new PostapiModel();
        $builder = $model->listall();

        $transformedPosts = [];
        foreach ($builder as $post) {
            $transformedPosts[] = $model->transform($post);
        }

        if (!empty($transformedPosts)) {
            $data["status"] = "Success Get All Data";
            $data["statusCode"] = 200;
            $data["data"] = $transformedPosts;
            return $this->response->setJSON($data);
        }
    }

    public function page_create_api()
    {
        $currentURI = current_url();
        $uri = new URI($currentURI);
        $path = $uri->getPath();

        $data = [
            'title_meta' => view('partials/title-meta', ['title' => 'Post API', 'routes' => $path]),
            'page_title' => view('partials/page-title', ['title' => 'Post API', 'li_1' => 'Layouts', 'li_2' => 'Welcome to AYS'])
        ];
        return view('page-home/create-api', $data);
    }

    public function processCreate()
    {
        $request = Services::request();
        $uuid = Uuid::uuid4()->toString();

        $nama_bencana = $request->getPost('nama_bencana');
        $jam_bencana = $request->getPost('jam_bencana');
        $lokasi_bencana = $request->getPost('lokasi_bencana');

        $model = new PostapiModel();

        $data = [
            'uuid' => $uuid,
            'nama_bencana' => $nama_bencana,
            'jam_bencana'  => $jam_bencana,
            'lokasi'  => $lokasi_bencana,
        ];

        $builder = $model->builder();

        $post_api = $builder->insert($data);

        if ($post_api) {
            return redirect()->to(base_url('/'))->with('success', 'Success Create Post Api');;
        } else {
            return redirect()->back()->with('error', 'Failed Create Post Api');
        }
    }
}
