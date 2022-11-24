<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Score Reverse Akinator</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  



</head>
<body class="text-center">
    <div class="container !direction !spacing">
        <div class="row">
            <div class="col-12 alert alert-primary" role="alert">
               Score des joueurs
            </div>
        </div>
        <div class="row">
          
            <div class="col-12" >
                <table id="table_id" class="display">
                    <thead><tr><th>Nom</th><th>Score</th></tr></thead>
                    <tbody>
                       
                               

<?php
 $file = 'scores.txt';
 $current = file_get_contents($file);
$scores=explode("\n",$current);
$scoreFinaux=array();
 foreach($scores as $score){
    $scoreArray=explode(":",$score);
   
    if(isset($scoreArray[1]))$scoreFinaux[$scoreArray[0]]=$scoreArray[1];
 }
 //Attention XSS!
 foreach($scoreFinaux as $user=>$score){
   echo "<tr><td>$user</td><td>$score</td></tr>";
 }
?>

</tbody>
                </table>
            </div>
            
        </div>
    </div>
   
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable(


        {
        order: [[2, 'desc']],
    }
    );
} );
</script>
</body>
</html>