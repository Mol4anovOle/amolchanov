
    <?php

     if( isset( $_POST['submit'] ) )
    {
      
      
      function generateArticle(){
           $yourkey=ad16498050c5869e622b97b20de41948;
    $valueforvar1=htmlspecialchars($_POST['your-title']);
        $valueforvar2=htmlspecialchars($_POST['your-keywords']);
        $lenght=htmlspecialchars($_POST['lengt']);
    $ch = curl_init('https://af.articleforge.com/api/initiate_article');
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt ($ch, CURLOPT_POSTFIELDS,
 "key=$yourkey&keyword=$valueforvar1&sub_keywords=$valueforvar2&length=$lenght");
 $result_art = curl_exec($ch);
curl_close ($ch);
echo $result_art;
      }
      wp_die();



     

    }
    ?>