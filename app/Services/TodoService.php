<?php

namespace App\Services;

interface TodoService {

    public function save($data);

    public function index();

    public function update($data,$id);

    public function delete($id);
}