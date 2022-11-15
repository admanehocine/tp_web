





<?php
//$connection = mysqli_connect("localhost","root","");
//if (!$connection) {
  //  die("Database connection failed");
//}

// 2. Select a database to use 
//$db_select = mysqli_select_db($connection, "atelierweb");
//if (!$db_select) {
  //  die("Database selection failed: " . mysqli_error($connection));
//}

 


/*$host='localhost';
$login='root';
$passwd;
$bdd='ssss';
$c=mysqli_connect("localhost", "root","", "atelierweb");
 if (!$c) die ("échc : " . mysqli_connect_error());
 $q='SELECT `Cod_Wil`, `Nom_wil` FROM `wilaya`';
 $r=mysqli_query($c,$q);
 if (mysqli_num_rows($r)>0) {
 while($l=mysqli_fetch_assoc($r)) {
  echo 'Nom : ' . $l['Cod_Wil '] . ' – ';
  echo 'Prénom : ' . $l['Nom_Wil '] . '.<br>';}
  mysqli_free_result($r);}
 else {
  echo 'Aucun résultat'; }
 mysqli_close($c);
***/


function changeformedate($date_naissance){
  
  $arr1 = explode('/', $date_naissance);
  $date3=$arr1[2].'-'.$arr1[1].'-'.$arr1[0];
return $date3;
}

function Age($date_naissance)
{
    $arr1 = explode('/', $date_naissance);
    $arr2 = explode('/', date('d/m/Y'));
		
    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
    return $arr2[2] - $arr1[2];

    return $arr2[2] - $arr1[2] - 1;
}
function comparetime($d1,$d2)
{
    @$ar1 = explode(':', $d1);
    @$ar2 = explode(':', $d2);
    if(@($ar1[0] == $ar2[0])){
    if(@($ar1[1] == $ar2[1])){
      return 0;
    }else {
    if(@($ar1[1] <$ar2[1]))
    return @($ar2[1]-$ar1[1]);
   else 
    return @($ar1[1]-$ar2[1]);
    
    }}
  else
   { if(@($ar1[0] < $ar2[0])){
      if(@($ar1[1] == $ar2[1]))
        return @(($ar2[1]-$ar1[1])*60);
      else {
      if(@($ar1[1] <$ar2[1]))
      return @(($ar2[1]-$ar1[1])+@($ar2[1]-$ar1[1])*60);
     else return @(($ar1[1]-$ar2[1])+@($ar2[1]-$ar1[1])*60);
        }}else  {  if(@($ar2[0] < $ar1[0])){
      if(@($ar1[1] == $ar2[1]))
        return @(($ar[1]-$ar2[1])*60);
      else {
      if(@($ar1[1] <$ar2[1]))
      return @(($ar1[1]-$ar2[1])+@($ar2[1]-$ar1[1])*60);
     else 
      return @(($ar1[1]-$ar2[1])+@($ar2[1]-$ar1[1])*60);
       }} 
}
}}
    
//if (isset($_POST['champListe'])){echo $_POST['champListe'];}
//$ma_date_de_naissance = '26/05/1987';
//$mon_age = Age($_POST['dtn'] );

//echo $mon_age;
 /**
  * $la_Date[2] --> Année
*$la_Date[1] --> Mois
*$la_Date[0] --> Jour
  */
 @$tableau=$_POST['centre'];
@$val=$_POST['valider'];
$centre=$ce=" ";
$erreur1="";  $c1=$c2=$c3=$c4=$c5=$c6=$c7=$c8=$c9=$c10=$c11=" ";
$erreur2="";  $d1=$d2=$d3=$d4=$d5=$d6=$d7=$d8=$d9=$d10=$d11=" ";
$erreur3="";  $m1=$m2=$m3=$m4=$m5=$m6=$m7=$m8=$m9=$m10=$m11=0;
               $cas=0;
$erreur4="";
$erreur5="";
$erreur6="";
$erreur7="";
$erreur8="";
$erreur9="";
$erreur10="";
$erreur11="";
$erreur12="";
$erreur13="";
$erreur14="";
$erreur15="";
$erreur16=" ";
$erreur19=" ";
$langue=" ";

@$langue=$_POST["langue"];


