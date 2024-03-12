<?php  
        require(__DIR__ . '/../config/db_connection.php');
        $output = '';
        if(isset($_POST["export"]))
        {
         $query = "SELECT * FROM vehicles";
         $result = mysqli_query($conn, $query);
         if(mysqli_num_rows($result) > 0)
         {
          $output .= '
           <table class="table" border="1" style="font-family: Poppins, sans-serif; font-size: 12px;">  
               <tr>
               <th>ID</th>                   
              <th>Tip parkinga</th>
              <th>Broj parking mesta</th>
              <th>Registracija</th>
              <th>Tip vozila:</th>
              <th>Datum registracije</th>
              <th>Istek registracije</th>
              <th>Tehničko stanje</th>
               </tr>';
          while($row = mysqli_fetch_array($result))
          {
           $output .= '
            <tr>  
                <td>'.$row["id"].'</td>  
                <td>'.$row["parking_type"].'</td>  
                <td>'.$row["parking_number"].'</td>  
                <td>'.$row["registration"].'</td>  
                <td>'.$row["vehicle_type"].'</td>
                <td>'.$row["registration_date"].'</td>
                <td>'.$row["expiration_date"].'</td>
                <td>'.$row["tehnical_condition"].'</td>
            </tr>';
          }
          $output .= '</table>';
          
          header('Content-Type: application/vnd.ms-excel');          
          header('Content-Type: text/html; charset=utf-8');         
          header("Content-Disposition: attachment; filename=eParkingData".date('d-m-Y').".xls");
          echo "\xEF\xBB\xBF";
          echo $output;
         }
        }
        ?>