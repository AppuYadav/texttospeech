<?php

/**
* PHP_Text2Speech Class example
*/
require 'config/db.php';
include 'PHP_Text2Speech.class.php';

$t2s = new PHP_Text2Speech;

 $sql = "SELECT Name FROM user_master_activate where id='307'";
 try{
     // Get DB Object
     	$db = new db();
        // Connect
        $db = $db->connect();
        $stmt = $db->query($sql);
        $customers = $stmt->fetch();
        $customers = $customers['Name'];
        // $db = null;
        echo $customers;
        // echo json_encode($customers);
    } catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }

?>
<!-- <audio controls="controls" autoplay="autoplay">
  <source src="<?php //echo $t2s->speak('StepBlogging Google TTS'); ?>" type="audio/mp3" />
</audio>
 -->
// Example use of other language
<audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $t2s->speak('shreem sanjeevani energy sound,  shreem sanjeevani energy sound,  shreem sanjeevani energy sound,  maine aaram se let kar $customers', 'de'); ?>" type="audio/mp3" />
</audio>