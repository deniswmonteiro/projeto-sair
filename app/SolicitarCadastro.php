<?php

namespace projetoautomacao;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class SolicitarCadastro extends Eloquent
{
	use HasSlug;
	
	protected $connection = 'mongodb';
	protected $collection = 'solicitar_cadastro';
	protected $fillable = [
		'nome', 'cpf', 'email', 'usuario', 'laboratorio', 'slug'
	];
	protected $guarded = ['id'];

	public function getSlugOptions(): SlugOptions
	{
		return SlugOptions::create()->generateSlugsFrom('usuario')->saveSlugsTo('slug');
	}
}
