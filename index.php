<?php

class MahlukHidup {

    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}

class Manusia extends Mahlukhidup{

    public function biodata($umur, $jeniskelamin)
    {
        echo "
        MANUSIA <br>
        # $this->nama <br>
        - $umur Tahun<br>
        - $jeniskelamin <br>
        - Makanan Kesukaan <br>";
        
    }    
    public function makananKesukaan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}
class Hewan extends Mahlukhidup{

    public function biodataHewan($umur, $jenishewan ,$jeniskelamin)
    {
        echo "
        HEWAN <br>
        # $this->nama <br>
        - $umur Tahun <br>
        - $jenishewan <br>
        - $jeniskelamin <br>
        - Makanan Kesukaan Hewan <br>";
        
    }    
    public function makananKesukaanHewan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}



////////////////////////////////


class Bangunan {
    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}
 
class Pribadi extends Bangunan {
    public function detailRuangan($luas, $harga)
    {
        echo "
        Bangunan Pribadi <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Ruangan <br>";
        
    }    
    public function jumlahRuangan($nama_ruangan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_ruangan $jumlah ruangan.
        <br>
        ";
    }    
    
}
class Umum extends Bangunan {
    public function detailBangunan($luas, $harga)
    {
        echo "
        Bangunan Umum <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Bangunan Ruangan <br>";
        
    }    
    public function jumlahBangunan($nama_bangunan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_bangunan $jumlah Ruang.
        <br>
        ";
    }   

}

echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Tri Mulia");
$new->biodata(19, "Wanita");
$new->makananKesukaan("Bakso");
$new->makananKesukaan("Mie Ayam");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Harimau");
$hewan->biodataHewan(2, "Mamalia" ,"Betina");
$hewan->makananKesukaanHewan("Daging Ayam");
$hewan->makananKesukaanHewan("Ceker Ayam");


echo  
"<br><br>";

echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";

$pribadi = new Pribadi("Rumah Pribadi");
$pribadi->detailRuangan("500m2", "Rp.80000000");
$pribadi->jumlahRuangan("kamar tidur", 3);
$pribadi->jumlahRuangan("Dapur ", 1);
$pribadi->jumlahRuangan("Kamar Mandi", 2);


echo "==CLASS CHILD KEDUA ==<br><br>";

$pribadi = new Umum("Kampus");
$pribadi->detailBangunan("800m2", "Rp.100000000");
$pribadi->jumlahBangunan("Ruang Mahasiswa", 25);
$pribadi->jumlahBangunan("Ruang Dosen", 4);
$pribadi->jumlahBangunan("Ruang Audit", 1    );







