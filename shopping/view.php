<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
    div#price1 {float:left}
    </style>
<head>
<?php 
$Language='1';
include_once  './Include/web_inc.php';
include_once  './Templete/default/Include/Function.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo proview($ID,"products_name",$web_url);?></title>
<meta content="<?php echo proview($ID,"products_key",$web_url);?>" name="keywords">
<meta content="<?php echo proview($ID,"products_des",$web_url);?>" name="description">
<link href="<?php echo $web_url;?>Templete/default/Css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $web_url;?>Templete/default/Css/buttons.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $web_url;?>Templete/default/Js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="<?php echo $web_url;?>Templete/default/Js/jquery.SuperSlide.js" type="text/javascript"></script>
<script src="<?php echo $web_url;?>Templete/default/Js/public.js" type="text/javascript"></script>
<?php echo $webmeate; ?>
<script>

	$(document).ready(function(){
 	$(".fl ul li").hover(function(){$(this).find("ul").first().slideDown(1);});
    $(".fl li").mouseleave(function(){$(this).find("ul").slideUp(1);});
   	$(".pic").hover(function(){$(this).focus().addClass("pics").fadeIn();},function(){$(this).focus().removeClass("pics");});
	$(".binq").hover(function(){$(this).focus().addClass("binqs");},function(){$(this).focus().removeClass("binqs");});
    $(".pic-dt img").hover(function(){$(this).animate({height:'230px',width:'230px'});},function(){$(this).animate({height:'200px',width:'200px'});});
    $(".sc_mid_proview_1_left_2 img").click(function(){$(".sc_mid_proview_1_left_1 img").attr("src",$(this).attr("src"))});
	$(".binq").click(function(){$('html,body').animate({scrollTop: $("#buynow").offset().top}, 1000)});
	 $(".an_01").click(function(){
		 
		 $(".sc_mid_proview_1_left_2").animate({marginTop:'-=70px'},'slow'); 
		 
		 
		 });
		 
	 	 $(".an_02").click(function(){
		 
		 $(".sc_mid_proview_1_left_2").animate({marginTop:'+=70px'},'slow'); 
		 
		 
		 });	 
		 
	});
 

 
</script>

    <?php
    $product_price=proview($ID,'products_price',$web_url);
    ?>
    <script>
        $(function(){
            $(".add").click(function(){
                var t=$(this).parent().find('input[class*=text_box]');
                t.val(parseInt(t.val())+1)
                setTotal();
            })
            $(".min").click(function(){
                var t=$(this).parent().find('input[class*=text_box]');
                t.val(parseInt(t.val())-1)
                if(parseInt(t.val())<0){
                    t.val(0);
                }
                setTotal();
            })
            function setTotal(){
                var s=0;
                $("#tab td").each(function(){
                    s+=parseInt($(this).find('input[class*=text_box]').val())*parseFloat($(this).find('span[class*=price]').text());
                });
                $("#total").html(s.toFixed(2));
                document.getElementById('price').value=s.toFixed(2);
            }
            setTotal();
        })
    </script>

    <script type="text/javascript">
 
$(document).click(function(e){	 
  var $comment = $('#tent'); 
  var $comeml=$('#mail');
  var v_id= $(e.target).attr('id');

	 if (v_id=="tent" &&  $('#tent').val()!="<?php echo $tag_content; ?>(*)" ){
		$comment.animate({height:140});
		$('#anu').show();
		}
	 else  if ($('#tent').val()=="<?php echo $tag_content; ?>(*)" )
	 {
		 $comment.animate({height:30});
		 $('#anu').hide();
		 }



	 if (v_id=="mail" &&  $('#mail').val()!="<?php echo $tag_email; ?>(*)" ){
		$comeml.animate({width:300});
		 
		}
	 else if ($('#mail').val()=="<?php echo $tag_email; ?>(*)" )
	 {
		 $comeml.animate({width:200});
		  
		 } 	 

}) 
 

 
</script>
</head>

