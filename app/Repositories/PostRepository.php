<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;			// A inclure pour utiliser sa classe "Request" dans notre méthode "createPost" ci-dessous

/**
 * Class PostRepository
 * @package App\Repositories
 * @version December 3, 2021, 7:47 pm UTC
*/

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'price',
        'image_url'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
	
	// Fonction nouvellement créer pour gérer les formulaire avec image:
	public function createPost(Request $request){
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
       
        return $this->create($input);
    }
	

}
