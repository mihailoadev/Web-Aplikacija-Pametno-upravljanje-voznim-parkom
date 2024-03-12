<?php
  require(__DIR__ . '/../config/db_connection.php');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM vehicles WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>

<form action="../includes/update_process.php" method="post">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="mb-3">
        <label for="parkingTypeInput" class="form-label">Tip parkinga:</label>
        <select class="form-select" id="parkingTypeInput" name="parking_type" required>
          <option value="Garaža" <?php if($row["parking_type"]=="Garaža"){echo "selected";} ?>>Garaža</option>
          <option value="Parking" <?php if($row["parking_type"]=="Parking"){echo "selected";} ?>>Parking</option>
        </select>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <label for="parkingSpotInput" class="form-label">Broj parking mesta:</label>
        <input type="number" value="<?php echo $row["parking_number"]; ?>" class="form-control" id="parkingNumberInput" name="parking_number" min="1" max="1200" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <label for="registrationInput" class="form-label">Registracija vozila:</label>
        <input type="text" value="<?php echo $row["registration"]; ?>" class="form-control" id="registrationInput" name="registration" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="mb-3">
        <label for="vehicleTypeInput" class="form-label">Tip vozila:</label>
        <select class="form-select" id="vehicleTypeInput" name="vehicle_type" required>
          <option value="Automobil" <?php if($row["vehicle_type"]=="Automobil"){echo "selected";} ?>>Automobil</option>
          <option value="Kamion" <?php if($row["vehicle_type"]=="Kamion"){echo "selected";} ?>>Kamion</option>
          <option value="Pick-up" <?php if($row["vehicle_type"]=="Pick-up"){echo "selected";} ?>>Pick-up</option>
        </select>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <label for="registrationDateInput" class="form-label">Datum registracije:</label>
        <input type="date" value="<?php echo $row["registration_date"]; ?>" class="form-control" id="registrationDateInput" name="registration_date" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <label for="expirationDateInput" class="form-label">Istek registracije:</label>
        <input type="date" value="<?php echo $row["expiration_date"]; ?>" class="form-control" id="expirationDateInput" name="expiration_date" required>
      </div>
    </div>

    <div class="col-md-4">
      <div class="mb-3">
        <label for="technicalConditionInput" class="form-label">Tehnička ispravnost:</label>
        <select class="form-select" id="tehnicalConditionInput" name="tehnical_condition" required>
          <option value="Ispravno" <?php if($row["tehnical_condition"]=="Ispravno"){echo "selected";} ?>>Ispravno</option>
          <option value="U kvaru" <?php if($row["tehnical_condition"]=="U kvaru"){echo "selected";} ?>>U kvaru</option>
        </select>
      </div>
    </div>
  </div>

  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >

  <div class="mb-3">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
      <button type="submit" name="editdata" class="btn btn-dark btn-lg"><i class="fa-solid fa-floppy-disk" style="color: #ffffff;"></i> Sačuvaj promene</button>
      <a href="../pages/dashboard.php#table" class="btn btn-secondary btn-lg"><i class="fa-solid fa-ban" style="color: #ffffff;"></i> Otkazi</a>
    </div>
  </div>
</form>
  <?php } ?>