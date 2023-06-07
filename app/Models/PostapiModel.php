<?php

namespace App\Models;

use CodeIgniter\Model;

class PostapiModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'postapi';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = [];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function listall(){
		$builder = $this->select('*')->orderBy('id', 'DESC');
		$postall =  $builder->get();
		if ($postall->getResult()) {
			return $postall->getResult();
		} else {
			return 0;
		}
	}

	public function transform($post)
    {
        return [
			'uuid' => $post->uuid,
			'nama_bencana' => $post->nama_bencana,
			'jam_bencana' => $post->jam_bencana,
			'lokasi' => $post->lokasi,
		];
    }
}
