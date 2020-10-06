<?php

class About
{
    public function index($nama = 'Sindu', $pekerjaan = 'IT Engineer')
    {
        echo "Halo, nama saya $nama. Saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
