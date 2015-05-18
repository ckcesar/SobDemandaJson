<html>
  <head>
    <title>Sob Demanda</title>
    <script src="jquery.min.js" type="text/javascript"></script>  
    <script>
        var pagina = 0;
        function carrega(){
          $.getJSON('load.php',{page:pagina}, function(x){
               $.each(x,function(){
                   $('ol#lista').append('<li style="margin: 20px 0" >'+this['titulo_foto']+', '+this['data_cadastro']+'</li>');
                });
          });
        };

        $(document).ready(function(){
          carrega();
        });      

        $(window).scroll(function(){
           if($(window).scrollTop() + $(window).height() >= $(document).height()){
             pagina += 1;
             carrega(); 
           }
        });
    </script>
  </head>
  <body>
    
      <ol  id="lista" style="width: 300px;">

      </ol>
      
  </body>
</html>