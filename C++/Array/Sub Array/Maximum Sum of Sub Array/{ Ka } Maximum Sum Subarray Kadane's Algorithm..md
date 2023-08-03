Kadane's Algorithm is a popular algorithm used to find the maximum subarray sum of a given array. The algorithm efficiently handles both positive and negative elements in the array and guarantees a linear runtime complexity. Let's go through the logical explanation of how the algorithm works step by step:

1. Read the input: The program first reads the size of the array `n` and then reads `n` elements from the user, storing them in the `array` variable.

2. Initialize variables: The algorithm uses three variables: `currentsum`, `maxsum`, and the loop variables `i`.

   - `currentsum`: This variable keeps track of the sum of the subarray ending at the current index `i`. It represents the maximum sum subarray ending at or before the current element.
   - `maxsum`: This variable keeps track of the maximum sum subarray found so far. It represents the global maximum sum subarray across all iterations.
   - `i`: This variable is used in the loop to iterate over each element of the array.

3. Traverse the array: The algorithm uses a single loop to iterate through each element of the array.

4. Update `currentsum`: For each element, `currentsum` is updated as follows:
   - Add the current element to the `currentsum`.
   - If `currentsum` becomes negative after adding the current element, set `currentsum` to 0. This is because any negative sum subarray will not be a part of the maximum sum subarray.

5. Update `maxsum`: After updating the `currentsum`, compare it with the current `maxsum`. If the `currentsum` is greater than `maxsum`, update `maxsum` with the value of `currentsum`. This ensures that `maxsum` always stores the maximum subarray sum encountered so far.

6. Repeat steps 4 and 5: The loop continues until all elements of the array are processed. At the end of the loop, `maxsum` will store the maximum subarray sum for the entire array.

7. Output the result: Finally, the program prints the `maxsum`, which represents the maximum subarray sum found using Kadane's Algorithm.

The reason Kadane's Algorithm works is that it takes advantage of the fact that if the sum of a subarray becomes negative, then including that subarray in any other future subarray will only decrease its sum. Therefore, it is better to start a new subarray from the next element onwards, as including the negative-sum subarray will not help in finding the maximum sum subarray.

By maintaining the `currentsum` and `maxsum` as described above, the algorithm efficiently identifies the maximum subarray sum without having to check all possible subarrays, resulting in a time complexity of O(n) where n is the number of elements in the array.


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

  int currentsum = 0;
  int maxsum = INT_MIN;

  for (i = 0; i < n; i++) {
    currentsum += array[i];
    if (currentsum < 0) {
      currentsum = 0;
    }
    maxsum = max(maxsum, currentsum);
  }
  cout << "Maximum Sub Array Sum Kadane's Algo : "<<maxsum;
}