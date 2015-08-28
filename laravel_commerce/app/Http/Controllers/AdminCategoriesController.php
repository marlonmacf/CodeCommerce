<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    private $categories;

    public function __construct(Category $category)
    {
        $this->middleware('guest');
        $this->categories = $category;
    }

    public function index()
    {
        $categories = $this->categories->all();

        return $categories;
    }

    public function insert()
    {
        return "INSERT";
    }

    public function update()
    {
        return "UPDATE";
    }

    public function delete()
    {
        return "DELETE";
    }

    public function select()
    {
        return "SELECT";
    }
}