<?php echo $pesan; ?>
<table class="table table-condensed table-bordered">
  <tr>
    <td>JENIS MENU</td>
    <td>
      <select class="" name="jnsmenu">
        <?php
          $query = "SELECT * FROM msjenismenu";
          $stmt = $db->prepare($query);
          $stmt->execute();
          foreach ($stmt->fetchALL() as $key => $value) {
        ?>
          <option value="<?php echo  $value['idJenisMenu']?>" <?php if($data['idJenisMenu'] == $value['idJenisMenu']){ echo "selected"; }?>><?php echo $value['JenisMenu']; ?></option>
        <?php } ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>NAMA MENU</td>
    <td><input type="text" name="namaMenu" value="<?php echo $data['namaMenu']; ?>"></td>
  </tr>
  <tr>
    <td>HPP</td>
    <td><input type="text" name=HPP value="<?php echo $data['Hpp']; ?>"></td>
  </tr>
  <tr>
    <td>HARGA</td>
    <td><input type="text" name="harga" value="<?php echo $data['HargaMenu']; ?>"></td>
  </tr>
  <tr>
    <td>DISCOUNT</td>
    <td><input type="text" name="disc" value="<?php echo $data['DiscMenu']; ?>"></td>
  </tr>
  <tr>
    <td>STATUS</td>
    <td>
      <select class="" name="status">
          <option value="1" <?php if( $data['StatusMenu']=='1'){ echo "selected";} ?>>ADA</option>
          <option value="0" <?php if( $data['StatusMenu']=='0'){ echo "selected";} ?>>KOSONG</option>
      </select>
    </td>
  </tr>
</table>
