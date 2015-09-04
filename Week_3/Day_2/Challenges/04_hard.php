<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Find the valid hashtags in this string

             Create a function that will find the 
                - Hashtags are alphanumeric strings ([a-zA-Z0-9]) prefixed with the hash symbol "#" 
                - (e.g. "#keyword" is a valid hashtag and #2Words!? counts as "2Words" only)
                - Hashtags cannot be in the middle of a words or characters (e.g. "some#word" and ".?!#word" are invalid)
                - Hash symbols ("#") alone are not valid
                - If a word is preceded by more than one hash symbol, only one hashtag counts (e.g. "###keyword" counts only as "keyword")
                - Since hashtags are only alphanumeric [a-zA-Z0-9] in case (e.g. "###keyword" counts only as "keyword")
             *
             */
      
                $badHashtags = array();
                $goodHashtags = array();
             $sentence = 'this #free is ##wild , .?!#word #can #young some#word ###keyword';

             $words = explode(' ', $sentence);
             $newWords = explode(' ', $sentence);
             // now that you have words, loop around them to find the valid hashtags
           // var_dump($words);
            function hashtagFilter(&$word){
                if(strpos($word, '#') !== 0){
                    return false;
                }
                $characters = array();
                 for($i = 1; $i < strlen($word); $i++){
                     if($word[$i] != '#'){
                         array_push($characters, $word[$i]);
                     }
                 }
                $word = "#".implode('', $characters);
                return $word;
            }
            function bad_hashtag_filter(&$word1){
                if(strpos($word1, '#') !== 0){
                    return false;
                }
                if($word1[1] !== '#'){
                    return false;
                }
                return $word1;
            
            }
            $goodFilteredArray = array_filter($words, 'hashtagFilter');
            var_dump($goodFilteredArray);
            $badHashtags = array_filter($newWords, 'bad_hashtag_filter');
            var_dump($badHashtags);
             // store the bad and good hashtags in their appropriate locations
             $hashtags = array('bad_hashtags' => array(), 'good_hashtags' => array());
        
        ?>

    </p>

    </body>
</html>
