<!DOCTYPE html>

<head>
    <title>FENICA STORE</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>
        .error {color:#E90000;}
        .total-harga {
            text-align: center;
            color: #31fbfe 
        }
    </style>
</head>
<h1 class="Font" style="color: #814f1d; text-shadow: 6px 4px 0px #e8d6c4; text-align: center">FENICA STORE</h1>
<h3 class="Font" style="color: #814f1d; text-shadow: 6px 4px 0px #e8d6c4; text-align: center">We Sell Your Dream Shoes</h3>

<body>
    <?php
    $codeErr = $jmlhErr = "";
    $codeSepatu = $jumlahBarang = "";
    class tokoSepatu
    {
        private $codeSepatu;
        private $jumlahBarang;

        public function __construct($codeSepatu, $jumlahBarang)
        {
            $this->codeSepatu = $codeSepatu;
            $this->jumlahBarang = $jumlahBarang;
        }

        public function setcodeSepatu($codeSepatuBaru)
        {
            $this->codeSepatu = $codeSepatuBaru;
        }

        public function setjumlahBarang($jumlahBarangBaru)
        {
            $this->jumlahBarang = $jumlahBarangBaru;
        }

        public function getcodeSepatu()
        {
            return $this->codeSepatu;
        }

        public function getjumlahBarang()
        {
            return $this->jumlahBarang;
        }

        public function getHasil()
        {
            if ($this->codeSepatu == '0401') {
                $hasil = 8500000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0402') {
                $hasil = 5000000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0501') {
                $hasil = 28300000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0502') {
                $hasil = 15000000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0601') {
                $hasil = 70000000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0602') {
                $hasil = 44000000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0701') {
                $hasil = 21100000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0702') {
                $hasil = 7800000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0801') {
                $hasil = 8850000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else if ($this->codeSepatu == '0802') {
                $hasil = 6850000 * $this->jumlahBarang;
                echo "<br>Total Harga = Rp$hasil";
            } else {
                echo "<script type='text/javascript'>alert('Maaf, code tidak terdaftar');</script>";
            }
    
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["CodeSepatu"])) {
            $codeErr = "code is required";
        } else {
            $codeSepatu = ($_POST["CodeSepatu"]);
        }
        if (empty($_POST["JumlahBarang"])) {
            $jmlhErr = "jumlah barang is required";
        } else {
            $jumlahBarang = ($_POST["JumlahBarang"]);
        }
        if ($codeSepatu < 0 || $jumlahBarang < 0) {
            if (empty($_POST["CodeSepatu"])) {
                $codeErr = "code is required";
                
            } else if (empty($_POST["JumlahBarang"])) {
                $jmlhErr = "jumlah barang is required";
            } 
            else {
                echo "<script type='text/javascript'>alert('angka hanya bisa bernilai positif');</script>";
            }
           
        }
    }
    ?>
    
    <table border="4" cellspacing="5" cellpadding="10" style="text-align: center; margin-left: auto; margin-right: auto;">
        <tr style="text-align: center ; color: black">
            <th>Code</th>
            <th>Merk Sepatu</th>
            <th>Jenis Sepatu</th>
            <th>Harga Sepatu</th>
        </tr>
        <tr>
            <td>0401</td>
            <td rowspan="2">Converse</td>
            <td>Converse One Star 74 Ox Neighborhood Black</td>
            <td>Rp 8.500.000,00</td>
        </tr>
        <tr>
            <td>0402</td>
            <!-- <td></td> -->
            <td>Converse Chuck Taylor All-Star 70's High Bandulu</td>
            <td>Rp 5.000.000,00</td>
        </tr>
        <tr>
            <td>0501</td>
            <td rowspan="2">Adidas</td>
            <td>Adidas Samba Have A Good Time</td>
            <td>Rp 28.300.000,00</td>
        </tr>
        <tr>
            <td>0502</td>
            <!-- <td></td> -->
            <td>Adidas adiEase A$AP Ferg Traplord Black</td>
            <td>Rp 15.000.000,00</td>
        </tr>
        <tr>
            <td>0601</td>
            <td rowspan="2">Nike</td>
            <td>Nike Air Force 1 Low Louis Vuitton By Virgil Abloh White Red</td>
            <td>Rp 70.000.000,00</td>
        </tr>
        <tr>
            <td>0602</td>
            <!-- <td></td> -->
            <td>Air Jordan 1 Retro Satin Bred Banned</td>
            <td>Rp 44.000.000,00</td>
        </tr>
        <tr>
            <td>0701</td>
            <td rowspan="2">New Balance</td>
            <td>New Balance 992 JJJJound Grey</td>
            <td>Rp 21.100.000,00</td>
        </tr>
        <tr>
            <td>0702</td>
            <!-- <td></td> -->
            <td>New Balance 992 Tan</td>
            <td>Rp 7.800.000,00</td>
        </tr>
        <tr>
            <td>0801</td>
            <td rowspan="2">Vans</td>
            <td>Vans Slip-On Van GOGh Letters</td>
            <td>Rp 8.850.000,00</td>
        </tr>
        <tr>
            <td>0802</td>
            <!-- <td></td> -->
            <td>Vans Slip-On Kith x mastermind Japan Black</td>
            <td>Rp 6.850.000,00</td>
        </tr>
    </table>
    
    <table style="margin-left: auto; margin-right: auto;">
        <br>
        <form method="post">
            <tr>
                <td><label class="code" for="codeSepatu">Code</label></td>
                <td><input type="text" id="codeSepatu" name="CodeSepatu" class="bil"> <br></td>
                <td><span class="error">* <?php echo $codeErr; ?></span></td>
            </tr>

            <tr>
                <td><label class="jumlah" for="jumlahBarang">Banyak Pembelian</label></td>
                <td><input type="text" id="jumlahBarang" name="JumlahBarang" class="bil"> <br></td>
                <td><span class="error">* <?php echo $jmlhErr; ?></span></td>
            </tr>

            <tr>
            <td colspan="3" style="text-align: center;"><button style="display: inline-block;">check</button></td>
            </tr>
        </form>
    </table>
    <div class="total harga">
    <?php
       $TokoSepatu = new tokoSepatu($codeSepatu, $jumlahBarang);
        if ($codeSepatu > 0 && $jumlahBarang > 0) {
            echo '<div class="total-harga">';
            $TokoSepatu->getHasil();
           
        }
   ?>
    </div>
</body>

</html>