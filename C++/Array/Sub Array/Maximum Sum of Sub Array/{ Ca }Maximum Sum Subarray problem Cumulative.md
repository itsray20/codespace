This C++ code uses a Cumulative Sum Approach to find the maximum sum of a subarray within a given array. Let's break down the logic step by step:

1. **Input:**
   The code first takes the size of the array `n` as input from the user. It then reads `n` elements into the array `array[]`.

2. **Cumulative Sum Array:**
   A cumulative sum array `currentsum[]` is created to store the cumulative sum of elements in the original array. The idea of a cumulative sum array is to store the sum of elements from the beginning of the array to each index.

   The code iterates through the original array using the variable `i` and calculates the cumulative sum up to the `i`-th index. It stores the result in `currentsum[i]`, where `currentsum[0]` is initialized to 0.

   For example, if the original array is [1, 2, 3, 4], the cumulative sum array would be [0, 1, 3, 6, 10]. Notice that `currentsum[i]` contains the sum of elements from `array[0]` to `array[i-1]`.

3. **Finding the Maximum Sum:**
   The code then initializes a variable `maxsum` to `INT_MIN`, which is the smallest possible integer value. This variable will be used to keep track of the maximum sum found so far.

   It then uses nested loops to calculate the sum of all subarrays and update `maxsum` accordingly. The outer loop iterates from 1 to `n`, representing the end index of the subarray. The inner loop iterates from 0 to the current outer loop index `i`, representing the starting index of the subarray.

   For each subarray, it calculates the sum using the cumulative sum array `currentsum[]`. Since `currentsum[]` already contains the sum of elements up to a particular index, to find the sum of a specific subarray, we subtract the cumulative sum at the starting index from the cumulative sum at the ending index.

   Finally, it compares the calculated sum with the current `maxsum`, and if it is greater, it updates `maxsum` with the new value.

4. **Output:**
   After all iterations, the code will have found the maximum sum of all subarrays, and it outputs this value as `Max Sum (Cumulative Sum Approach):`.

**Example:**
Suppose the user inputs the array `[1, -3, 2, 1, -1]`. The code will calculate the cumulative sum array as `[0, 1, -2, 0, 1, 0]` and find the maximum sum to be `2` (from the subarray `[2, 1]`).

Note: The given code is not the most efficient approach to finding the maximum sum subarray, as it has a time complexity of O(n^2) due to the nested loops. There are more efficient algorithms, like Kadane's algorithm, which can find the maximum sum subarray in O(n) time.

code : #Array 

#include <climits>
#include <iostream>
using namespace std;

int main() {

  int i, j, k, n;

  cout << "Array Size :";
  cin >> n;
  int array[n];
  cout << "Array Elements :";
  for (i = 0; i < n; i++) {
    cin >> array[i];
  }

  int currentsum[n + 1];
  currentsum[0] = 0;
  for (i = 1; i <= n; i++) {
    currentsum[i] = currentsum[i - 1] + array[i - 1];
  }

  int maxsum = INT_MIN;
  for (i = 1; i <= n; i++) {
    int sum = 0;
    for (j = 0; j <= i; j++) {
      sum = currentsum[i] - array[j];
      maxsum = max(maxsum, sum);
    }
  }
  cout << "Max Sum (Cumulative Sum Approach ):" << maxsum;
}
