<?php 
namespace App\Models;

class Product
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;
    protected $image;

    public function __construct(
        int $id = 0,
        string $title = '',
        string $description = '',
        string $price = '',
        string $sku = '',
        string $image = ''
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->sku = $sku;
        $this->image = $image;
    }

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getImage()
    {
        return $this->image;
    }

    // SET METHODS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {
        $this->id = $id;
        $this->title = 'Product Title';
        $this->description = 'Product Description';
        $this->price = 'Product Price';
        $this->sku = 'Product SKU';
        $this->image = 'Product Image';
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
