<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class BMI extends CI_Controller {

    public function index() {
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Adam Maulana';
        $this->pasien1->tmp_lahir='Bandar Lampung';
        $this->pasien1->tgl_lahir='23 Mei 2002';
        $this->pasien1->gender='L';
        
        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Ichsanrustiansyach';
        $this->pasien2->tmp_lahir='Citayem';
        $this->pasien2->tgl_lahir='12 Juni 2002';
        $this->pasien2->gender='L';

        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='030003';
        $this->pasien3->nama='Muhammad Alif Luthan';
        $this->pasien3->tmp_lahir='Jakarta';
        $this->pasien3->tgl_lahir='15 September 2002';
        $this->pasien3->gender='L';

//=========================================================
        $this->load->model('bmipasien_model', 'bmipasien1');
        $this->bmipasien1->id=1;
        $this->bmipasien1->tanggal='2020-02-15';
        $this->bmipasien1->pasien='Afrizal';
        $this->bmipasien1->bmi='';

        $this->load->model('bmipasien_model', 'bmipasien2');
        $this->bmipasien2->id=2;
        $this->bmipasien2->tanggal='2020-07-02';
        $this->bmipasien2->pasien='Rifqi';
        $this->bmipasien2->bmi='';

        $this->load->model('bmipasien_model', 'bmipasien3');
        $this->bmipasien3->id=3;
        $this->bmipasien3->tanggal='2021-07-14';
        $this->bmipasien3->pasien='Sabiq Muhammad';
        $this->bmipasien3->bmi='';

//=========================================================
        $this->load->model('bmi_model', 'bmi1');
        $this->bmi1->berat=64.2;
        $this->bmi1->tinggi=169;
        $this->bmi1->nilaiBMI(); 
        $this->bmi1->statusBMI(); 

        $this->load->model('bmi_model', 'bmi2');
        $this->bmi2->berat=40.2;
        $this->bmi2->tinggi=152;
        // $this->bmi1->nilaiBMI(); 
        // $this->bmi1->statusBMI();
        
        $this->load->model('bmi_model', 'bmi3');
        $this->bmi3->berat=43;
        $this->bmi3->tinggi=154;
        // $this->bmi1->nilaiBMI(); 
        // $this->bmi1->statusBMI();
        
        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        
        $data['list_pasien']=$list_pasien;
        $data['list_bmipasien']=$list_bmipasien;
        $data['list_bmi']=$list_bmi;
        
        $this->load->view('layouts/header');
        $this->load->view('bmi/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>