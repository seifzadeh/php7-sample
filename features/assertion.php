<?php
ini_set('assert.exception', 1);

class CustomError extends AssertionError {}


assert(true, new CustomError('Some error message'));
?>