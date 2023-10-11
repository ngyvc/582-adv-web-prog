<?php 

namespace App\Controllers;

include_once 'model.php';
use App\Models\Product;
// use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(int $id)
	{
        $product = new Product();
        $product->read($id);

        require_once 'view.php';
	}
}

$use = new ProductController();
$use->showAction(1);

?>