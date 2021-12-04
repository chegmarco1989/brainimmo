<?php

namespace App\Http\Controllers;

use App\DataTables\PostDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PostController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param PostDataTable $postDataTable
     * @return Response
     */
    public function index(PostDataTable $postDataTable)
    {
        return $postDataTable->render('posts.index');
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        // $input = $request->all();

        // $post = $this->postRepository->create($input);
		
		/* On appelle la nouvelle fonction "createPost" crée dans "App\Repositories\PostRepository" et chargée de 
			stocker les données récupérées depuis les formulaires HTML d'ajout à la BDD. Cette fonction avec son 
			nouveau paramètre "$request", a été remplacée par la fonction "create" avec son argument "$input" par défaut: */ 
        $post = $this->postRepository->createPost($request);

        Flash::success('Post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }
		
		// ---------------- Début du traitement du lien normal de l'image à éditer: 
		$file = $request->file('image_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
		// dd($file);

        $imageName = uniqid().'.'.$extension;
		$path = $file->move(public_path('images'), $imageName);
		// dd($imageName);

        $input = $request->all();
        // $input['image_url'] = $path;
        $input['image_url'] = $imageName;
		
		// ---------------- Début du traitement du lien normal de l'image à éditer: 
		
		/* On remplace juste après "$this->postRepository->update($request->all(), $id)" par "$this->postRepository->update($input, $id)" 
			car "$request->all()" a déjà été définie dans la variable "$input" ci-dessus (ce qui nous a permis par la suite de récupérer la 
			valeur de la clé "image_url" du tableau que repésente cette variable "$input": */
        $post = $this->postRepository->update($input, $id);

        Flash::success('Post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }
}
