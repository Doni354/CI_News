<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function index()
    {
        
    }

    public function about()
    {
        return  view("about.php");
    }

    public function contact()
    {
        $data['name'] = "Doni_354";
        echo view("contact", $data);
    }

    
	public function faqs()
	{
		// membuat data untuk dikirim ke view
		$data['data_faqs'] = [
			[
				'question' => 'Apa itu Codeigniter?',
				'answer' => 'Codeigniter adalah framework untuk membuat web'
			],
			[
				'question' => 'Siapa yang membuat Codeiginter?',
				'answer' => 'CI awalnya dibuat oleh Ellislab'
			],
			[
				'question' => 'Codeigniter versi berapakah yang digunakan pada Tutorial ini?',
				'answer' => 'Codeigniter versi 4.0.4'
			]
		];

		// load view dengan data
		echo view("faqs", $data);
	}
}
