<?php

function initiateAPI()
{
    $date = date('Y-m-d');
    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=maherbenrhoumaaa&token=2f4016260eda993bd402e7bd07a0f60f&t=schedule&d=".$date."&league_id=1609";

    //init call
    $curl = curl_init();

    //options GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    // to return the response as a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //send request
    $result = curl_exec($curl);

    //close connexion
    curl_close($curl);

    return $result;
}

function convertIntoArray()
{
    $result = initiateAPI();
    // true here is to return an associative array
    $responseArray = json_decode($result, true);
    return $responseArray;
}

function yesterdayMatchs()
{
    $yesterday = date('Y-m-d', strtotime('yesterday'));
    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=maherbenrhoumaaa&token=2f4016260eda993bd402e7bd07a0f60f&t=schedule&d=".$yesterday."&league_id=1609";

    //init call
    $curl = curl_init();

    //options GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    // to return the response as a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //send request
    $result = curl_exec($curl);

    //close connexion
    curl_close($curl);

    return  json_decode($result, true);
}

function tomorrowMatchs()
{
    $tomorrow = date('Y-m-d', strtotime('tomorrow'));
    $url = "https://api.soccersapi.com/v2.2/fixtures/?user=maherbenrhoumaaa&token=2f4016260eda993bd402e7bd07a0f60f&t=schedule&d=".$tomorrow."&league_id=1609";

    //init call
    $curl = curl_init();

    //options GET request
    curl_setopt($curl, CURLOPT_URL, $url);
    // to return the response as a string
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //send request
    $result = curl_exec($curl);

    //close connexion
    curl_close($curl);

    return  json_decode($result, true);
}