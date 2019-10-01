<?php 
    $dbhost = 'localhost';
    $dbuser = 'easymjyz_jatin';
    //$dbpass = '*8(9reportbizz007';
    //$conn = mysql_connect($dbhost, $dbuser, $dbpass);
    //    if(! $conn )
      //  {
    //      die('Could not connect: ' . mysql_error());
  //      }
//?>



<html>
    <body>
        <form action="form_submit.php" method="post">
              Content of news:
            <textarea  type="text" name="news_title"></textarea>
              <br><br>
            
              EFFECTS OF COMPANIES <br> (Fill all the columns, if a stock is not affected enter 0)<br><br>
            (Enter the percent change in stock either positive or negative<br><br> (EXAMPLE: Reliance Industrials: 23 // Reliance Petroleum: -15))<br><br>
                Reliance Industrials:
              <input required type="text" name="company1"><br>
            Reliance Petroleum:
              <input required type="text" name="company2"><br>
            Tata Consultancy Services:
              <input required type="text" name="company3"><br>
            HDFC Bank:
              <input required type="text" name="company4"><br>
            Maruti Suzuki India:
              <input required type="text" name="company5"><br>
            Infosys:
              <input required type="text" name="company6"><br>
            Google:
              <input required type="text" name="company7"><br>
            Nestle India:
              <input required type="text" name="company8"><br>
            Ambuja Cement LTD:
              <input required type="text" name="company9"><br>
            Kingfisher:
              <input required type="text" name="company10"><br>
            Air India:
              <input required type="text" name="company11"><br>
            Samsung:
              <input required type="text" name="company12"><br>
              <br><br>
              <input required type="submit" value="Submit">
        </form> 
    
    </body>



</html>