
<?php
class Mobil
{
    // Properties
    private $nama;
    private $warna;
    private $plat;

    // Methods
    function set_nama($nama_mobil)
    {
        $this->nama = $nama_mobil;
    }

    function get_nama()
    {
        return $this->nama;
    }

    function set_warna($warna_mobil)
    {
        $this->warna = $warna_mobil;
    }

    function get_warna()
    {
        return $this->warna;
    }

    function set_plat($plat_mobil)
    {
        $this->plat = $plat_mobil;
    }

    function get_plat()
    {
        $hasil = "";
        for ($i = 0; $i < strlen($this->plat); $i++) {
            $hasil .= "*";
            # code...
        }
        return $hasil;
    }
}
$avanza = new Mobil();
$avanza->set_nama("Avanza");
$avanza->set_warna("Silver");
$avanza->set_plat("B2716HGS");

echo $avanza->get_nama() . "\n";
echo $avanza->get_warna() . "\n";
echo $avanza->get_plat() . "\n";
?>