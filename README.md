# Smaller-Element-Count

### Leetcode `Hard` problem https://leetcode.com/problems/count-of-smaller-numbers-after-self/

Given an integer array nums, return an integer array counts where counts[i] is the number of smaller elements to the right of nums[i].

## Solution Complexity

This solution has a time complexity of O(n log n), since each element is inserted into the tree in logarithmic time, and the function processes each element in the array once. This means that the running time of the function is proportional to the size of the input array multiplied by the logarithm of the size of the input array. This should be much faster than the brute force approach, and should be able to handle larger input arrays without exceeding the time limit.
