<?php 

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view("home");
	}
	public function about()
	{
		echo view("about");
	}
	
    public function contact()
    {
        $data['name'] = "Belajar CodeIgniter";
        echo view("contact", $data);
    }
    public function faq()
	{
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
			'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
			'answer' => 'Codeigniter versi 4.1.9'
		]
	];

	// load view dengan data
	echo view("faq", $data);
}


}