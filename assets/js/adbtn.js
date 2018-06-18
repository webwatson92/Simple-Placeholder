

              var choosen = false ;
              $('p.adbtn button').click(function(){
                if(choosen) return ;
                var sep = '' ;
                sep = $('#test').val() ? '' : '' ;
                $('#test').val($(this).val()) ;
                $(this).remove() ;
                choosen = true ;
              }) ;

