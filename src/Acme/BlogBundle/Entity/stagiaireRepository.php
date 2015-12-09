<?php

namespace Acme\BlogBundle\Entity;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * stagiaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class stagiaireRepository extends \Doctrine\ORM\EntityRepository
{

    public function getStagiaire($first_result, $max_results = 20)
    {
        $qb = $this->createQueryBuilder('s');
        $qb
            ->select('s')
            ->setFirstResult($first_result)
            ->setMaxResults($max_results);

        $pag = new Paginator($qb);
        return $pag;
    }


    public function getArticles($nombreParPage, $page)
    {
        // On déplace la vérification du numéro de page dans cette méthode
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
        }

        // La construction de la requête reste inchangée
        $query = $this->createQueryBuilder('s')
            ->select('s')
            ->setFirstResult(($page-1) * $nombreParPage)
            ->setMaxResults($nombreParPage);

        // Enfin, on retourne l'objet Paginator correspondant à la requête construite
        // (n'oubliez pas le use correspondant en début de fichier)
        return new Paginator($query);

    }


}
