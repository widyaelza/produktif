<?php
// Definisi kelas
class Motor {
    private $warna;
    private $merek;
    private $jenis;
    private $cc;
    private $bahanBakar;

    public function __construct($warna, $merek, $jenis, $cc, $bahanBakar ) {
        $this->warna = $warna;
        $this->merek = $merek;
        $this->jenis = $jenis;
        $this->cc = $cc;
        $this->bahanBakar = $bahanBakar;
    }    

    public function bergerak() {
        echo "Motor bergerak\n";
    }

    public function berhenti() {
        echo "Motor berhenti\n";
    }

    public function belok() {
        echo "Motor belok\n";
    }

    public function mundur() {
        echo "Motor mundur\n";
    }

    public function gantiTransisi() {
        echo "Motor ganti transisi\n";
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function getCc() {
        return $this->cc;
    }

    public function setCc($cc) {
        $this->cc = $cc;
    }

    public function getBahanBakar() {
        return $this->bahanBakar;
    }

    public function setBahanBakar($bahanBakar) {
        $this->bahanBakar = $bahanBakar;
    }

}
$motorKu = new Motor("silver", "", "moge", "Two stroke", "2.000", "Pertamax Turbo");

$motorKu->bergerak();
$motorKu->berhenti();
$motorKu->belok();
$motorKu->mundur();
$motorKu->gantiTransisi();

echo "<p>";

echo "Warna Motor: " . $motorKu->getWarna() . "\n";
$motorKu->setWarna("hitam");
echo "Warna Motor setelah diubah: " . $motorKu->getWarna() . "\n";

echo "<p>";

echo "Merek Motor: " . $motorKu->getMerek() . "\n";
$motorKu->setMerek("moge");
echo "Merek Motor setelah diubah: " . $motorKu->getMerek() . "\n";

echo "<p>";

echo "Jenis Motor: " . $motorKu->getJenis() . "\n";
$motorKu->setJenis("BMW K1600B");
echo "Jenis Motor setelah diubah: " . $motorKu->getJenis() . "\n";

echo "<p>";

echo "CC Motor: " . $motorKu->getCc() . "\n";
$motorKu->setCc("3.5000");
echo "CC Motor setelah diubah: " . $motorKu->getCc() . "\n";

echo "<p>";

echo "Bahan Bakar Motor: " . $motorKu->getBahanBakar() . "\n";
$motorKu->setBahanBakar("Pertamax plus");
echo "Bahan Bakar  Motor setelah diubah: " . $motorKu->getBahanBakar() . "\n";

echo "<p>";
