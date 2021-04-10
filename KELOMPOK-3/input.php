php
<!DOCTYPE html>
<html>
<head>
  <title>Input Data Relawan Covid-19</title>
      <link rel="stylesheet" href="style3.css">
  <style type="text/css">
    blockquote {
        font: 2em/1em 'Open Sans', sans-serif;
        -webkit-text-stroke: 1px black;
        text-shadow: 2px 2px #000;
        margin: 20px 0 15px 0;
        color: #fff;
    }
    *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          outline: none;
        font-family: 'Josefin Sans', sans-serif;
      }


    #container { 
        width:500px; 
        margin:50px auto; 
        border:0px solid #555; 
        box-shadow:0px 0px 2px #555; 
      }

    input[type="text"]{

    }
    input[type="text"], select { padding:5px; margin:2px 0px; border: 1px solid #777; width:450px; height: 50px;}
    input[type="submit"], input[type="reset"]{ padding: 5px 20px; margin:2px 0px; font-weight:bold; cursor:pointer; }

      h1 {
        text-align: center;
        margin-top: 50px;
        padding: 20px;
      }
      form {  
        background-color: #fffdf3;
        padding: 25px;
        border-radius: 10px;
      background-color: beige;
      }
    

    </style>
</head>
<body>

<div id="container" >
    <center style="margin-top: 15px;">
      <blockquote>Input Penerimaan Bantuan Sosial Covid19</blockquote>
    </center>
    
    <form action="prosesinput.php" method="post">
      <p>
        <b>Jenis Alokasi</b><br>
             <select name="jenisAlokasi">
                <option value="0">-- PILIH JENIS ALOKASI --</option>
                <option value="Alat Perlindungan Diri">Alat Perlindungan DIri</option>
                <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
                <option value="Kuota Mahasiswa">Kuota Mahasiswa</option>
                <option value="Hand Sanitizer">Hand Sanitizer</option>
                <option value="Sembako Masyarakat">Sembako Masyarakat</option>
             </select>
      </p>
      <p>
        <b>Jumlah Transaksi :</b><br>
        <input type="text" name="jumlahTransaksi"/>
      </p>
      <p>
        <b>Jumlah Dana :</b><br>
        <input type="text" name="jumlahDana"/>
      </p>

      <p>
        <b>Nama Lengkap :</b><br>
        <input type="text" name="namaLengkap"/>
      </p>
      <p>
        <b>No Hp :</b><br>
        <input type="text" name="nomorHape"/>
      </p>
      <p>
        <b>Email:</b><br>
        <input type="text" name="email"/>
      </p>
      <p>
        <input type="submit" name="inputData" value="Input Data" class="tombol"/>
      </p>
    </form>
  </div>
</body>

</html>