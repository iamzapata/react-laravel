<?php

namespace ReactLaravel\Repositories\Comments;

use ReactLaravel\Models\Comment;

use ReactLaravel\Contracts\Repositories\CommentsRepositoryInterface;

class CommentsEloquentRepository implements CommentsRepositoryInterface 
{
	/**
	 * @var Comment
	 */
	private $comment;

	/**
	 * CommentsEloquentRepository Constructor
	 * 
	 * @param Comment $comment
	 */
	public function __construct(Comment $comment)
	{
		$this->comment = $comment;
	}

	public function create(Array $data)
	{
		$this->comment = $this->comment->newInstance()->create($data);

		return $this->comment;
	}

	public function read($id)
	{

	}

	public function update($id, Array $array)
	{

	}

	public function delete($id)
	{

	}

	public function getAll()
	{
		return $this->comment->all();
	}

	public function getAllPaginated($pages = 15, Array $eagerLoads = [])
	{

	}

}