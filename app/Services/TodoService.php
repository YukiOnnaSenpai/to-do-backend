<?php

namespace App\Services;

interface TodoService {

    public function save($request);

    public function index();

    public function update($request, $id);

    public function delete($id);
}