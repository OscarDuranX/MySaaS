<?php

namespace App\Http\Controllers;

use DOMPDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class PDFController extends Controller
{
    public function downloadInvoice()
    {
        if(!defined('DOMPDF_ENABLE_AUTOLOAD')){
            define('DOMPDF_ENABLE_AUTOLOAD', false);
        }

        if(file_exists($configPath = base_path().'/vendor/dompdf/dompdf/dompdf_config.inc.php')){
            require_once $configPath;
        }

        $dompdf = new Dompdf();



//        $dompdf->load_html("<h1> Hola </h1>");
        $dompdf->load_html($this->view($this->getData())->render());
        $dompdf->render();
        return $this->download($dompdf->output());

        //return view('invoice');
    }


    public function download($pdf)
    {
//        $filename = 'prova_'.$this->date()->month.'_'.$this->date()->year.'.pdf';
        $filename = "hola.pdf";
        return new Response($pdf, 200, [
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'filename="'.$filename.'"',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Type' => 'application/pdf',
        ]);
    }



    public function invoiceHtml()
    {
        $data =  ['vendor' => 'prova',
                    'user' => 'Oscar'];

        return view('receipt', $data);
    }

    public function view(array $data)
    {
        return View::make('receipt', $data);
    }

    private function getData()
    {
        $descriptions = ["description1", "description2", "description3", "description4"];
        $subscriptions = [45, 46, 145, 458];
        $data = [
            'vendor' => 'PROVA',
            'user' => 'Sergi',
            'email' => 'sergiturbadenas@gmail.com',
            'name' => 'Sergi Tur',
            'product' => 'Producte 1',
            'descriptions' => $descriptions,
            'subscriptions' => $subscriptions,
            'hasDiscount' => true,
            'discount' => "20%",
            'tax_percent' => "23%",
            'tax' => "456"
        ];
        return $data;
    }


}
