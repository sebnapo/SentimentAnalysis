<?php
// src/Controller/HomeController/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Entity\Volumes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

	public function array_sort($array, $on, $order=SORT_ASC)
	{
		$new_array = array();
		$sortable_array = array();

		if (count($array) > 0) {
			foreach ($array as $k => $v) {
				if (is_array($v)) {
					foreach ($v as $k2 => $v2) {
						if ($k2 == $on) {
							$sortable_array[$k] = $v2;
						}
					}
				} else {
					$sortable_array[$k] = $v;
				}
			}

			switch ($order) {
				case SORT_ASC:
					asort($sortable_array);
				break;
				case SORT_DESC:
					arsort($sortable_array);
				break;
			}

			foreach ($sortable_array as $k => $v) {
				$new_array[$k] = $array[$k];
			}
		}

		return $new_array;
	}

    public function index()
    {
    	$entityManager = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository(Volumes::class);

    	$conn = $entityManager->getConnection();

    	$sql = '
        SELECT *
        FROM VOLUMES p
        WHERE p.date >= DATE_ADD(NOW(),INTERVAL -1 HOUR) LIMIT 260
        ';
    	$stmt = $conn->prepare($sql);
    	$stmt->execute();

    	// returns an array of arrays (i.e. a raw data set)
     	$result = $stmt->fetchAll();
     	array_sort($result,'percent_change_1h',SORT_DESC);
     	var_dump($result);

    	$tags = $repository->findAll();
        $number = mt_rand(0, 100);

        return $this->render('base.html.twig');
    }
}