if(isset($val)){




 $i=0;$a=0;$b=0;$z=0;$y=0;
if(empty($_POST['nom'])){
  
  $erreur1="Erreur: Nom non saisie!"; 
  

  }
else {
  if ( !preg_match ( "#^([A-Z])*([A-Z])$#" ,$_POST['nom']  ) )//^([A-Z])*([A-Z]){20} j'ai pas fais comme ca pour faire un message d'erreur de depassement  
    { $erreur2=" Erreur: veuiller saisir un nom seulement en  majuscule";
    $c1 =  $_POST['nom'] ;
 $cas=1;
} else{ 
    if(strlen($_POST['nom'])>20)
    { $erreur3="Erreur: veuillez  saisir un nom qui  dépasser pas  20 caractères. ";
    $c1 =  $_POST['nom'] ;
     $cas=1;
  }else{
    echo  $_POST['nom'] ;
  
    echo '<br>';
    $i=1;
    $d1 =  $_POST['nom'] ;
    $m1=1;
}}}

if(empty($_POST['prenom'])){
  $erreur14="Erreur: Prenom non saisie!";
  
  
 
}else
{ if ( !preg_match ( "#^([A-Z][a-z]{1,}[\-|\s]?)+$#" ,$_POST['prenom']  ) ) 
{ $erreur19=" Erreur:ne doit pas :
   Contenir des caractères autres que alphabétiques, tiret ou espace.
   Commencer ou se terminer par un tiret ou un espace.
   Contenir des tirets successifs ou des espaces successifs ou un tiret et un espace qui se suivent
  (ou inversement).
   Première lettre des sous-mots en minuscule.
   Contenir des lettres alphabétiques majuscules au milieu des sous mots.
   Contenir moins de deux caractères dans chaque sous-mot.         
  ";
$c11 =  $_POST['prenom'] ;
$cas=1;
}else { 
  echo  $_POST['prenom'] ; 
  
    echo '<br>';
    $d11 =  $_POST['prenom'] ;
    $m11=1;
    $a=1;
}}




if(empty($_POST['dtn'])){
  $erreur4= "Erreur: Date de Naissance non saisie!";
  $cas=1;
  
 
}else
{

  if ( !preg_match ( "'^\d{1,2}/\d{1,2}/\d{4}$'" ,$_POST['dtn']  ) )
  { $erreur5=" Erreur: veuiller saisir une date de naissance d'une forme jj/mm/aaaa";
  $c3=$_POST['dtn'] ;
    
  $cas=1;
   
 
} else{ 
  $la_Date = explode("/", $_POST['dtn'] );
  echo  $_POST['dtn'] ; 
  echo '<br>';
  $d2=$_POST['dtn'];
  $m2=1;
  $b=1;
  
  if(!checkdate($la_Date[1], $la_Date[0], $la_Date[2])){
  $erreur6=" Erreur: date incorrecte";
  $c3=$_POST['dtn'] ;
  $cas=1;
    
   
    
    
  }
              
     }
}


if(empty($_POST['telephone'])){
  $erreur7="Erreur: Telephone non saisie!";
  $cas=1;
  
  
}else
{ if ( preg_match ( "#^[0][0-9]{9,9}$#" , $_POST['telephone'] ) ){
  echo  $_POST['telephone'] ; 
  $d3=$_POST['telephone'] ;
  $m3=1;
    echo '<br>';

    }else{
$erreur8="Erreur: Telephone non valide" ;
$cas=1;

$c4=$_POST['telephone'] ;
echo $c4;
 
    }
}


if( empty($_POST['email'])  ){


  $erreur9=" Erreur: Email non saisie!";
  $cas=1;

 
}else
{   
  if( preg_match("/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/",$_POST['email'])  )
 {  echo  $_POST['email'] ;
 echo '<br>';

  $d4 =$_POST['email'] ;
  $m4=1;
    
}else{
  $erreur10="Erreur: Email non valide";
  $cas=1;

  $c5=$_POST['email'] ;
          
  }  
  
  }



if(empty($_POST['adresse'])){
  $erreur11="Erreur: Adresse non saisie!";
  $cas=1;
  
}else
{
    
    echo  $_POST['adresse'] ;   
    $d5=$_POST['adresse'] ; 
    $m5=1;
    echo '<br>';
  }


if(empty($_POST['genre'])){
  $erreur12="Erreur: Genre non cochée!";
  $cas=1;
  
 
}else
{
  echo  $_POST['genre'] ; 
  $c7=$_POST['genre'] ;  
  echo '<br>';

}

if(empty($_POST['civilite'])){
  $erreur13="  Erreur: Civilite non coch&#233;e!";
  $cas=1;
  
  
}else
{
  echo $_POST['civilite']  ; 
  echo '<br>';
  $y=1;
}

  if(empty( $_POST['langue'])){
echo '  Aucune.  ';
echo '<br>';

} 
else{

 foreach($_POST['langue'] as $cent):  echo "$cent ,"; 
       endforeach; 
       echo".";
echo '<br>';
      
      }

      
    
   
if(empty( $_POST['centre'])){
  echo '  Aucune.  '; 

    $erreur16="Erreur aucun langue selectionner !"; 
  } 
  else{
    
 
  
        
$char=$tableau[0];
for($dd=1;$dd<=count($tableau)-1;$dd++)
{
@$char.=' , '.$tableau[$dd];

}
@$char.=$tableau[$dd+1];
echo $char;


      }
      

     
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';

  
  $h2="";
  if($i==1 and $b==1 and $a==1 and $y==1){
   if(  $_POST['genre']=="Masculin" and $_POST['civilite']=="Célebataire" ){
     $h2="Mr";
     echo '<label style="color:black" > <strong> Bienvenu   jeune homme  '.  $_POST['nom'] .'    
     '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';
   
   }
 if(  $_POST['genre']=="Masculin" and $_POST['civilite']=="Marié" ){
   $h2="Mr";
   echo '<label style="color:black" > <strong> Bienvenu   Monsieur  '.  $_POST['nom'] .'    
   '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';
 
 } 
 
 if( $_POST['genre']=="Feminin"  and $_POST['civilite']=="Marié" ){
     
   $h2="Mme";
       echo '<label style="color:black" > <strong> Bienvenu   Madame '.  $_POST['nom'] .'    
   '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';
 
 }   
 if($_POST['civilite']=="Célebataire" and $_POST['genre']=="Feminin"  ){
   $h2="Melle";
   echo '<label style="color:black" > <strong> Bienvenu   Mademoiselle '.  $_POST['nom'] .'    
   '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';
 }
   
 
 

 }
 
}
?>


 

 



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>tp8</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body style="color: #03224c;">
<?php

