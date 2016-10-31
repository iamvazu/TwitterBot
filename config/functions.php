<?php

  /**
   * Output an array in a clean format
   *
   * @param array $data, an array of mixed data
   * @param bool $isExit, whether to exit the script or not
   *
   * @return array output of the data
   */

   function pr($data, $isExit = false)
   {
   		echo '<pre>'; print_r($data);echo '</pre>';
   		if ($isExit) { die(); }
   }