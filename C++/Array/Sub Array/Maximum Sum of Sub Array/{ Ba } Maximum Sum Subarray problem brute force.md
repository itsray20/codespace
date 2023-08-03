The given code is an implementation of the Maximum Sum Subarray problem using a brute force approach. The problem aims to find the subarray (contiguous elements) within an array that has the maximum sum.

Here's a step-by-step explanation of how the code works:

1. The code begins by declaring the necessary variables: `n` for the size of the array, `i`, `j`, and `k` as loop variables, and an integer array `array` of size `n` to store the input elements.

2. The user is prompted to enter the size of the array (`n`), and then the elements of the array are inputted one by one.

3. The variable `maxsum` is initialized with the minimum possible integer value using the `INT_MIN` constant. This variable will store the maximum sum found so far.

4. The code uses three nested loops to iterate through all possible subarrays. The outer loop (`i`) selects the starting index of the subarray, the middle loop (`j`) selects the ending index of the subarray, and the inner loop (`k`) calculates the sum of elements within the selected subarray.

5. Inside the innermost loop, a variable `sum` is initialized to 0. It then iterates from the starting index (`i`) to the ending index (`j`), and at each iteration, adds the element at the current index (`k`) to the `sum`.

6. After calculating the sum of the current subarray, the `maxsum` variable is updated using the `max` function, which compares the current `sum` with the `maxsum` and selects the larger value. This ensures that `maxsum` always contains the maximum sum found so far.

7. After the completion of all the nested loops, the maximum sum of a subarray is stored in the variable `maxsum`.

8. Finally, the maximum sum of the subarray is printed as output.

The brute force approach used in this code has a time complexity of O(n^3) because of the three nested loops. It exhaustively checks all possible subarrays and calculates their sums. While this approach works correctly, it is not efficient for large input sizes since it performs redundant calculations.

There exist more efficient algorithms, such as Kadane's algorithm, which can solve the Maximum Sum Subarray problem in linear time (O(n)). These algorithms utilize dynamic programming or divide-and-conquer techniques to avoid unnecessary calculations and achieve better performance.


code : #Array 

#include <climits>
#include <iostream>
using namespace std;

int main() {
  int n, i, j, k;
  cout << "Size : ";
  cin >> n;
  int array[n];
  cout << "Elements : ";
  for (i = 0; i < n; i++) {
    cin >> array[i];
  }
  int maxsum = INT_MIN;
  for (i = 0; i < n; i++) {
    for (j = i; j < n; j++) {
      int sum = 0;
      for (k = i; k <= j; k++) {
        sum += array[k];
      }
      maxsum = max(maxsum, sum);
    }
  }
  cout << "Maximum Sum of Subarray : " << maxsum;
}
