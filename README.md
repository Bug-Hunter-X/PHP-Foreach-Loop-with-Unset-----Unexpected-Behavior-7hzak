# PHP Foreach Loop with Unset() - Unexpected Behavior
This repository demonstrates an uncommon bug in PHP related to modifying an array during a foreach loop using the unset() function.  Modifying the array during iteration can lead to unexpected behavior because the internal pointer of the foreach loop might skip elements after an element is removed.

The `bug.php` file contains the buggy code. The `bugSolution.php` file offers a solution to avoid this issue.

## How to Reproduce
1. Clone this repository.
2. Run `php bug.php` to observe the unexpected output.
3. Run `php bugSolution.php` to see the corrected behavior.

## Solution
The solution involves iterating over a copy of the array or using a different approach that doesn't modify the array during iteration.