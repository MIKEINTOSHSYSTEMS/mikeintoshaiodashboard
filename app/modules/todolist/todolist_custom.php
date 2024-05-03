<?php
function prepareCard($data) {
// this function is executed when we prepare text to  be shown on the card
// $data - an array with card values from tocards table
// return value: text to show on the card


    $value=$data["cardname"];
    return $value;
}

function afterMoveCard($cardid){
// executed after card is moved from one list to another
// $cardid - id of the card moved (from todocards table)


}

function afterCardUpdated($cardid){
// executed after card is updated
// $cardid - id of the card (from todocards table)


}

function afterCardCreated($cardid){
// executed after card is created
// $cardid - id of the card (from todocards table)



}
?>