?>



    <font size="6" style="text-align: center;"><p style="color: red;"   >
        <strong>information  personnelles</strong></p></font> 
        
           
   
    
    <br>

<table bordercolor="green"  cellpadding="0" cellspacing="0" border="3px" width="800px"  >
  <tr>
    <td> 
      
     <form method="POST" action=" ">
     <table width="100%"  border="0px"  cellspacing="5px" >
     <tr>
  <td align="right" width="40%" height="39px">Temps avant validation de formulaire </td>
  <td width="10%" align="center">:</td>
  <td align="center"><input name="nom1" type="text" value="<?php 
if(!isset($_POST['valider'])){//$pg!=1
  $time1=explode(':',date('H:i:s'));
  $er= $time1[0].':'.$time1[1].':'.$time1[2];
echo $er;}else { echo $_POST['nom1'];}
?>" ></td>
  </tr>
 
       
       
       <tr><td align="right" width="40%" height="39px" > Nom </td>
           <td width="10%" align="center">:</td>
           <td align="center"><input name="nom" type="text" value="<?php if($cas==1 and $m1==1){echo $d1;} else {echo $c1;}?>" >
           <div style="color:red"><?php   echo $erreur1.$erreur2.$erreur3 ?></div> </td>
      </tr>

      <tr><td align="right" width="40%" height="39px" >  Prenom</td>
        <td width="10%" align="center">:</td>
        <td align="center"><input name="prenom" type="text" 
         value="<?php if($cas==1 and $m11==1){echo $d11;} else echo $c2.$c11;?>"> 
        <div style="color:red"><?php echo $erreur14.$erreur19 ?></div></td>
   </tr>

   <tr><td align="right" width="40%" height="39px" > Date de naissance</td>
    <td width="10%" align="center">:</td>
    <td align="center"><input  name="dtn" type="text" value="<?php if($cas==1 and $m2==1){echo $d2;} else echo $c3;?>" ><div style="color:red"><?php echo $erreur4.$erreur5.$erreur6 ?></div></td>
</tr>
<tr><td align="right" width="40%" height="39px">  Wilaya de naissance </td>
  <td width="10%" align="center">:</td>

  <td align="center"><select name="Wilaya"  value= <?php echo $_POST['Wilaya'] ?>>
<?php 
$conn = mysqli_connect("localhost","root","","atelierweb");
$sql= mysqli_query($conn,"SELECT * FROM `Wilaya`");
 
while($donnees=mysqli_fetch_assoc($sql)) {
?>
 
 <option value="<?php echo $donnees ['Nom_Wil'];?>"><?php echo $donnees ['Nom_Wil'];?></option>
 
<?php
}
?>
 
    
    
  
  
</td>
</tr>

<tr><td align="right" width="40%"  height="39px"> N<sup>&#176;</sup> telephone</td>
  <td width="10%" align="center">:</td>
  <td align="center"><input  name="telephone" type="text" value="<?php if($cas==1 and $m3==1){echo $d3;} else echo $c4;?>" > <div style="color:red"><?php echo $erreur7.$erreur8 ?></div></td>
