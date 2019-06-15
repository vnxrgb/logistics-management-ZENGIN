

  var obj = $('#right');
	var curr=0,slide=1,flag=0;
	var flag2=0,flag3=3;
	var end=0;
  setInterval(function(){slideshow()}, 6000);
  function slideshow() {


		//alert("curr"+curr+"end"+end+"slide"+slide);
		if(end==0)
    {
			$('#circle1-'+slide).css('opacity', '0.3');
			$('#circle2-'+slide).css('opacity', '0.3');
      curr=curr-100;
      slide=slide+1;
			$('#circle1-'+slide).css('opacity', '0.8');
			$('#circle2-'+slide).css('opacity', '0.8');
      flag2=flag2+1;
			if(slide==4)
			{
				end=1;
			}
    }else if(end==1)
		{
			$('#circle1-'+slide).css('opacity', '0.3');
			$('#circle2-'+slide).css('opacity', '0.3');
			curr=curr+100;
			slide=slide-1;
			$('#circle1-'+slide).css('opacity', '0.8');
			$('#circle2-'+slide).css('opacity', '0.8');
			if(slide==1){
				end=0;
			}
		}
		$('.text-container').css({left: curr+'%'});
    $('.image-container').css({left: curr+'%'});

  }
