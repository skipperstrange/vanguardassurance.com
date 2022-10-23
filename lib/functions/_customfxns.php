<?php

//Function that generates navigation layout
function generateNavigation($navArray){
    $navLinks = '';
    $activeClass = '';
    $dropdown = 'dropdown';
    $mega_content = '';
   
    if(activeUrl() == activeUri()){
        $activeClass = 'active';
    }
    foreach($navArray as $label => $link){

        if(isset($link['target'])){
            $targetOption = " target='$link[target]'";
        }

        if(isset($navArray[$label]['children'])){
            if($navArray[$label]['mega'] == true){
                $dropdown = "dropdown-mega";
                $mega_content = "dropdown-mega";
            }
            if(isset($link['target'])){
                $childTargetOption = " target='$link[target]'";
            }

           $navLinks .= "<li class='dropdown $dropdown'>"; //dropdown-mega
           $navLinks .= "<a "; 
           if($navArray[$label]['internal_link'] == true){
            
            $navLinks .= "href='#' $childTargetOption ";
           }else{
                if(trim($link['href']) != ''){
                    $navLinks .= "href='$link[href]' $targetOption";
                }
                else{
                    $navLinks .= "href='#' ";
                    }
            }
            if(isset($navArray[$label]['label'])){
                $linkLabel = $navArray[$label]['label'];
            }
            else{
                $linkLabel = $label;
            }
           $navLinks.= "class='dropdown-item dropdown-toggle'>". format_string($linkLabel) ."</a>";
           $navLinks .= "<ul class='dropdown-menu'>";

           foreach($navArray[$label]['children'] as $label => $link){
            $navLinks .= ' <li>
            <a href="'.$link['href'].'" class="dropdown-item head-menu-item"  target='.$link['target'].'>'. format_string($label) .'</a>
            </li>
            ';
            }
            
           $navLinks .= "
           </ul>";
        
        
        }else{
            $navLinks .= "<li class='dropdown '>";
            if(isset($link['target'])){
                $navLinks .= " <a class='dropdown-item' href='$link[href]' target='$link[target]'>";
            }else{
                $navLinks .= " <a class='dropdown-item  head-menu-item' href='$link[href]' target='$link[target]'>";
            }
            $navLinks .= format_string($label) ."
            </a>
        </li>";
           }
    }
    return $navLinks;
} 

function generateButtonsNavigation($buttonLinksArray){
    $buttonClass = '';
    $buttonLinkString = '';
    foreach($buttonLinksArray as $label => $link){
        if($buttonLinksArray[$label]['button'] == true){
            $buttonClass = 'btn btn-primary';
        }elseif($buttonLinksArray[$label]['button'] == false){
            $buttonClass = '';
        }

        if(isset($link['target'])){
            $targetOption = " target='$link[target]'";
        }


        if(isset($link['label']) && trim($link['label']) != ''){
            $linkLabel = $link['label'];
        }else{
            $linkLabel = $label;
        }

        $buttonLinks .= "
        <a href=\"$link[href]\" class=\"$buttonClass mx-1\" $targetOption>
        " .format_string($linkLabel) ."
        </a>
        ";
    }
    return $buttonLinks;
} 
    
/*******************************************************************************************88
*Function that comverts strings t to acsii.
* http://cubiq.org/the-perfect-php-clean-url-generator
* @author
* @param string $str - string to be worked on
* @param array $replace - array of characters to be stripped out
* @param delimiter - what the characters should be replaced with
********************************************************************************************99*/

//Original
function toAscii($str, $replace = array(), $delimiter = null)
{
    if (!empty($replace)) {
        $str = str_replace((array )$replace, ' ', $str);
    }

    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = trim($clean, '-');
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}

//lesser options
//toAsciiMed("i'll be back") or toAsciiMed("i'll be-- --back") to "i-ll-be-back"
function toAsciiMed($str, $delimiter = null)
{
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", $delimiter, $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}


function toAsciiMin($str)
{
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_| -]+/", '-', $clean);

    return $clean;
}

/********************************************************************************
********************************************************************************/

function format_string($str, $mode = 1){
    $str = toAscii($str, ['_'], ' ');
    $str = ucfirst(strtolower($str));

    if($mode == 2){
        $str = ucwords(strtolower($str));
    }

    return $str;
}


//Handles only Font Awesome Icons
function generateIcons($icons, $attributes = [], $fab =true){
    $attributesFormated = '';
    $fa = 'fab';

    if($fab == false){
        $fa = 'fa';
    }
    if(count($attributes) > 0){
        foreach($attributes as $property => $value){
            if(is_int($property) || $property == 0){
                $attributesFormated .= $value.' ';
            }else{
                $attributesFormated .= " $property=\"$value\" ";
            }
        }
    }
    $iconString = '';
    if(is_array($icons)){
        foreach($icons as $icon){
            $iconString .= "<i class=\"$fa $icon\" ".generate_attributes($attributes)."> </i>
";
        }
    }else{
        $iconString .= "<i class=\"$fa $icons\" ".generate_attributes($attributes)."> </i>
";
    }

    return $iconString;
}

function whatsappUrl($contact){
    return 'https://wa.me/'.$contact;
}

function limit_to_numwords($string, $numwords)
{
    $excerpt = explode(' ', $string, $numwords + 1);
    if (count($excerpt) >= $numwords) {
        array_pop($excerpt);
    }
    $excerpt = implode(' ', $excerpt);
    return $excerpt;
}