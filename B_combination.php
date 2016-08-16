<?php
for($one=1;$one<5;$one++) 
 { 
    for($two=1;$two<5;$two++) 
        { 
        for($three=1;$three<4;$three++) 
            { 
            for($four=1;$four<4;$four++) 
                { 
                if($one!=$two&&$one!=$three&&$two!=$three&&$two!=$four&&$one!=$four&&$three!=$four) 
                    { 
                     echo($one." ".$two." ".$three." ".$four." "."<br>"); 
                    } 
                } 
            } 
        }
 }
?>