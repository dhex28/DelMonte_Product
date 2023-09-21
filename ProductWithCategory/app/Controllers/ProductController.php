<?php

namespace App\Controllers;
use App\Models\ShoesModel;
use App\Models\CategoryModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $shoesModel = new ShoesModel();
        $data['products'] = $shoesModel->findAll();
        return view('products/index', $data);
    }
    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('products/create', $data);
    }

    public function store()
    {
        $shoesModel = new ShoesModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Shoes_Category' => $this->request->getPost('Shoes_Category'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $shoesModel->insert($data);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $shoesModel = new ShoesModel();
        $categoryModel = new CategoryModel();
        $data['product'] = $shoesModel->find($id);
        $data['categories'] = $categoryModel->findAll();
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $shoesModel = new ShoesModel();
        $data = [
            'ProductName' => $this->request->getPost('ProductName'),
            'ProductDescription' => $this->request->getPost('ProductDescription'),
            'Shoes_Category' => $this->request->getPost('Shoes_Category'),
            'ProductQuantity' => $this->request->getPost('ProductQuantity'),
            'ProductPrice' => $this->request->getPost('ProductPrice'),
        ];
        $shoesModel->update($id, $data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $shoesModel = new ShoesModel();
        $shoesModel->delete($id);

        return redirect()->to('/');
    }
}
