//alert();
$(document).ready(function(){
//alert('Hi');
    /*$('#icing_btn').click(function(){
		//alert( $("input[name='chook']:checked"). val() );
                var base = $(this).val();
                if(base){
                $.ajax({
                type:'POST',
                url:'showsub.php',
                data:'service_id='+base,
                success:function(html){
                    $('#icing').html(html);
					$('#base').hide();
                    }
                }); 
            }
            else{
                $('#icing').html('');
            }       
            });*/
		$('#icing_chocolatebase').hide();
		$('#icing_strawberrybase').hide();
		$('#topping_cc').hide();
		$('#topping_cs').hide();
		$('#topping_sc').hide();
		$('#topping_ss').hide();
		$('#icing_btn').click(function(){
			//for chocolate base cake
			if($("input[name='chook']:checked"). val() == 0){ 
				$('#base').hide();
				$('#icing_chocolatebase').show();
				$('#icing_strawberrybase').hide();
			}
			//for strawbery base cake
			if($("input[name='chook']:checked"). val() == 1){
				$('#base').hide();
				$('#icing_strawberrybase').show();
				$('#icing_chocolatebase').hide();
			}
			
		});
		//topping for chocolate base cake
		$('#topping_cc_btn').click(function(){
			//for chocolate base chocolate icing
			if($("input[name='chook']:checked"). val() == 2){ 
				$('#base').hide();
				$('#icing_chocolatebase').hide();
				$('#icing_strawberrybase').hide();
				$('#topping_cc').show();
			}
			//for chocolate base strawberry icing
			if($("input[name='chook']:checked"). val() == 3){
				$('#base').hide();
				$('#icing_strawberrybase').hide();
				$('#icing_chocolatebase').hide();
				$('#topping_cs').show();
			}
		});
		
		//topping for strawberry base cake
		$('#topping_cs_btn').click(function(){
			//for chocolate base chocolate icing
			if($("input[name='chook']:checked"). val() == 4){ 
				$('#base').hide();
				$('#icing_chocolatebase').hide();
				$('#icing_strawberrybase').hide();
				$('#topping_sc').show();
			}
			//for chocolate base strawberry icing
			if($("input[name='chook']:checked"). val() == 5){
				$('#base').hide();
				$('#icing_strawberrybase').hide();
				$('#icing_chocolatebase').hide();
				$('#topping_ss').show();
			}
		});
		
		
		
    });

