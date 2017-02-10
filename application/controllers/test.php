<?php 

class test extends MY_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		
		
	}
	public function test()
	{
$checksum = crc32("sumanraj");
printf("%u\n", $checksum);
		
			echo site_url();
	echo '<br>';
	echo base_url();
	echo '<br>';
	echo current_url();
	echo '<br>';
	echo uri_string();
echo '<br>';
	echo index_page();
	$atts = array(
        'width'       => 800,
        'height'      => 600,
        'scrollbars'  => 'yes',
        'status'      => 'yes',
        'resizable'   => 'yes',
        'screenx'     => 0,
        'screeny'     => 0,
        'window_name' => '_blank'
);

echo anchor_popup('user/gencaptcha', 'Click Me!', $atts);
		echo '<br>';
	
echo $this->input->ip_address();
	echo '<br>';
		echo $this->input->user_agent();
		echo '<br>';
		$string = "Here is a nice text string about nothing in particular.";
echo highlight_phrase($string, "nice text", '<span style="color:#990000;">', '</span>');
		echo '<br>';
		$string = "Here is a simple string of text that will help us demonstrate this function.";
echo word_wrap($string, 12);
		echo '<br>';
		$str = 'this_string_is_entirely_too_long_and_might_break_my_design.jpg';
echo ellipsize($str, 22, .5);
		echo '<br>';
		echo(2==2);
		echo '<br>';
		echo '<br>';
		echo '<br>';
		
	
	echo '=============================================================='.'<br>'.'<br>'.'<br>';
	
	
	$data1 = ['apple','banana','mango','balckberry'];
	$data2 = ['banana','suman','raj','mango'];
	$data1_count = count($data1);
	$data2_count = count($data2);
		//echo $data1_count . $data2_count;
	
	for($i = 0;$i < $data1_count;$i++)
	{
		//echo $i;
		
		for($j = 0; $j < $data2_count;$j++ )
		{
			if($data1[$i] != $data2[$j])
			{
				echo $data1[$i].'<br>';
				
			}
		}
		
	}
	echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		
		
	for($i = 1; $i < 11; $i++)
	{
    echo $i . '<br />';
		}
	echo '=============================================================='.'<br>'.'<br>'.'<br>';
for($i = 10; $i > 0; $i--)
{
    echo $i . '<br />';
}
	
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
	foreach(range(1,10) as $n){
    echo $n . '<br />';
}	
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
	$a = range(0, 10);
function p($a){
    foreach($a as $n){
        echo $n . "<br/>";
    }
}
p($a);
array_pop($a);
p(array_reverse($a));	
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
	function display($val){
    echo $val . '<br />';
}
$values = range(0,10);
$reverse = array_reverse($values);
array_walk($values, 'display');
array_walk($reverse, 'display');	
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		
function is_Power_of_two($n)  
{  
   if(($n & ($n - 1)) == 0)  
    {  
        return "$n is power of 2";  
    }  
   else  
    {  
        return "$n is not power of 2";  
    }  
}  
print_r(is_Power_of_two(4)."\n");  
print_r(is_Power_of_two(36)."\n");  
print_r(is_Power_of_two(16)."\n");  
	echo '=============================================================='.'<br>'.'<br>'.'<br>';
	
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		echo '=============================================================='.'<br>'.'<br>'.'<br>';
		
		
		
	
	
	
	
	
	
	}
	

}


?>