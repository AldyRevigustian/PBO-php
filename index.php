<?php
class Motor
{
  // Properties
  private $merk;
  private $kondisi;
  private $kecepatan ;
  private $warna ;
  private $sisa_bensin;
  private $plat;
  private $lampu_sen;


  function __construct($merk, $kondisi, $kecepatan, $warna, $sisa_bensin, $plat, $lampu_sen)
  {
    $this->merk = $merk;
    $this->kondisi = $kondisi;
    $this->kecepatan = $kecepatan;
    $this->warna = $warna;
    $this->sisa_bensin = $sisa_bensin;
    $this->plat = $plat;
    $this->lampu_sen = $lampu_sen;
  }
  // Method Utama
  function nyalain_motor()
  {
    $this->kondisi = "Nyala";
  }

  function matiin_motor()
  {
    $this->kondisi  = "Mati";

  }

  function cat_motor($warna)
  {
    $this->warna = $warna;
  }

  function isi_bensin($bengsin)
  {
    $total_bensin = $this->sisa_bensin += $bengsin;
    if ( $total_bensin >= 5 ) {
      echo "Tambah Bensin : " .  strval($bengsin) . " L" . "\n" . "Gagal! Tanki Bensin Maksimal 4 Liter" . "\n" . "\n";
    }else{
      // $this->sisa_bensin += $bengsin;
      echo "Tambah Bensin : " . strval($bengsin) . " L" . "\n" . "Berhasil! Tanki Bensin Berhasil Di Isi" . "\n" . "\n" ."Total Isi Tanki Bensin : " . $total_bensin . " Liter" . "\n" . "\n";
    }
  }

  function lampu_sen($kondisi)
  {
    if($kondisi == 0){
      echo "Lampu Sen : Mati" . "\n". "\n";
    } else if ($kondisi == 1){
      echo "Lampu Sen : Nyala" . "\n". "\n";
    }
    $this->lampu_sen = $kondisi;
  }

  // Setter Getter
  function get_merk()
  {
    return $this->merk;
  }
  function get_kondisi()
  {
    return $this->kondisi;
  }
  function get_kecepatan()
  {
    return $this->kecepatan;
  }
  function get_bensin()
  {
    return $this->sisa_bensin;
  }
  function get_warna()
  {
    return $this->warna;
  }
  function get_plat()
  {
    return $this->plat;
  }
  function get_sen()
  {
    return $this->lampu_sen;
  }
}
$vario = new Motor("Vario", "Mati","300 cc","Kuning",2,"B12657",0);
// $vario->set_merk("Vario");
echo "Merk Motor : " . $vario->get_merk() . "\n";
echo "Warna Motor : " . $vario->get_warna() . "\n";
echo "Plat Motor : " . $vario->get_plat() . "\n";
echo "Kecepatan Motor : " . $vario->get_kecepatan() . "\n";
echo "Sisa Bensin Di Tanki : " . $vario->get_bensin() . " Liter" . "\n" . "\n";

echo "Nyalakan Motor"  . "\n";
$vario->nyalain_motor();
echo "Kondisi Motor : " . $vario->get_kondisi() . "\n" . "\n";

echo "Matiin Motor"  . "\n";
$vario->matiin_motor();
echo "Kondisi Motor : " . $vario->get_kondisi() . "\n" . "\n";

echo "Nyalain Lampu Sen"  . "\n";
$vario->lampu_sen(1);
echo $vario->get_sen();


echo "Matiin Lampu Sen"  . "\n";
$vario->lampu_sen(0);


$vario->isi_bensin(2);

$vario->cat_motor("Kuning");
echo "Motor Di Cat : " . $vario->get_warna() . "\n";

?>