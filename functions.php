<?php
include ('config.php');
if(isset($_POST["Export"])){
    $no=1;
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('No', 'Aplikasi', 'Alamat', 'Unit Kerja', 'Departemen'));  
    $query = "SELECT namaapps, alamat, unitkerja, departemen FROM apps";  
    $result = mysqli_query($koneksi, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {
        array_unshift($row,$no);  
        fputcsv($output, $row);
        $no++;  
    }  
    fclose($output);
}  
?>

<?php
include ('config.php');
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
        $flag = true;  
        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
            if($flag) { $flag = false; continue; }
             $sql = "INSERT into apps (namaapps,alamat,unitkerja,departemen) 
                   values ('".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                   $result = mysqli_query($koneksi, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>