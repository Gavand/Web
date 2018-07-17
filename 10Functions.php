<!DOCTYPE html>
<!-- Updated version, 4 February 2017 -->
<html><head><title>project 3</title></head><body><pre>
<?php

# Basic instructions (see assignment doc for full instructions):
# --------------------------------------------------------------
# 1. Write ten PHP functions meeting the requirements below; fill in the
# function definitions.
# This will introduce you to PHP's functions, assert, selection, repetition,
# arrays, and file processing.
# The code is quasi-tested with a few test cases with output.
#
# 2. Write more asserts to test your code.
# We will have many more asserts when grading.
# It is important to be able to write your own tests.
#
# Project credit:  Rick Mercer
#
# Programmer: Gavin Andrews




#  1) howSwedish
#  ABBA is a band, they have many songs including Dancing Queen, and
#  Fernando. ABBA is actually a Swedish band, so if we wanted to find
#  out howSwedish a String is, we could simply find out how many times
#  the String contains the substring "abba". We want to look for this
#  substring in a case insensitive manner. So "abba" counts, and so
#  does "aBbA". We also want to check for overlapping abba's such as
#  in the String "abbAbba" that contains "abba" twice.
#
#  howSwedish("ABBA a b b a") returns 1
#  howSwedish("abbabba!") returns 2
function howSwedish($str) {
}

$first = "abbabba!";

$second = 'ABBA a b b a';
// String $word = 'abba'

if (strpos($first, 'abba') !== false){


assert ( 2 == howSwedish ( 'abbabba' ) );
echo '     howSwedish(abbabba) 2: ' . howSwedish ( 'abbabba' ) . "\n";
}

assert ( 1 == howSwedish ( 'ABBA a b b a' ) );
echo 'howSwedish(ABBA a b b a) 1: ' . howSwedish ( "ABBA a b b a" ) . "\n";



#  2)  mirrorEnds
#  Complete method mirrorEnds that given a string, looks for a mirror
#  image (backwards) string at both the beginning and end of the given string.
#  In other words, zero or more characters at the very beginning of the given
#  string, and at the very end of the string in reverse order (possibly
#  overlapping).  For example, "abXYZba" has the mirror end "ab".
#
#  assert("" == mirrorEnds(""));
#  assert("" == mirrorEnds("abcde"));
#  assert("a" == mirrorEnds("abca"));
#  assert("aba" ==  mirrorEnds("aba"));
function mirrorEnds($str) {
}

echo "mirrorEnds(abcdefcba) abc: " . mirrorEnds ( 'abcdefcba' ) . "\n";
assert ( 'abc' == mirrorEnds ( 'abcdefcba' ) );
echo "   mirrorEnds(zzRSTzz) zz: " . mirrorEnds ( 'zzRSTzz' ) . "\n";



#  3) isStringSorted
#  Given a String, return true if the letters are in ascending order.
#  Note: 'a' < 'b' and '5' < '8'
#  isStringSorted("") returns true
#  isStringSorted("a") returns true
#  isStringSorted("abbcddef") returns true
#  isStringSorted("123456") returns true
#  isStringSorted("12321") returns false
function isStringSorted($str) {
}

echo '  isStringSorted(abcdefg) 1: ' . isStringSorted ( 'abcdefg' ) . "\n";
echo '  isStringSorted(cba) false: ' . isStringSorted ( 'cba' ) . "\n";
assert ( ! isStringSorted ( 'cba' ) );
echo 'isStringSorted(abcddeeff) 1: ' . isStringSorted ( 'abcddeeff' ) . "\n";



#  4) maxBlock
#  Given a string, return the length of the largest "block" in the string.
#  A block is a run of adjacent chars that are the same.
#  maxBlock("hoopla") returns 2
#  maxBlock("abbCCCddBBBxx") returns 3
#  maxBlock("") returns 0
function maxBlock($str) {
}
echo 'maxBlock(abbCCCddBBBxx) 3: ' . maxBlock ( "abbCCCddBBBxx" ) . "\n";
assert ( 3 == maxBlock ( "abbCCCddBBBxx" ) );
echo '          maxBlock(abc) 1: ' . maxBlock ( "abc" ) . "\n";


#  5) isArraySorted
#  Given an array , return true if the element are in ascending order.
#  Note: 'abe' < 'ben' and 5 > 3
#  Precondition $arr has all the same type of elements
function isArraySorted($arr) {
}

echo 'isArraySorted(array(1, 2, 2, 99) 1: ' . isArraySorted ( array (
    1,
    2,
    2,
    99 ) ) . "\n";
assert ( isArraySorted ( array (
    1,
    2,
    2,
    99 ) ) );
echo 'isArraySorted(array(2, 2, 1) false: ' . isArraySorted ( array (
    2,
    2,
    1 ) ) . "\n";


