<?php 
  $Grade_Centeno = 90.2; 
  $LetterGrade_Centeno = ""; 
  $Remarks_Centeno = ""; 


  if ($Grade_Centeno >= 74.5) { 
     $Remarks_Centeno = "Passed"; 
  } else { 
    $Remarks_Centeno = "Failed"; 
  } 


  if ($Grade_Centeno >= 90) { 
      $LetterGrade_Centeno = "A"; 
  } elseif ($Grade_Centeno >= 80) { 
      $LetterGrade_Centeno = "B"; 
  } elseif ($Grade_Centeno >= 70) { 
      $LetterGrade_Centeno = "C"; 
  } elseif ($Grade_Centeno >= 60) { 
      $LetterGrade_Centeno = "D"; 
  } else { 
      $LetterGrade_Centeno = "F"; 
  } 

  echo "Grade: " . $Grade_Centeno . "<br>";
  echo "Remarks: " . $Remarks_Centeno . "<br>"; 
  echo "Letter Grade: " . $LetterGrade_Centeno; 
?>
