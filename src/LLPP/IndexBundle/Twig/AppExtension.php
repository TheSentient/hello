<?php

// src/AppBundle/Twig/AppExtension.php
namespace LLPP\IndexBundle\Twig;


class AppExtension extends \Twig_Extension
{
    public function getFunctions()
    {
    	//die("file non incluso");


        return array(
              'taglia_testo' => new \Twig_Function_Method($this, 'leggiAncora'),
        );
    }

    public function getName(){
 		 return 'llpp_twigextensionbundle_extension';
     }

/*

$a = testo

$b = lunghezza

$c = id

$d = testo della chiusura

*/
    public function leggiAncora($a,$b, $c,$d) {

	$TextArray = explode(' ', $a);
	$result = "";
 
		foreach($TextArray as $word)
		{
			if(strlen($result . $word . ' ') < $b)
			{
				$result .= $word . ' ';
			}
			else
			{
				break;
			}
		}
 
	$result .= '<a href="' . $c . '">' . $d . '</a>';
 
	return $result;


    }

}


?>