</tr>

<tr><td align="right" width="40%"  height="39px"> Email</td>
  <td width="10%" align="center">:</td>
  <td align="center"><input  name="email" type="text" value="<?php if($cas==1 and $m4==1){echo $d4;} else echo $c5;?>"><div style="color:red"><?php echo $erreur9.$erreur10 ?></div> </td>
</tr>

<tr><td align="right" width="40%" height="39px" >  Adresse  </td>
  <td width="10%" align="center">:</td>
  <td align="center"><textarea name="adresse"  cols="30" rows="5" ><?php if($cas==1 and $m5==1){echo $d5;}  ?></textarea>
  <div style="color:red"><?php  echo $erreur11; ?></div> </td>
</tr>

   
<tr><td align="right" width="40%"  height="39px">   Genre  </td>
  <td width="10%" align="center">:</td>
  <td align="center"> Masculin  <input type="radio" name="genre"  value="Masculin" checked> 
   Feminin<input type="radio" name="genre" value="Feminin"
    <?php if (isset($_POST['genre']) and $cas==1) { if ($_POST['genre'] == "Feminin") { echo "checked"; } } ?>    >
  <div style="color:red"><?php echo $erreur12 ?></div></td>
</tr>

<tr><td align="right" width="40%" height="39px">   Civilit&#233;    </td>
  <td width="10%" align="center">:</td>
  <td align="center"> Mari&#233;  <input type="radio" name="civilite" 
   <?php if (isset($_POST['civilite']) and $cas==1) { if ($_POST['civilite'] == "Marié") { echo "checked"; } } ?>
   value="Marié"> 
  C&#233;lebataire<input type="radio" name="civilite" 
  <?php if (isset($_POST['civilite']) and $cas==1) { if ($_POST['civilite'] == "Célebataire") { echo "checked"; } } ?> 
  value="Célebataire"> 
  <div style="color:red"><?php echo $erreur13 ?></div>  </td> 
</tr>



<tr><td align="right" width="40%" height="39px">  Langue </td>
  <td width="10%" align="center">:</td>
  <td align="center"><select name="langue[]" multiple >
  <?php 
$conn = mysqli_connect("localhost","root","","atelierweb");
$sql= mysqli_query($conn,"SELECT Nom_langue FROM `langues`");
 
while($donnees=mysqli_fetch_assoc($sql)) {
?>
 
 <option value="<?php echo $donnees ['Nom_langue'];?>"
 <?php if ( $cas==1 && isset($langue) && in_array($donnees ['Nom_langue'], $langue)) echo "selected";?> 
 >
 <?php echo $donnees ['Nom_langue'];?></option>
 
<?php
}
?>
  
  
  </select>  
  
  <div style="color:red"> <?php echo $erreur16 
?></div></td>
</tr>


<tr><td align="right" width="40%"  height="39px" >  Centre d'int&#233;r&#234;ts </td>
  <td width="10%" align="center">:</td>
  <td align="center">Lecteur <input type="checkbox" name="centre[]" value="Lecteur" checked>
    Dessin<input type="checkbox" name="centre[]" value="Dessin" 
    <?php if($cas==1){foreach($_POST['centre'] as $centre){if($centre=="Dessin"){echo "checked";}
        }} ?>>
     Sport <input type="checkbox" name="centre[]" value="Sport" 
    <?php if($cas==1){foreach($_POST['centre'] as $centre){if($centre=="Sport"){echo "checked";}
        }} ?>>
      Musique<input type="checkbox" name="centre[]" value="Musique"
      <?php if($cas==1){foreach($_POST['centre'] as $centre){if($centre=="Musique"){echo "checked";}
        }} ?>>
     Jeux <input type="checkbox" name="centre[]" value="Jeux"
     <?php if($cas==1){foreach($_POST['centre'] as $centre){if($centre=="Jeux"){echo "checked";}
        }} ?>>
    
  </td>
</tr>
<tr>
  <td  width="40%" align="center" colspan="3" height="39px"><input type="submit" name="valider" value="Valider">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    <input type="reset" value="Réinitialiser"   ></td>
  
  
    <td  width="10%" >   </td>
  
  
   <td  ></td>

  

</tr>
 






 </table>




        
     </form>




    </td>
  </tr>
