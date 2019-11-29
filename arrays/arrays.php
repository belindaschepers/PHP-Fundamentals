
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Arrays</title>
</head>
<body>
    <?php

    $me = array(
        'firstname'	=> 'Belinda' , 
        'age' 		=> 30 ,
        'hobbies' 	=> array('playing video games' , 'listen to music' , 'go to metal concerts')
    );

    $mother = array (
        'firstname' => 'Claudine',
        'hobbies'   => array ('watching tv' , 'take care for her animals' , 'plant flowers')

    );

    
    echo '<pre>';
    print_r($me);
    print_r($mother);
    echo '</pre>';

    echo count($mother['hobbies']);
    echo count($me['hobbies']);

    $me['hobbies'][] = 'taxidermy';

    ?>

    <?php
    $me = array(
        'eyes_color' => 'brown',
        'hair_color' => 'brown',
        'hobbies'    => array ('playing video games' , 'go to concerts' , 'listen to music')
    );
    $soulmate = array(
        'eyes_color' => 'blue',
        'hair_color' => 'black',
        'hobbies'    => array ('playing guitar' , 'go to concerts' , 'listen to music')
    );
    
    // perform array operation
    $possible_hobbies_via_intersection = array_intersect_assoc($me['hobbies'] , $soulmate['hobbies']);
    $possible_hobbies_via_merge = array_merge_recursive($me['hobbies'] , $soulmate['hobbies']);
    
    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
    ?>

</body>
</html>