<body>
<?php echo $webgoogle; ?>
<div class="sc">

	<!--top-->
    	
 <?php include_once  './Templete/default/Include/Top.php';?>
    
    <!--top end-->
    <div class="cb"></div>
    <!--mid-->
    <div class="sc_mid">
    	<div class="sc_mid_c">
 			<div class="sc_mid_proview_t"><a href="<?php echo $web_url; ?>"><?php echo $tag_home; ?></a> > <?php echo lamcc($Language,proview($ID,"products_category",$web_url),$web_url) ?> > <?php echo proview($ID,"products_name",$web_url);?></div>
            <div class="cb"></div>
            <!--view-->
            <div class="sc_mid_proveiw_1">
            	<div class="sc_mid_proview_1_left"><?php echo proview($ID,"products_Images",$web_url);?></div>
                <div class="sc_mid_proview_1_right">

                	<ul>

                        <div>

                            <form action="./paypal/checkout.php" method="post">
                                <label>
                                <h5><input name="product" type="text" style="border:0px;font-size:40px;font-weight:900" readonly="readonly" value="<?php echo proview($ID,'products_name',$web_url);?>" /></span></h5>
                                </label>
                                <table class="gw_num" id="tab">
                                    <td><span style="color: #ff7800;font-weight: 700;font-size: 20px">Price: </span><span class="price" style="color: #ff7800;font-weight: 700;font-size: 20px"><?php echo proview($ID,'products_price',$web_url)?></span><br />
                                        <span style="font-size: 20px">Qty: </span>
                                        <input style="    background-color: white;
    border: 4px solid #ACB4BE;
    color: #536277;
    display: inline-block;
    float: right;
    font-size: 11px;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;" class="min" name="" type="button" value="-" />
                                        <input style="    background-color: white;
    border: 4px solid #ACB4BE;
    color: #536277;
    display: inline-block;
    float: right;
    font-size: 11px;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;" class="text_box" name="" type="text" value="1" />
                                        <input style="    background-color: white;
    border: 4px solid #ACB4BE;
    color: #536277;
    display: inline-block;
    float: right;
    font-size: 11px;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;" class="add" name="" type="button" value="+" />
                                    </td>
                                    <!--<td>
                                        <input class="binq" type="submit" value="submit"/>
                                    </td>-->
                                    <!--<td><input id="submit" name="submit" type="submit" value="submit"/></td>-->

                                </table>

                                <span style="font-size: 12px;">Total:  </span><input name="price" id="price" type="text" readonly="readonly" style="border: 0px;font-size: 12px" />

                                <!--<span>total:</span><span name="price"></span><label id="total"></label></span></P>-->
                                <input class="button button-primary button-pill button-small" type="submit" value="Buy Now"/>
                            </form>
                        </div>

                    <li><?php echo $tag_Item;?> : <?php echo proview($ID,"products_model",$web_url);?></li>
                    <li><?php echo htmlspecialchars_decode(proview($ID,"products_des",$web_url),ENT_QUOTES);?></li>
                    <li><span class='binq'><a href="#buynow"><?php echo $tag_inquiry;?></a></span> <?php if(!empty(proview($ID,"products_aurl",$web_url))){echo "<span id='amz'><a href='".proview($ID,'products_aurl',$web_url)."'>Buy In Amazon</a>";}?></a></li>
                    <li><script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58c4eabb859efec7"></script>
                        <script>
                            $(document).ready(function(){
//???????
                                var t = $("#buy_box");
//??????1,????
                                $('#min').attr('disabled',true);
                                //??????
                                $("#add").click(function(){
                                    // ????val????????????
                                    t.val(Math.abs(parseInt(t.val()))+1);
                                    if (parseInt(t.val())!=1){
                                        $('#min').attr('disabled',false);
                                    };
                                })
                                //??????
                                $("#min").click(function(){
                                    t.val(Math.abs(parseInt(t.val()))-1);
                                    if (parseInt(t.val())==1){
                                        $('#min').attr('disabled',true);
                                    };
                                })
                            });
                        </script>



                            <!--<input type="text",id="zong"/>-->
                            <!--<li>
                            <script type="text/javascript">
                                var num1=document.getElementById("")
                            </script>
                        </li> -->
                        </form>
                        <div class="addthis_inline_share_toolbox" ></div>
