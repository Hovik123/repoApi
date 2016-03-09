<?php
namespace App\Http\Contract;
/**
 * Created by PhpStorm.
 * User: hovo
 * Date: 3/10/16
 * Time: 12:15 AM
 */
interface PostSeviceInterface
{
    public function update();

    public function create();

    public function insert();

    public function delete();
}