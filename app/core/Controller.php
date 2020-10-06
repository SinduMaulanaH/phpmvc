<?php
// kelas utama yang mengatur semua controller yang dibuat
class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