#  6) numberOfPairs
#  Return the number of times a pair occurs in array. A pair is any two String
#  values that are equal (case sensitive) in consecutive array elements.
#  The array may be empty or have only one element.
#  In both of these cases, return 0.
#
#  numberOfPairs( array('a', 'b', 'c') ) returns 0
#  numberOfPairs( array('a', 'b', 'c', 'a') ) returns 0
#  numberOfPairs( array('a', 'a', 'a') ) returns 2
#  assert(2 == numberOfPairs( array('a', 'a', 'b', 'b' ) ) );
#  numberOfPairs( array ( ) ) returns 0
#  numberOfPairs( array ('a') ) returns 0
#  Precondition: $arr has all the same type of elements
function numberOfPairs($arr) {
}

echo 'numberOfPairs( array(a, a, a) ) 2: ' . numberOfPairs ( array (
    'a',
    'a',
    'a' ) ) . "\n";
echo '       numberOfPairs( array() ) 0: ' . numberOfPairs ( array () ) . "\n";



#  7) frequency
#  Given an  array of integers in the range of 0..10 (like quiz scores),
#  return an array of 11 integers where the first value (at index 0) is the
#  number of 0s in the array argument, the second value (at index 1) is the number
#  of ones in the array and the 11th value (at index 10) is the number of
#  tens in the array. The following assertions must pass.
#
#  Precondition: $arr has valid ints in the range of 0..10
function frequency($arr) {
}

echo "Frequency of 0..10" . "\n";
$arr = frequency ( array (
    1,
    1,
    4,
    4,
    4,
    9,
    9,
    9,
    9,
    10,
    0,
    0,
    0,
    0,
    0 ) );
assert(5, $arr[0]);
assert(1, $arr[10]);
print_r ( $arr ); #  Use print_r to show all array elements




#  8) shiftNTimes
#  Modify array so it is cyclically "left shifted" n times.  Examples below.
#
#  Since you must modify the array argument, you must pass by reference, not
#  by value.  The way to do this in PHP is to precede the parameter with an
#  ampersand (as shown below).  Is this really necessary in PHP?  Experiment
#  and find out.
#
#  Examples:
#  shiftNTimes(array(6, 2, 5, 3), 1) changes the array argument to (2, 5, 3, 6)
#  shiftNTimes(array(6, 2, 5, 3), 2) changes the array argument to (5, 3, 6, 2)
#  shiftNTimes( array(1, 2, 3, 4, 5, 6, 7), 3 )
#                         changes the array argument to ( 4, 5, 6, 7, 1, 2, 3 )
#  shiftNTimes( array(1, 2, 3), 5) changes the array argument to (3, 1, 2)
#  shiftNTimes( array(3), 5) changes the array argument to (3)
function shiftNTimes(& $array, $numShifts) {

}


$arr = array (
    1,
    2,
    3,
    4 );
shiftNTimes ( $arr, 2 );
assert(3 == $arr[0]);
assert(4 == $arr[1]);
echo 'shiftNTimes(array(1, 2, 3, 4),  2)' . "\n";
print_r ( $arr ); # Use print_r to see all array elements on separate lines



#  9) wordsPerLine
#  Complete method wordsPerLine($fileName) such that for every line
#  in the input file specified by $fileName, there is an array of
#  integers where the first element is the number of words on line 1
#  the second array element is the number of elements on the 2nd line
#  of the input file. The input file may have 0 to many lines.  Each
#  line may have 0 to many words. If the input file has these three lines:
#
#  one!
#  one two.
#  one, two, three, and four
#
#  wordsPerLine should return array(1, 2, 5)
#
#  Precondition: each word on a line is separated by exactly one space.
#  Hint:  work smarter, not harder -- make PHP built-ins do most of the work.
#
function wordsPerLine($fileName) {
}

$words = wordsPerLine ( "10Functions.php" );
assert(2 == $words[0]);  # Assuming top of this file is <!DOCTYPE html>
assert(7 == $words[1]);  # Assuming next line is the "updated version" comment.



#  10) saveAshape
#  This method must generate a triangle that is saved to a file.
#  The file named 'outfile' should contain a triangle of height 5.
#
#      x
#     xxx
#    xxxxx
#   xxxxxxx
#  xxxxxxxxx
#
#  with the function call saveAShape ( 5, 'x', 'outfile' );
#  Make sure the leading spaces are correct, the 'x' is used
#  and there are the correct number of characters on each line.
#
#  Technical note:  testing this function might be a small hassle
#  due to file system permissions.  You might need to create
#  a "world-writable" directory in your XAMPP htdocs directory,
#  and write your output there.  Questions and answers on this
#  technical point about file-system permissions are welcome to
#  be public on Piazza.
function saveAShape($n, $ch, $fileName) {
}

?>
</pre></body></html>