</table>
<br>
<br>
 <?php
 function question8($nn,$pp){
  $conn = mysqli_connect("localhost","root","","atelierweb");
  $sql1= mysqli_query($conn,"SELECT * FROM `person` where Nom='$nn'and Prenom='$pp'"  );
  $sql2= mysqli_query($conn,"SELECT * FROM `person` 
                             where Statut='Mr' 
                             or Statut='Melle'
                             order by Statut ASC,date_nais  ASC"  );
  
  echo'</br></br></br>Question 8:</br>';
  
  
  
  $compteur1=0;
  while($donnees1=mysqli_fetch_assoc($sql1) ) {$compteur1=$compteur1+1;}
  if($compteur1==1){echo 'Aucun Personne a un nom '.$nn.' et un prénom '.$pp;
    echo '</br>';
    echo '<a href="../tp8/index.php">Retour vers le formulaire</a>';
    echo '</br>';
  }else
  {  
     while($donnees1=mysqli_fetch_assoc($sql1) ) {
        
     echo 'Personne avec Id->'.$donnees1 ['Id'].','.'   Nom->'.$donnees1 ['Nom'].','.'  prénom->'
     .$donnees1 ['Prenom'].','.'  Date de Naissance->'.
     $donnees1 ['date_nais'].','.'   Statut->'.$donnees1 ['Statut'];
     echo '</br>';
         }
         echo '</br>';
         echo '<a href="../tp8/index.php">Retour vers le formulaire</a>';
         echo '</br>';
       
        
        }
         if($compteur1==1){
          echo '</br></br></br></br>Question 9</br>';
                    $flp=1;
          while($donnees2=mysqli_fetch_assoc($sql2)  ) {
            
            if($flp<=10){
          echo 'Personne avec Id->'.$donnees2 ['Id'].','.'   Nom->'.$donnees2 ['Nom'].
          ','. '  prenom->'
          .$donnees2 ['Prenom'].','.'  Date de Naissance->'.
          $donnees2 ['date_nais'].','.'   Statut->'.$donnees2 ['Statut'];
          echo '</br>';
          $flp+=1;}else{break;}
          }
          echo '</br>';
          echo '<a href="../tp8/index.php">Retour vers le formulaire</a>';
          echo '</br>';
         }
       
 }
 function recherche($no){
  $conn = mysqli_connect("localhost","root","","atelierweb");
  $sql= mysqli_query($conn,"SELECT Cod_Wil FROM `Wilaya` where Nom_Wil='$no'" );
   
  $dond=mysqli_fetch_assoc($sql);
  $fg=$dond['Cod_Wil'];
  return $fg;
}



//$time2=explode(':',date('H:i:s'));

//$t= comparetime($time1,$time2);
//echo '</br>'.$t;

//while( comparetime($time1,$time2)==1 ||  comparetime($time1,$time2)==0 ){
 $p1=0;
$p2=0;
//$time1=explode(':',date('H:i:s'));
   
  if(isset($_POST['valider']) && $cas!=1)
 {   $time2=explode(':',date('H:i:s'));
  $pg=1;
  echo '<label style="color:red" >'.'</br>'.'temps aprés validation de formulaire --->'.date('H:i:s')
  .'</label>';
  if(comparetime($_POST['nom1'],$time2)<15){
   $conn = mysqli_connect("localhost","root","","atelierweb");
   //$sql= mysqli_query($conn,"SELECT Nom_langue FROM `langues`");
   if($conn == false){
    die('</br>'."ERROR: impossible de se connecter. " . mysqli_connect_error());
                   }
     $p1= count($_POST['langue']);
     $p2=recherche($_POST['Wilaya']);
     
     $p3=changeformedate($d2);            
   $sql = "INSERT INTO person ( Nom, Prenom,date_nais,CodWil_nais,Email,Statut,Nbr_Langues,Interets)
   VALUES ('$d1', '$d11','$p3','$p2','$d4','$h2',$p1,'$char' )";
   //'$d1', '$d11','$d2','$_POST['Wilaya']','$d4','d',count($_POST['langue']),'d'
   if(mysqli_query($conn, $sql)){
       echo '<label style="color:red" >'.'</br>'."insertion valider".'</label>';
       $resultatinsertion=1;
       
       echo '</br>';
       echo '<a href="../tp8/index.php">Retour vers le formulaire</a>';
       echo '</br>';
   } else{
       echo '</br>'."ERROR: impossible $sql. " . mysqli_error($conn);
   }  mysqli_close($conn);
   echo '</br>';
  question8($_POST['nom'],$_POST['prenom']);
  
  }else  
  echo '<label style="color:red" >'.'</br>'."ERROR: vous avez dépasser 15 minute pour inscrire  
  ".'</label>';
  echo '</br>';
  echo '<a href="../tp8/index.php">Retour vers le formulaire</a>';
  echo '</br>';
  }
  		
  
      
  
    


  ?>    
</body>
</html>