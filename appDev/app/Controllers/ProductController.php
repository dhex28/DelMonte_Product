<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('products/index', $data);
    }
    
    public function create()
    {
        return view('products/create');
    }
    
    public function store()
    {
        $productModel = new ProductModel();
        $data = [
            'UPC' =>$this->request->getPost('UPC'),
            'ProductName' => $this->request->getPost('ProductName'),
            'Price' => $this->request->getPost('Price'),
            'Quantity' => $this->request->getPost('Quantity'),
            'Created_at' => date('Y-m-d H:i:s'),
            'Updated_at' => date('Y-m-d H:i:s'),
    ];
    $productModel->insert($data);

    return redirect()->to('/');
    }
    
    public function edit($id)
    {
        $productModel = new ProductModel();
        $data['product'] = $productModel->find($id);
        return view('products/edit', $data);
    }
    
    public function update($id)
    {
        $productModel = new ProductModel();
            $data = [
                'UPC' => $this->request->getPost('UPC'),
                'ProductName' => $this->request->getPost('ProductName'),
                'Price' => $this->request->getPost('Price'),
                'Quantity' => $this->request->getPost('Quantity'),
                'Updated_at' => date('Y-m-d H:i:s'),
        ];

    $productModel->update($id, $data);
    return redirect()->to('/');
    }
    
    public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel->delete($id);
        return redirect()->to('/');
    }

}