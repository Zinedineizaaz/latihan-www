<?php
class Penduduk {
    public $nama = "";
    public $NIK = "";
    
    public function biodatadiri() {
        return $this->nama . " dengan NIK " . $this->NIK . " Terlapor.";
    }
}
$pddk01 = new Penduduk();
$pddk01->nama = "Vidi Aldiano";
$pddk01->NIK = "1018028903";

echo $pddk01->biodatadiri();
?>
