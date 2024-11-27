<?php

function getPrimeNumber(int $maxTry):array{
  $primeNumberArray = [];

  for( $i=2; $i < $maxTry+1; $i++){
    $isPrime=true;
    for( $j=$i-1; $j > 1; $j--){
      if( $i%$j==0){
        $isPrime = false;
      }
    }
    if( $isPrime ){
      $primeNumberArray[] = $i;
    }
  }
  return $primeNumberArray;

}


$primeNumberArray = getPrimeNumber(getenv("MAX_TRY")?getenv("MAX_TRY"):100);
print("Les ".count($primeNumberArray)." nombres premiers sont : ".json_encode($primeNumberArray)."\n" );
