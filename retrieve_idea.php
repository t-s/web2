<?php



  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');

  $retrieve_id = $_POST['idea_identifier'];

//  $result = r\db("web")->table('ideas')->run($conn);



$result = r\db("web")->table('ideas')->getAll($retrieve_id, array("index" => "id"))->run($conn);


//$result = r\db("web")->table('ideas')->count()->run($conn);
//    echo "Count: $result\n";



    //$result = r\db("web")->table('ideas')->map(function($x) {
    //        return $x('id');
    //    })->run($conn);

//    foreach ($result as $doc) {
//        print_r($doc);
//    }


//echo '$doc.[id]'.$doc.['id'];




//echo "Retrieving information...".$retrieve_id;
//echo "you submitted stuff.";

//    echo "$result\n";
//echo $doc.[id];
                                
    //print_r($doc[$retrieve_id]);

//    foreach ($result as $doc) {
//        if ($retrieve_id == $doc.[id]) {
//	    echo "this test worked :D  ".'$retrieve_id: '.$retrieve_id.'$doc.[id]: '.$doc.[id];



//};
//    } else {echo "this test failed: ".$retrieve_id." | ".$doc.[id];};

//}

//echo "<h4>Factors that affect the problem: </h4>".$doc['IdeaDescription'];
  
// $document = Array('IdeaDescription' => $idea_desc,
//                    'MoreDescription' => $idea_more,
//                    'Perspective' => $perspective,
//                    'Tags' => $tags,
//		    'IdeaCategory' => $idea_cat,
//		    'URL' => $url);  


//$document = Array ('id' => $retrieve_id);

    //$arr_values = array_values($result[0]);
    //$arr_keys = array_keys($result[0]);

    //echo count($result);
    //echo count($result[0]);

    //for ($i=1; $i < count($result[0]); $i++) {

    //  echo $arr_keys[$i].": ".$arr_values[$i];

    //}

//    foreach ($result as $doc) {
    //   echo $arr_keys[
    //   echo $doc[''];
    //   echo $doc[''];
    //   echo $doc[''];
//if ($retrieve_id == $doc['id']){ // forgot single quote 11:42 BL 
      //print_r($doc);
    }
  //   print_r($result[0]);


    

    foreach ($result[0] as $key => $value) {
        echo "$key: $value<br>";
    }




?>
