<?php

namespace LLPP\JournalBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TagRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagRepository extends EntityRepository
{
	public function getOneByNameLike($string)
	{
		$string = '%' . strtoupper($string) . '%';

		return $this->createQueryBuilder('t')
			->add('where', 'upper(t.nome) LIKE :string')
			->setParameter('search', $string)
			->getQuery()
			->getResult();
	}
}