<?php
namespace App\Servicess;
use App\Http\Contract\PostSeviceInterface;
use App\Models\Posts;

class PostServices implements PostSeviceInterface
{
    public function __construct(Posts $posts)
    {
        $this->posts=$posts;
    }

    public function update()
    {

    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function insert()
    {

    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @return mixed
     */
    public function select(){
        return $this->posts->all();
    }

}