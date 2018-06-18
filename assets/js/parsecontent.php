<script>
 $("#haut-parleur").mouseover(function(){
              $("#haut-parleur").css('cursor','pointer');
              var valeur=$(this).attr("valeur");
              responsiveVoice.speak(valeur,"French Female");
                  //console.log(valeur); 
    });
  $("#image").mouseover(function(){
              $("#image").css('cursor','pointer');
              var valeur=$(this).attr("valeur");
              responsiveVoice.speak(valeur,"French Female");
                  //console.log(valeur); 
    }); 

$(document).ready(function()
{

     function image(){
        return  $("#image").addClass('reponseText');
     }
        
      $(document).on('click','.adbtn',function()
      { 
         var valeur=$(this).text();
             var choosen = false ;
                if(choosen) return ;
               showMakeAndHold(valeur); 
              //  $(this).attr("disabled", true);
                 $(this).addClass('hide');
                choosen = true ;   
      });/*End fonction*/

        function showMakeAndHold(valeur) 
        {
          //alert("I am "+valeur.trim());
          $("#reponseText").val($("#reponseText").val()+" "+valeur);
        }

      // var convertMinus = function() {
      //     var valeur = $("#textarea").val();
      //     return valeur.toLowerCase();    
      // };
      

      function getRadioElement()
      {
            var value="";
            console.log(radio);
            radio.each(function()
            {
              $(this).change(function()
              {
                //alert("ok non et "+$(this).val());
                value=$(this).val();
                console.log("vdfv"+value);
              });
            });
            return value;
      }
      /*hiddenButton*/

       function hiddenButton()
      {
        return $(this).hide();
      }
       /*END HiddenButton*/
          /*FONCTIONS*/
     
     
         /*SELECTION DE PAIRE*/
        var action=0;
        var click="";
        var un,deux;
        $(document).on('click','.retunPaireButton', function(e)
          { 
             
              e.preventDefault();
              if(action!=1)
              {
                click+=$(this).val()+"=";
               // console.log("click="+click);
                action++;
                console.log($(this));
                un=$(this);
              }
              else if(action==1)
              {
                click+=$(this).val();
                action=0;
                cpt=0;
                //console.log($(this));
                deux=$(this);
                if(checkValue(click)==true)
                {

                      //alertify.success("Ta rÃ©ponse est exacte");
                      
                      var total=$(".retunPaireButton");
                      var a=un.attr("disabled",true);
                      var b=deux.attr("disabled",true);


                      //un.addClass('green').animate({color:'red'}, 2000);
                       //un.removeClass('green');
                       //deux.addClass('green').animate({color:'red'}, 2000);
                       //deux.removeClass('green');

                        un.css("background-color","green").slideUp( 100 ).delay( 500 ).fadeIn( 200 ); 
                        deux.css("background-color","green").slideUp( 100 ).delay( 500 ).fadeIn( 200 );

                        //a.css("background-color","grey")
                        //b.css("background-color","grey")

                        var nombre=$(':disabled');
                        console.log("Elements désactivés"+(nombre.length)-1 +" Elements total="+total.length);
                      if((nombre.length)-1==total.length)
                      {
                        $("#submit").attr("disabled",false);
                        var verif = $('#verify').val();
                        verif.addClass('hide');
                        alertify.success("Ta réponse est exacte");

                      }else
                      {
                         $("#submit").attr("disabled",true);
                      }

                 // console.log(cpt);
                       //alertify.success("Ta rÃ©ponse est exacte");
                      // $("#submit").attr("disabled",false);  
                      //.fadeOut('slow');
                }
                else
                {
                        un.css("background-color","red").slideUp( 300 ).delay( 2000 ).fadeIn( 400 );
                        deux.css("background-color","red").slideUp( 300 ).delay( 2000 ).fadeIn( 400 );
                }

                click="";
              }
              else{
                console.log("valeurfd "+click);
              }
          });

           function checkValue(value)
          {
                
          var bool=false;
          $('.myhidden').each(function()
          {
              if($(this).val()==value)
              {
                   //$("button .myhidden").attr("disabled",true);
                    var i=$(".myhidden").val();
                    //alert(i);
                   // $(i).attr("disabled",true);
                    bool=true;
              }
              
          });
          return bool;
        }




        /*Statement AJAX*/
        var continuer=0;
      var decalage=0;
      var lecon;
      $("#submit").click(function(e)
      {
        e.preventDefault();
       
        decalage=decalage+1;
        lecon=$("#lecon").val();
        //console.log("teste.php?teste="+decalage+"&le="+lecon);

        var url =  "teste.php?teste="+decalage+"&le="+lecon;
        //console.log(url);
        $.ajax({
          url: "teste.php?teste="+decalage+"&le="+lecon,
          type: "GET",
          dataType: 'text',
          beforeSend: function()
          {
            //$("#submit").attr("disabled",true)
          },
          success:function(data)
          {
            console.log(data);
            if(data!="false")
            {
              //$("#submit").attr("disabled",true);
              $("#Verifier").attr("disabled",false);
              $("#nextquestion").html(data);
              console.log("continuer:"+continuer++);
            }
            else
            { 
               <?php 
                     if (is_logged_in()) {
                           $terminer=$db->query("SELECT exo.question as question, lecon.id as id, lecon.terminer as teminer, lecon.griser as griser FROM exo, lecon");
                           $terminer->execute();
                           $terminer=$terminer->fetchAll(); 

                          $idLeconEnCour=$terminer[0]['id'];
                          if ($idLeconEnCour){
                             for ($i=0; $i<count($terminer) ; $i++){ 
                               $allQuestion=$terminer[$i]['question'];//toutes les question pour la première leçon
                                if($allQuestion == 0){
                                     $query=$db->prepare("UPDATE lecon SET terminer = '1' and griser = '0' WHERE id=lecon.id");
                                     $query->execute(['id' => $terminer[$i]['id']]);

                                }
                             }
                         }     
                     }
                      
                      ?> 
              var url = "http://localhost/EGboasouklou_06_05_2017";
               //bravo vous avez brillamment réussi la leçon 1 
              window.location.href = url+"/succes.php";
             // $("#nextprogram").html('<button type="button"  class="btn btn-success" style="margin-top: 15px"><a href="base.php">Leçon Suivante</a></button>')
             //var vv="<?php echo $_GET['le']; ?>";
              console.log("Voici "+vv);
              $("#nextquestion").html('');
              $("#reponseText").html('');
              $(".myadbtn").html('');
            }
          },
          error: function(data)
          {
            console.log("non"+data);          
          }
        });
      //$("#submit").attr("disabled",true);
      });/*END statement Ajax*/
});

</script>