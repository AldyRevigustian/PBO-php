<?php
class Motor
{
  // Properties
  private $merk;
  private $kondisi;
  private $kecepatan = "1000cc";
  private $warna = "Merah";
  private $sisa_bensin = 1;
  private $plat = "B126571";
  private $lampu_sen;

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
    if($this->lampu_sen == 0){
      echo "Lampu Sen : Nyala" . "\n". "\n";
    } else{
      echo "Lampu Sen : Mati" . "\n". "\n";
    }
    $this->lampu_sen = $kondisi;
  }

  // Setter Getter
  function set_merk($merk)
  {
    $this->merk = $merk;
  }
  
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
}
$vario = new Motor();
$vario->set_merk("Vario");
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

echo "Nyalain Lampu Sen"  . "\n";
$vario->lampu_sen(0);


// $vario->isi_bensin("2");
$vario->isi_bensin(2);
// echo "Total Bensin Setelah Di Tambah : " . $vario->get_bensin() . " Liter" . "\n" . "\n" ;

$vario->cat_motor("Kuning");
echo "Motor Di Cat : " . $vario->get_warna() . "\n";

echo "Ganti Motor Baru : " . "Motor " . $vario->get_merk();

?>