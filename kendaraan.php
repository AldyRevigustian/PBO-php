<?php
class Kendaraan
{
    protected $kondisi;
    protected $plat;
    protected $kecepatan;
    protected $lampu_sen;
    protected $sisa_bensin;

        
    function __construct($komdingsi,$platm, $cepat, $sen, $bengsin)
    {

        // Kondisi
        if($this-> kondisi = 0  == $komdingsi ){
            $this->kondisi = "Sudah Mati";
        } else if ($this-> kondisi = 1 == $komdingsi){
            $this->kondisi = "Sudah Menyala";
        } else {
            if ($komdingsi == 0){
                $this->kondisi = "Mesin Mati";
            }else if  ($komdingsi == 1){
                $this->kondisi = "Mesin Nyala";
            }
        }

        // Plat
        if(strlen($platm) > 6 || strlen($platm) < 6){
            $this->plat ="Plat Nomor Invalid" ;
        }else {
            $this->plat = $platm;
        }

        // Keceepatan
        if($cepat > 5000){
            $this->kecepatan = "kecepatan Invalid";
        } else {
            $this->kecepatan = $cepat;
        }

        // Lampu Sen
        if($sen == 0){
            $this->lampu_sen = "Lampu Sen : Mati" . "\n". "\n";
        } else if ($sen == 1){
            $this->lampu_sen = "Lampu Sen : Nyala" . "\n". "\n";
        }

        // Sisa bensin
        $this->sisa_bensin = $bengsin;
    }

    function __destruct() {
        echo "------------------------------------------------\n";
    }

    function lampu_sen($sen)
    {
        if($sen == 0){
            $this->lampu_sen = "Lampu Sen : Mati" . "\n";
        } else if ($sen == 1){
            $this->lampu_sen = "Lampu Sen : Nyala" . "\n";
        }
    }
}

class Motor extends Kendaraan{
    private $merk;
    private $warna;

    function __construct($merek,$color,$komdingsi,$platm, $cepat, $sen, $bengsin)
    {   // Kondisi
        if($this-> kondisi = 0  == $komdingsi ){
            $this->kondisi = "Sudah Mati";
        } else if ($this-> kondisi = 1 == $komdingsi){
            $this->kondisi = "Sudah Menyala";
        } else {
            if ($komdingsi == 0){
                $this->kondisi = "Mesin Mati";
            }else if  ($komdingsi == 1){
                $this->kondisi = "Mesin Nyala";
            }
        }

        // Plat
        if(strlen($platm) > 7 || strlen($platm) < 7){
            $this->plat ="Plat Nomor Invalid" ;
        }else {
            $this->plat = $platm;
        }

        // Keceepatan
        if($cepat > 1500){
            $this->kecepatan = "kecepatan Invalid";
        } else {
            $this->kecepatan = $cepat;
        }

        // Lampu Sen
        if($sen == 0){
            $this->lampu_sen = "Lampu Sen : Mati" . "\n";
        } else if ($sen == 1){
            $this->lampu_sen = "Lampu Sen : Nyala" . "\n";
        }

        // Sisa bensin
        $this->sisa_bensin = $bengsin;

        // Merk
        if(strlen($merek) < 3){
            $this -> merk = "Nama Motor Invalid";
        } else {
            $this -> merk = $merek;
        }

        $this->warna = $color;
    }


    function tambah_bensin ($bengsin){
        $total_bensin = $this->sisa_bensin += $bengsin;
        if ( $total_bensin > 4) {
            $this->sisa_bensin = "Tambah Bensin : " .  strval($bengsin) . " L" . "\n" . "Gagal! Tanki Bensin Maksimal 4 Liter" . "\n" . "\n";
            // echo "";
        }else{
            // $this->sisa_bensin += $bengsin;
            $this->sisa_bensin = "Tambah Bensin : " . strval($bengsin) . " L" . "\n" . "Berhasil! Tanki Bensin Berhasil Di Isi" . "\n" . "\n" ."Total Isi Tanki Bensin : " . $total_bensin . " Liter" . "\n" . "\n";
        }
    }

    function ganti_warna($warna_baru){
        if($this->warna == $warna_baru){
            $this->warna = "Warna Motor Tidak Berubah";
        }else {
            $this->warna = $warna_baru;
        }
    }

    function get_merk(){
        return $this -> merk;
    }
    function get_color(){
        return $this -> warna;
    }
    function get_kondisi(){
        return $this -> kondisi;
    }
    function get_plat(){
        return $this -> plat;
    }
    function get_kecepatan(){
        return $this -> kecepatan  . " cc";
    }
    function get_sen(){
        return $this -> lampu_sen;
    }
    function get_bensin(){
        return $this -> sisa_bensin;
    }
}

$mio = new Motor("Mio","Merah", 0,"B1042PJ",500,0,1);

echo "------------------------------------------------\n";

// $mio = new Motor()
echo "Merk Motor : " . $mio->get_merk();
echo "\n";

echo "Warna Motor : " . $mio-> get_color();
echo "\n";
    

echo "Plat Motor : " . $mio-> get_plat();
echo "\n";

echo "Kecepatan Motor : " . $mio-> get_kecepatan();
echo "\n";


echo "Sisa Bensin : " . $mio-> get_bensin() . " L";
echo "\n";

echo "Kondisi Motor : " . $mio-> get_kondisi();
echo "\n";

echo  $mio-> get_sen();
echo "\n \n";

echo "Nyalain Lampu Sen"  . "\n";
$mio->lampu_sen(1);
echo $mio->get_sen();
echo "\n";


echo "Matiin Lampu Sen"  . "\n";
$mio->lampu_sen(0);
echo $mio->get_sen();
echo "\n";

$mio->tambah_bensin(2);
echo $mio -> get_bensin();

$mio->ganti_warna("Kuning");
echo "Motor Di Cat : " . $mio->get_color() . "\n";


?>