<?php
$text="*FAQs*

*Q9.* How long will Bitlendo exist?
*Q10.* What are the minimum and maximum I can deposit,reinvest and withdraw?
*Q11.* How much time will it take to see my investment in the Bitlendo Bot?
*Q12.* How long will a withdrawal take?
*Q13.* During my active investment, can I make more investments?
*Q14.* How much interest will I get on my investment?
*Q15.* Which payment method do you accept?
*Q16.* Do you have a calculator?
*Q17.* How can I contact you?
";
$text=urlencode($text);


$inline_button1 = array("text"=>"Q9","callback_data"=>'Q9');
$inline_button2 = array("text"=>"Q10","callback_data"=>'Q10');
$inline_button3 = array("text"=>"Q11","callback_data"=>'Q11');
$inline_button4 = array("text"=>"Q12","callback_data"=>'Q12');
$inline_button5 = array("text"=>"Q13","callback_data"=>'Q13');
$inline_button6 = array("text"=>"Q14","callback_data"=>'Q14');
$inline_button7 = array("text"=>"Q15","callback_data"=>'Q15');
$inline_button8 = array("text"=>"Q16","callback_data"=>'Q16');
$inline_button99 = array("text"=>"Q17","callback_data"=>'Q17');

    $inline_keyboard = [[$inline_button1,$inline_button2,$inline_button3,$inline_button4],
	[$inline_button5,$inline_button6,$inline_button7,$inline_button8],[$inline_button99]];
	
    $keyboard=array("inline_keyboard"=>$inline_keyboard);
    $inkeyboard = json_encode($keyboard);
	$t=$url."sendmessage?chat_id=".$u_id."&parse_mode=markdown&reply_markup=$inkeyboard&text=$text";
	file_get_contents($t);

	?>
