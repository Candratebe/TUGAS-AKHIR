 </div>
        <h2>Form Buku Tamu</h2>
        <form method="POST" action="?php echo $_SERVER['PHP_SELF'];?>">
            <div>
              <label>Nama</label>
              <input type="text" name="fnama">
            </div><br>
            <div>
              <label>Email</label>
              <input type="email" name="femail">
            </div><br>
            <div>
              <label>Domisili</label>
              <input type="text" name="fdomisili">
            </div><br>
            <div>
              <label>Jenis Kelamin</label><br>
              <input type="radio" id="jeniskelamin" name="fkelamin" value="Laki-laki">
              <label for="laki_laki">Laki-laki</label><br>
              <input type="radio" id="jeniskelamin" name="fkelamin" value="Perempuan">
              <label for="perempuan">Perempuan</label><br>
            </div><br>
            <div>
              <label>Umur</label>
              <input type="text" name="fumur">
            </div><br>
            <div>
              <label>Pesan</label><br>
              <textarea name="fpesan" cols="40" rows="3"></textarea><br><br>
            </div><br>
            <div>
              <input type="submit" name="Submit">
            </div><br>
          </form>

          <div>
            <?php
                if(isset($_POST['fnama'])){
                  $nama = $_POST['fnama'];
                  $email = $_POST['femail'];
                  $domisili = $_POST['fdomisili'];
                  $jeniskelamin = $_POST['fkelamin'];
                  $umur = $_POST['fumur'];
                  $pesan = $_POST['fpesan'];

                  echo "Nama: $nama<br> Email: $email<br> Domisili: $domisili<br> Jenis Kelamin: $jeniskelamin<br> Umur: $umur<br>  Pesan: $pesan";
                }
            ?>
          </div> 