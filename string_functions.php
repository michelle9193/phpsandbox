<?php
    # substr() - returns a portion of a string

    //$output = substr('Hello', 1, 3);
    //$output = substr('Hello', -2);
    //echo $output;

    # strlen() - returns the length of a string

    //$output = strlen('Hello World');
    //echo $output;

    # strpos() - finds the position of the first occurence of a sub string

    //$output = strpos('Hello World', 'o');
    //echo $output;

    # strrpos() - finds the position of the last occurence of a sub string

    // $output = strrpos('Hello World', 'o');
    // echo $output;

    #trim() - trims white space

    /*
    $text = 'Hello World                    ';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);
    */

    #strtoupper() - makes everything uppercase

    //$output = strtoupper('Hello World');
    //echo $output;

    #strtolower() - makes everything uppercase

    //$output = strtolower('Hello World');
    //echo $output;

    # ucwords - capitalize every word

    //$output = ucwords('hello world');
    //echo $output;

    #str_replace() - replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    // $output = str_replace('World', 'Everyone', $text);
    // echo $output;

    #is_string() - check if string

    // $val = 'Hello';
    // $output = is_string($val);

    // echo $output;

    /*
    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    
    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }
    */

    #gzcompress() - compress a string

    $string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero adipisci aperiam doloremque eaque iure temporibus, reprehenderit ad error unde minus exercitationem, similique corrupti nam dolores et totam. Ex, doloremque consequatur?
    Ad neque quaerat facilis, repudiandae dicta voluptates. Facilis ex dolore possimus ipsum alias neque, velit ipsa fuga porro odio recusandae nobis iusto in vitae deleniti perspiciatis animi expedita labore tempora!
    Itaque totam odit soluta at eaque ad nulla, nisi asperiores, labore molestiae quos. Dignissimos non ex consequatur laudantium veritatis id, hic inventore autem iure dicta impedit modi quod voluptate sint.
    Nesciunt repudiandae, nihil illo explicabo eius adipisci possimus optio laborum deserunt reiciendis illum quos accusamus voluptatum reprehenderit. Tempora harum temporibus consequatur. Minima, pariatur. Pariatur, est quia. Quo voluptates animi nulla.";

    $compressed = gzcompress($string);
    //echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
?>