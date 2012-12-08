<?php
namespace Album\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name='album')
 * @author rjimenez
 *
 */
Class Album 
{
	private $id;
	private $artista;
	private $articulo;
	
}