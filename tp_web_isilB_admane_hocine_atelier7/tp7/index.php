<?php

function Age($date_naissance)
{
    $arr1 = explode('/', $date_naissance);
    $arr2 = explode('/', date('d/m/Y'));
		
    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
    return $arr2[2] - $arr1[2];

    return $arr2[2] - $arr1[2] - 1;
}
//if (isset($_POST['champListe'])){echo $_POST['champListe'];}
//$ma_date_de_naissance = '26/05/1987';
//$mon_age = Age($_POST['dtn'] );

//echo $mon_age;


 // printf('%d/%d/%d', $la_Date[0], $la_Date[1], $la_Date[2]);

 /**
  * $la_Date[2] --> Année
*$la_Date[1] --> Mois
*$la_Date[0] --> Jour
  */

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
    
  foreach($_POST['centre'] as $centre):echo "$centre , ";
        endforeach; echo ".";
 
     }
      

     
 echo '<br>';
 echo '<br>';
 echo '<br>';
 echo '<br>';


  


 if($i==1 and $b==1 and $a==1 and $y==1){
  if(  $_POST['genre']=="Masculin" and $_POST['civilite']=="Célebataire" ){
    echo '<label style="color:black" > <strong> Bienvenu   jeune homme  '.  $_POST['nom'] .'    
    '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';
  
  }
if(  $_POST['genre']=="Masculin" and $_POST['civilite']=="Marié" ){
  echo '<label style="color:black" > <strong> Bienvenu   Monsieur  '.  $_POST['nom'] .'    
  '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';

} 

if( $_POST['genre']=="Feminin"  and $_POST['civilite']=="Marié" ){
    
    
      echo '<label style="color:black" > <strong> Bienvenu   Madame '.  $_POST['nom'] .'    
  '. $_POST['prenom'] .'    '.' ( ' .Age($_POST['dtn']) . '  ans )'.'</strong></label>';

}   
if($_POST['civilite']=="Célebataire" and $_POST['genre']=="Feminin"  ){

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
    <title>tp7</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body style="color: #03224c;">
    <font size="6" style="text-align: center;"><p style="color: red;"   >
        <strong>information  personnelles</strong></p></font> 

    <br>
    

<table bordercolor="green"  cellpadding="0" cellspacing="0" border="3px" width="800px"  >
  <tr>
    <td> 
      
     <form method="POST" action=" ">
     <table width="100%"  border="0px"  cellspacing="5px" >
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

    <option  value="Arabe" 
    <?php if ( $cas==1 && isset($langue) && in_array('Arabe', $langue)) echo "selected";?>
   
    >  Arabe</option>
    <option  value="Francais"
   <?php if ($cas==1 &&  isset($langue) && in_array('Francais', $langue)) echo "selected"; ?> 
      >Fran&#231;ais</option>
  <option  value="Anglais" 

 <?php if ($cas==1 &&  isset($langue) && in_array('Anglais', $langue)) echo "selected"; ?> 

      >Anglais</option>
    
    <option  value="Espagnol"
    <?php if ($cas==1 &&  isset($langue) && in_array('Espagnol', $langue)) echo "selected";?>
    >
    Espagnol</option>
    <option  value="Chinois"
    <?php if ($cas==1 &&  isset($langue) && in_array('Chinois', $langue)) echo "selected";?>
    
      >Chinois</option>
    
    
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
 <?php  ?>
</body>
</html>