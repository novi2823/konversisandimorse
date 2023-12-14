<?php
function morseToString($morse) {
    $morseCode = [
        '.-' => 'A', '-...' => 'B', '-.-.' => 'C', '-..' => 'D', '.' => 'E', '..-.' => 'F', '--.' => 'G', '....' => 'H', '..' => 'I', '.---' => 'J',
        '-.-' => 'K', '.-..' => 'L', '--' => 'M', '-.' => 'N', '---' => 'O', '.--.' => 'P', '--.-' => 'Q', '.-.' => 'R', '...' => 'S', '-' => 'T',
        '..-' => 'U', '...-' => 'V', '.--' => 'W', '-..-' => 'X', '-.--' => 'Y', '--..' => 'Z', '.----' => '1', '..---' => '2', '...--' => '3',
        '....-' => '4', '.....' => '5', '-....' => '6', '--...' => '7', '---..' => '8', '----.' => '9', '-----' => '0', '/' => ' ',
    ];

    $morseWords = explode(' ', $morse);
    $translated = '';

    foreach ($morseWords as $morseWord) {
        if (isset($morseCode[$morseWord])) {
            $translated .= $morseCode[$morseWord];
        }
    }

    return $translated;
}


@$kalimat = $_POST['kalimat'];
@$morse = morseToString($kalimat);

?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morse</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  </head>
  <style>
    body{
      /* background: linear-gradient(to bottom, #0000FF, #ADD8E6); /* Ubah nilai warna sesuai kebutuhan */
        /* color: white;
        background-size: cover;
        background-attachment: fixed; */
        background-image: url('turing2.jpg');
      background-size: cover;
      color:white 
    }
  </style>
  

  <body>
      <br><br><br>
      <div class="container"
      <div class="card">
  <div class="card-header">
    <center>
    <h1>Selamat Datang Di Website Translate Sandi Morse</h1>
    </center>
    <!-- <h5 class="card-title">Translete To Kata</h5> -->
  </div>
  <div class="card-body">
    
      <form action="" method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Masukkan Sandi Morse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="kalimat" name="kalimat" value="<?=@$kalimat;?>" required>
    </div>
  </div>
 <center>
  <button type="submit" class="btn btn-primary">Translate</button>
    <a href="index.php" class="btn btn-warning">Kata Ke Morse</a>
    </center>

</form>
<br>
<center>
  <h3>Hasil Konversi dari Sandi Morse ke Kata</h3>
  <button type="submit" class="btn btn-primary"><h3><?=@$morse;?></h3></button>
</center>
  </div>
</div>
</div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>