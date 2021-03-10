
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="nama"> Customer </label>
                    <input type="text" name="nama" value="" id="nama" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio2" value="Refrigator">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio3" value="Washing Machine">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah">Total Item</label>
                    <input type="text" name="jumlah" value="" id="jumlah" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tanggal">Date Shipping</label>
                    <input type="date" name="tanggal" value="" id="tanggal" date="tanggal" class="form-control">
                </div>

                <label for="kurir">Courier Type</label>
                <select class="form-select form-control" name="kurir" id="kurir" class="form-control">
                    <option selected></option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group mt-3">
                    <label for="alamat">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="biaya_antar">Courier Cost</label>
                    <input type="text" name="biaya_antar" value="" id="biaya_antar" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="asuransi">Assurance Cost</label>
                    <input type="text" name="asuransi" value="" id="asuransi" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>

            <?php 

            if ($_POST) {

                @$nama = $_POST["nama"];
                @$nama_barang = $_POST["nama_barang"];
                @$jumlah = $_POST["jumlah"];
                @$tanggal = $_POST["tanggal"];
                @$kurir = $_POST["kurir"];
                @$alamat = $_POST["alamat"];
                @$biaya_antar = $_POST["biaya_antar"];
                @$asuransi = $_POST["asuransi"];
               
                if ($nama_barang == "TV") {
                    $harga = 3000000;
                }elseif ($nama_barang == "Refrigator") {
                    $harga = 6000000;
                }elseif ($nama_barang == "Washing Machine") {
                    $harga = 4000000;
                } 

                @$total_harga= $jumlah * $harga + $biaya_antar + $asuransi;

                if ( isset ($_POST["nama"]) 
                AND ($_POST["nama_barang"]) 
                AND ($_POST["jumlah"])
                AND ($_POST["tanggal"]) 
                AND ($_POST["kurir"])  
                AND ($_POST["alamat"])
                AND ($_POST["biaya_antar"])
                AND ($_POST["asuransi"])){

                }else{
                    echo "MASIH ADA YANG KOSONG, MOHON DI ISI DENGAN LENGKAP";
                }

            }

            
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= @$nama ?> </li>
                    <li class="list-group-item">Item : <?= @$nama_barang ?> </li>
                    <li class="list-group-item">Total Item : <?= @$jumlah ?> </li>
                    <li class="list-group-item">Date Shipping : <?= @$tanggal ?> </li>
                    <li class="list-group-item">Courier Type : <?= @$kurir ?> </li>
                    <li class="list-group-item">Shipping Address : <?= @$alamat ?> </li>
                    <li class="list-group-item">Courier Cost : <?= @$biaya_antar ?></li>
                    <li class="list-group-item">Assurance Cost : <?= @$asuransi ?></li>
                    <li class="list-group-item">Total Cost : <?= @$total_harga ?> </li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 3.000.000</li>
                    <li class="list-group-item">Refrigator : Rp 6.000.000</li>
                    <li class="list-group-item">Washing Machine : Rp.4000.000</li>
                </ul>
                </div>
            </div>
            
        </div><br><br/>
        
    </div>
</body>
</html>
