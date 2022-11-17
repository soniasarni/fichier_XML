


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
</head>
<body>
    <div class=container>
        <h4 >créer mon compte USER</h4>
               <form  method="post" action="">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input type="text" class="form-control" required name="nom">
                   </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                        <input type="text" class="form-control" required name="prenom">
                   </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Tel</label>
                        <input type="number" class="form-control" required name="tel">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                   </div>
                    <div>
                        <label for="exampleFormControlInput1" class="form-label" >Password</label>
                        <input type="password" class="form-control" name="password">
                   </div>
                    <div >
                       <button class="btn btn-primary" id ="btn" type="submit"value="ajouter">Ajout</button>
                   </div>
             </form>
         </div>
         <?php







if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['password'])){
   echo"53";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $pwd=$_POST['password'];
    $date=date("Y-m-d H:i:s");
    echo"500";
    $id=fopen("inscription.log","a");
    if($id===false)
die("erreur");
else{
flock($id,LOCK_EX);//LOCK_SH 
}

fwrite($id,"$date;$nom;$prenom;$email;$pwd;$tel"."\n");
flock($id,LOCK_UN);
$r=fclose($id);
if($r===false)die("erreurrrr");

}
 ?>       
</body>
</html>