<!-- AddThis Button END --></li>
                    
                    </ul>
                
                </div>
            
            </div>
            <!--view end-->
            <div class="cb"></div>
            <div class="sc_mid_proveiw_2"> 
            <h3><?php echo $tag_proxxms;?></h3> <br>
            <?php echo htmlspecialchars_decode(proview($ID,"products_content",$web_url),ENT_QUOTES);?>
            </div>
            <div class="cb"></div>
            <div class="sc_mid_proveiw_2" >

             <form action="<?php echo $web_url_ger; ?>Include/web_email.php?type=MSG" method="post" name="pl" > <table width="98%" border="0" align="center" id="buynow">
              <tr>
                <td height="40"><h3><?php echo $tag_message;?></h3></td>
              </tr>
                <tr>
                <td height="30" align="left" valign="middle" ><input name="name" type="text" id="name"  value="Name(*)" autocomplete="off" onfocus="if(this.value!='Name(*)'){this.style.color='#333333'}else{this.value='';this.style.color='#333333'}" onblur="if(this.value==''){this.value='Name(*)';this.style.color='#666666'}" class="ly_1" /></td>
               </tr>
              <tr>
                <td height="30" align="left" valign="middle" ><input name="mail" type="text" id="mail"  value="<?php echo $tag_email; ?>(*)" autocomplete="off" onfocus="if(this.value!='<?php echo $tag_email; ?>(*)'){this.style.color='#333333'}else{this.value='';this.style.color='#333333'}" onblur="if(this.value==''){this.value='<?php echo $tag_email; ?>(*)';this.style.color='#666666'}" class="ly_1" /></td>
               </tr>
                <tr>
                <td height="30" align="left" valign="middle" ><input name="tel" type="text" id="tel"  value="tel" autocomplete="off" onfocus="if(this.value!='tel'){this.style.color='#333333'}else{this.value='';this.style.color='#333333'}" onblur="if(this.value==''){this.value='tel';this.style.color='#666666'}" class="ly_1" /></td>
               </tr>      
              <tr>
                <td align="left" valign="middle"> 
                  <textarea name="tent" id="tent" class="ly_2" value="<?php echo $tag_content; ?>" autocomplete="off" onfocus="if(this.value!='<?php echo $tag_content; ?>'){this.style.color='#333333'}else{this.value='';this.style.color='#333333'}" onblur="if(this.value==''){this.value='<?php echo $tag_content; ?>';this.style.color='#666666'}" ><?php echo $tag_content; ?></textarea>  </td>
                </tr>
                  <tr>
                      <td><input  type="text" name="yzm" value="Verification Code(*)" autocomplete="off" onfocus="if(this.value!='Verification Code(*)'){this.style.color='#333333'}else{this.value='';this.style.color='#333333'}" onblur="if(this.value==''){this.value='Verification Code(*)';this.style.color='#666666'}" class="ly_3" id="yzm"><img id="captcha_img" border='1' src='./Include/code.php?r=<?php echo rand(); ?>' onclick="document.getElementById('captcha_img').src='./Include/code.php?r='+Math.random()" style="width:80px; height:23px" align="absmiddle" /></td>
                  </tr>  
                     <tr><td><div  id="anu"><input class='ly_4' type="submit" name="button" id="button" value="<?php echo $tag_inquiry;?>" /><input type="hidden" value="<?php echo $ID;?>" id="PID" name="PID"><input type="hidden" value="<?php echo $Language;?>" name="languageID" id="languageID"></div></td></tr>
           
                                         
                                         
                                         </table>
			</form> 
            
            
             </div>
          <div class="cb"></div>
            
           <div class="sc_mid_proveiw_2" ><h3><?php echo $tag_proxgcp;?></h3><?php echo sjpro($Language, $tag_inquiry,proview($ID,"products_category",$web_url),$web_url); ?></div>
            <div class="cb"></div>
        
        </div>
    
    
    </div>
   <!--mid end-->
<div class="cb"></div>
<!--bot-->
<?php include_once  './Templete/default/Include/Bot.php';?>
<!--bot end-->

</div>

 

</body>
</html>
