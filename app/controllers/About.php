<?php

<?php 

class About {
public function index($nama = 'RidhaAF', $pekerjaan = 'Mahasiswa') {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
}
class About extends Controller {
    public function index($nama = 'RidhaAF', $pekerjaan = 'Mahasiswa', $umur = 19) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        echo 'About/page';
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
