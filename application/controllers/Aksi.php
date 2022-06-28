<?php

class Aksi extends CI_Controller {
    function __construct()
    {
		parent::__construct();
		$this->load->model('Query');
        $this->load->library("session");
        $this->load->helper('file');
	}
    function login(){
        $user=$_POST['user'];
        $password=$_POST['password'];
        $member=$this->Query->_func("SELECT * FROM `admin` WHERE username ='$user' and password = '$password' limit 1");
        if(count($member)>0){
            $session=array(
                'id'=>$member[0]['id'],
                'username'=>$member[0]['username'],
                'password'=>$member[0]['password'],
                'nama'=>$member[0]['nama']
            );
            $this->session->set_userdata($session);
            return redirect("ctrl");
        }else{
            $data=array();// 
            $data['msg']="Data tidak ditemukan !!!";
            $this->load->view("login/login.php",$data);
        }        
    }

    function inputPenyakit(){
        
        // $data=$_POST['data'];
        // print_r($data);
        $nama=$_POST['nama'];
        $detail=$_POST['detail'];
        $status=$_POST['status'];
        $file='';
        if(!empty($_POST['img'])){
            $file=$_POST['img'];
        }
        $namaFile="-";
        if(!empty($file)){
            // return print_r($file['data']);
            foreach ($file as $key => $v) {
                $namaFile=$this->_uploadImage($v['src'],$v['nama']);
            }
        }
        $saran=$_POST['srn'];
        
        $check=$this->Query->_proc("
            INSERT INTO `penyakit`(`nmPenyakit`, `detailPenyakit`, `img`, `saran`,`status`) VALUES
            ('".$nama."','".$detail."','".$namaFile."','".$saran."','".$status."') 
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function updatePenyakit(){
        
        // $data=$_POST['data'];
        // print_r($data);
        $kdPnykit=$_POST['kode'];
        $nama=$_POST['nama'];
        $detail=$_POST['detail'];
        $img=$_POST['img'] or '';
        $srn=$_POST['saran'];
        $check=$this->Query->_proc("
            update `penyakit` set `nmPenyakit`='".$nama."', `detailPenyakit`='".$detail."', `img`='".$img."', `saran`='".$srn."' where kdPenyakit='".$kdPnykit."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function deletePenyakit(){

        // $data=$_POST['kode'];
        $kdPnykit=$_POST['kode'];
        $check=$this->Query->_proc("
            delete from penyakit where kdPenyakit='".$kdPnykit."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function gejala(){

        // $data=$_POST['kode'];
        // $kdPenyakit=$_POST['kdPenyakit'];
        $nama=$_POST['nama'];
        $mb=$_POST['mb'];
        $md=$_POST['md'];
        $kdPenyakit=$_POST['kdPenyakit'];
        $check=$this->Query->_proc("
            INSERT INTO `gejala`( `kdPenyakit`, `nmGejala`, `mb`, `md`) VALUES 
            ('".$kdPenyakit."','".$nama."','".$mb."','".$md."')
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function updategejala(){

        // $data=$_POST['kode'];
        $kdGejala=$_POST['kode'];
        $nama=$_POST['nama'];
        $mb=$_POST['mb'];
        $md=$_POST['md'];    
        $check=$this->Query->_proc("
            UPDATE `gejala` SET `nmGejala`='".$nama."', `mb`='".$mb."', `md`= '".$md."' where kdGejala = '".$kdGejala."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function deletegejala(){
         // $data=$_POST['kode'];
         $kdGejala=$_POST['kode'];
         $check=$this->Query->_proc("
         delete from gejala where kdGejala = '".$kdGejala."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function updategejala1(){
        $key=$_POST['key'];
        $data=$this->Query->_func("
            select kdGejala from gejala where trim(nmGejala)=trim('".$key."')
        ");
        $kdGejala=$_POST['kode'];
        $nama=$_POST['nama'];
        $mb=$_POST['mb'];
        $md=$_POST['md'];    

        // $check=false;
        foreach ($data as $q=> $v) {
            $check=$this->Query->_proc("
                UPDATE `gejala` SET `nmGejala`='".$nama."', `mb`='".$mb."', `md`= '".$md."' where kdGejala = '".$v['kdGejala']."'
            ");    
        }
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function deletegejala1(){
         // $data=$_POST['kode'];
        $key=$_POST['key'];
        $data=$this->Query->_func("
            select kdGejala from gejala where trim(nmGejala)=trim('".$key."')
        ");
         $kdGejala=$_POST['kode'];
        foreach ($data as $q=> $v) {
            $check=$this->Query->_proc("delete from gejala where kdGejala = '".$v['kdGejala']."'");    
        }
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal");
        }
    }

    function inputAdmin(){

        // $idPengguna=$_POST['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nama=$_POST['nama'];
        $check=$this->Query->_proc("
            INSERT INTO `admin` (`username`, `password`, `nama`) VALUES 
            ('".$username."','".$password."','".$nama."')
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal"); 
        }
    }

    function updateAdmin(){

        $idPengguna=$_POST['kode'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nama=$_POST['nama'];
        $check=$this->Query->_proc("
           update `admin` set `username`='".$username."', `password`='".$password."', `nama`='".$nama."' where id='".$idPengguna."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal"); 
        }
    }

    function deleteAdmin(){

        $idPengguna=$_POST['kode'];
        $check=$this->Query->_proc("
           delete from admin where id='".$idPengguna."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal"); 
        }
    }

    function diagnosa(){
        $data=$_POST['data'];
        return print_r($this->prosesDiagnosa($data,true));

    }

    function prosesDiagnosa($data1,$save){
        //tahap 1 -> pemisah 
        $bobot=array(
            [
                "nama"=>"pasti tidak ",
                "nilai"=>-1.0
            ],
            [
                "nama"=>"hampir pasti tidak",
                "nilai"=>-0.8
            ],
            [
                "nama"=>"kemungkinan besar tidak ",
                "nilai"=>-0.6
            ],
            [
                "nama"=>" mungkin tidak ",
                "nilai"=>-0.4
            ],
            [
                "nama"=>" tidak tahu ",
                "nilai"=>0.2
            ],
            [
                "nama"=>" mungkin ",
                "nilai"=>0.4
            ],
            [
                "nama"=>" kemungkinan besar ",
                "nilai"=>0.6
            ],
            [
                "nama"=>" hampir pasti ",
                "nilai"=>0.8
            ],
            [
                "nama"=>" pasti ",
                "nilai"=>1.0
            ]

        );

        $data=json_decode($data1);
        // return print_r($data[0]);
        $kdpenyakit="";
        $dtPenyakit=array();
        $index=0;
        $hasilPenyakit=array();
        foreach ($data as $no => $v) {
            if($kdpenyakit==trim($v->kdPenyakit)){
                array_push($dtPenyakit,$v);
            }else{
                if(count($dtPenyakit)>0){
                    array_push($hasilPenyakit,$dtPenyakit);
                    $dtPenyakit=array();
                }
                $kdpenyakit=$v->kdPenyakit;
                array_push($dtPenyakit,$v);
            }
        }
        if(count($dtPenyakit)>0){
            array_push($hasilPenyakit,$dtPenyakit);
        }
        // return print_r($data); 
        // tahap 2 -> data double
        
        foreach ($data as $no => $v) {
            if($v->total>1){
                $dtDouble=json_decode(json_encode($this->Query->_func("SELECT *,(cf*((mb-md)*".$v->mb1.")) as cfKombinasi FROM gejala where kdgejala!='".$v->kdGejala."' and nmGejala='".$v->nmGejala."'")));
                foreach ($dtDouble as $no1 => $v1) {
                    $checked=true;
                    foreach ($hasilPenyakit as $no2 => $v2) {
                        if($v1->kdPenyakit==trim($v2[0]->kdPenyakit)){
                            $checked=false;
                            array_push($hasilPenyakit[$no2],$v1);
                            break;
                        }
                    }
                    if($checked){
                        array_push($hasilPenyakit,array($v1));
                    }   
                }
            }
        }

       
        // return print_r($hasilPenyakit); 
        // tahap 3 -> Perhitungan CF

        // return print_r($hasilPenyakit);
        $indexTertinggi=0;
        $hasilTampung=0;
        foreach ($hasilPenyakit as $no => $v) {
            $hitung=0;
            $hitungKombinasi=0;

            if(count($v)==1){
                $hitung=$v[0]->cfKombinasi;
            }else{
                $kom1=0;
                foreach ($v as $no1 => $va) {
                    if(count($v)==$no1+1){
                        break;
                    }
                    if($no1==0){
                        $kom1=$va->cfKombinasi;
                        $hitung=$kom1+$v[$no1+1]->cfKombinasi*(1-$kom1);
                    }else{
                        $hitung=$hitung+$v[$no1+1]->cfKombinasi*(1-$hitung);
                    }
                }
            }
            

            //perhitungan hasil pakar
            $hasilPenyakit[$no][0]->hasil=$hitung;
            $hasilPenyakit[$no][0]->persentase=($hitung*100);

            //perhitungan hasil mb&md
            $hasilPenyakit[$no][0]->hasilKom=$hitungKombinasi;
            $hasilPenyakit[$no][0]->persentaseKom=($hitungKombinasi*100);

            //hitung nilai tertinggi berdasarkan hasil hitungan cf atau mb&md
            if($hasilTampung>0){
                if($hasilTampung<$hitung){
                    $hasilTampung=$hitung;
                    $indexTertinggi=$no;
                }
            }else{
                $hasilTampung=$hitung;
                $indexTertinggi=$no;
            }
        }
        

        $pilihBobot="";
        foreach ($bobot as $key => $v) {
            if($hasilPenyakit[$indexTertinggi][0]->hasil>=$v['nilai']){
                $pilihBobot=$key;
            }
        }

        //  return print_r($hasilPenyakit[$indexTertinggi][0]); 
        // tahap 4 get nama penyakit dan saran 
        foreach ($hasilPenyakit as $no => $v) {
            $dtTampung=$this->Query->_func("SELECT * from penyakit where kdPenyakit='".$v[0]->kdPenyakit."'");
            $hasilPenyakit[$no][0]->nama=$dtTampung[0]['nmPenyakit'];
            $hasilPenyakit[$no][0]->detail=$dtTampung[0]['detailPenyakit'];
            $hasilPenyakit[$no][0]->saran=$dtTampung[0]['saran'];
        }

        if($save){
            $this->Query->_proc("INSERT INTO `histori`( `nmPenyakit`, `persentase`,`data`) VALUES 
                (
                    '".$hasilPenyakit[$indexTertinggi][0]->nama."'
                    ,'".$hasilPenyakit[$indexTertinggi][0]->persentase."'
                    ,'".$data1."'
                ) ");
        }
        //hasil
        $html='
            <table class="table table-bordered table-striped"> 
                <head>
                    <tr>
                        <th>No</th>
                        <th>Nama Penyakit</th>
                        <th>Nama Gejala</th>
                        <th>Persentase</th>
                    </tr>
                </head>
                <tbody>';
                $nomor=0;
                foreach ($hasilPenyakit as $no => $v) {
                    foreach ($hasilPenyakit[$no] as $no1 => $v1) {
                        // return print_r($v1->nama);
                        $html.='
                        <tr>
                            <td>'.($nomor+1).'</td>';
                            if($no1==0){
                                $html.='
                                    <td>'.trim($v1->nama).'</td>
                                    <td>
                                        <span class="text text-primary">'.$v1->nmGejala.'</span>
                                    </td>
                                    <td>
                                        <span class="text text-primary">'.substr($v1->persentase,0,4).' %</span>
                                    </td>';
                            }else{
                                $html.='
                                    <td></td>
                                    <td>
                                        <span class="text text-primary">'.$v1->nmGejala.'</span>
                                    </td>
                                    <td>
                                        <span class="text text-primary"></span>
                                    </td>';
                            }
                       
                        $html.='</tr>';
                        $nomor+=1;
                    }
                }
                                    
                $html.='</tbody>
            </table>
        ';

        $html.='
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Hasil Diagnosa</h6>
                </div>
                <div class="card-body">
                Jenis penyakit yang diderita adalah <h3 class="text text-success"><b>'.$hasilPenyakit[$indexTertinggi][0]->nama.'</b> dengan persentase ('.substr($hasilPenyakit[$indexTertinggi][0]->persentase,0,4).'%) <b>'.$bobot[$pilihBobot]['nama'].'</b><br></h3>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-success">
                    <h6 class="m-0 font-weight-bold text-white">Detail</h6>
                </div>
                <div class="card-body">
                    '.$hasilPenyakit[$indexTertinggi][0]->detail.'
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-warning">
                    <h6 class="m-0 font-weight-bold text-white">Saran</h6>
                </div>
                <div class="card-body">
                    '.$hasilPenyakit[$indexTertinggi][0]->saran.'
                </div>
            </div>
        ';
        return $html;
    }

    function history($id){
        $data=$this->Query->_func("SELECT * FROM histori where id='".$id."'");
        return print_r($this->prosesDiagnosa($data[0]['data'],false));
    }

    public function _uploadImage($file,$nama){
        $nama=explode(".",$nama);
        $image=substr($file,23);
        date_default_timezone_set("America/New_York");
        $namaFile=$nama[0]."-".date("Y-m-d-h-i-sa").".".$nama[1];
        $lokasiFile='./assets/upload/'.$namaFile;
        write_file($lokasiFile,base64_decode($image));
        return $namaFile;
    }
    
    function ubahpassword(){
        $pass=$_POST['pass'];
        $passB=$_POST['passB'];
        if($this->session->password!=$pass){
            return print_r("gagal, password lama tidak sesuai !!!"); 
        }
        $check=$this->Query->_proc("
            update admin set password='".$passB."' where id='".$this->session->id."'
        ");
        if($check){
            print_r("sukses");
        }else{
            print_r("gagal"); 
        }
    }
}