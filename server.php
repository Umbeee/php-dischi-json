<?php

    $string = file_get_contents( "discList.json" );

    $listDisc = json_decode( $string, true );

    $results = [];


    $results = $listDisc;


     if( isset( $_POST['discIndex'] ) ){
        $disc_index = $_POST['discIndex'];

        $singoloDisco = $listDisc[$disc_index];

        $results = $singoloDisco;
     }else{
        $results = $listDisc;
     }

    header( 'Content-type: application/json' );
    echo json_encode( $results);

?>

