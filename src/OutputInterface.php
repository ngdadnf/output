<?php

declare(strict_types=1);

namespace Output;

interface OutputInterface
{
  /**
   * Method finish work as same get()
   * Returns the previous data value with original dataType, Its used to get prev value
   * 
   * @return mixed
   */
  public function finish();

  /**
   * Prints human-readable information about a variable
   * 
   * @param bool $returns
   * @return mixed
   */
  public function print(bool $returns = false);

  /**
   * Equivalent to exit/die Stop next execute PHP Code
   * @return void
   */
  public function die();

  /**
   * Returns always all types of data to string format, Its used to get data only String format
   * Don't get output with original dataType,
   * 
   * @return string
   */
  public function toString() : string;
}
?>