<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="js/jquery.js" language="javascript"></script>
        <script>
         $(function(){
                var clickingRow = 0;
                var clickingCol = 0;
                $(".stick").click(function(e){
                    clickingRow = $(this).parent().attr("order");
                    
                    clickingCol = $(this).index();
                    
                    //alert("Col: "+clickingCol)
                    
                    $(".stick").css('background-color','#AAA');
                    $(this).parent().find('.stick').each(function(){
                      $(this).css("background-color","#333");  
                      $(this).click(function(){
                          var currentRow = $(this).parent().attr('order');
                          var currentCol = $(this).index();
                          
                          if(currentRow == clickingRow){
                              
                              clickingCol //3
                              currentCol //4 //1
                              if(clickingCol > currentCol){
                                  
                                  var min = currentCol-2;
                                  var max = clickingCol+1;
                              }else{
                                  var min = clickingCol-2;
                                  var max = currentCol+1;
                              }
                              alert("MIN: " +min + "MAX:" +max);
                              for(i = min; i<max; i++){
                                  $(".row[order="+currentRow+"]").find(':eq('+i+')').css('background-color',"blue");
                              }
                              $(".row[order="+currentRow+"]").find(".stick:gr("+min+"):lt("+max+")").each(function(){
                                    $(this).css("background-color","blue");
                                
                              });
                              
                          };
                          
                          
                      }) 
                    });
                    
                    $(this).css('background-color','red');

                    clicking = "yes";
                    //alert("x: " + e.pageX)
                
                });
            
        });
    </script>
       <style>
           #container { position: absolute; left: 50%; top: 50%; margin-left: -400px; width: 800px; height: 400px; }
           .stick { width: 20px; height: 20px; background-color: #AAA; float:left; margin: 20px; border-radius:10px;  }
           .row { clear:both; }
           #row_1 { margin-left: 240px;}
           #row_2 { margin-left: 180px;}
           #row_3 { margin-left: 120px;}
           #row_4 { margin-left: 60px;}
       </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div id="container">
            <div class="row" id="row_1" order="1">
            <div class="stick"></div>
            </div>
            <div class="row" id="row_2" order="2">
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            </div>
            <div class="row" id="row_3" order="3">
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            </div>
            <div class="row" id="row_4" order="4">
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            </div>
            <div class="row" id="row_5" order="5">
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            <div class="stick"></div>
            </div>
        </div>
    </body>
</html>
