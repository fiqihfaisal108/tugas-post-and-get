<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" value="" id="nama" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" value="" id="nim" class="form-control">
                </div>
                <label for="kurir">Lesson</label>
                <select class="form-select form-control" name="mata_kuliah" id="kurir" class="form-control">
                    <option value="" selected>Choose Lesson :</option>
                    <option value="Web Programing">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statiska">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>

                <div class="form-group mt-3">
                    <label for="nilai_uts"> UTS Value</label>
                    <input type="text" name="nilai" value="" id="nilai_uts" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nilai_uas">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" id="nilai_uas" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nilai_tugas">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" id="nilai_tugas" class="form-control">
                </div>
                <input type="submit" value="simpan" name="simpan" class="btn btn-primary btn-sm btn-block">

            </form>
            
            <?php 
            

            if ($_GET)
            {
              @$nama = $_GET["nama"];
              @$nim = $_GET["nim"];
              @$mata_kuliah = $_GET["mata_kuliah"];
              @$nilai = $_GET["nilai"];
              @$nilai_uas = $_GET["nilai_uas"];
              @$nilai_tugas = $_GET["nilai_tugas"];
              @$dibagi = $nilai + $nilai_uas + $nilai_tugas;
              @$hasil = $dibagi / 3;
              if ($hasil >= 85){
                $kelas = "A";
              }elseif ($hasil >= 70)
              { $kelas = "B";
              }elseif ($hasil >= 60)
              { $kelas = "C";
              }elseif ($hasil >= 40)
              { $kelas = "D";
              }else{
                $kelas = "E";
              }

              if ( isset ($_GET["nama"]) 
              AND ($_GET["nim"]) 
              AND ($_GET["mata_kuliah"])
              AND ($_GET["nilai"]) 
              AND ($_GET["nilai_uas"])  
              AND ($_GET["nilai_tugas"])){

              }else{
                  echo "MASIH ADA YANG KOSONG, MOHON DI ISI DENGAN LENGKAP";
              }
        
            }
            ?>

            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" >Name : <?= @$nama ?></li>
                    <li class="list-group-item">Nim : <?= @$nim ?></li>
                    <li class="list-group-item">Lesson : <?= @$mata_kuliah ?></li>
                    <li class="list-group-item">UTS Value : <?= @$nilai ?></li>
                    <li class="list-group-item">UAS Value: <?= @$nilai_uas ?></li>
                    <li class="list-group-item">Assignment Value : <?= @$nilai_tugas ?></li>
                    <li class="list-group-item">Value Total : <?= @$hasil ?></li>
                    <li class="list-group-item">Value in Alphabet : <?= @$kelas ?></li>
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 - 84</li>
                    <li class="list-group-item">C : 60 - 69</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div><br><br/>

</body>
</html>
