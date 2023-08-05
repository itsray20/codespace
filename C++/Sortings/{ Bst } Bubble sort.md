Bubble sort is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order. The pass through the list is repeated until the list is sorted.

Here's how the logic of the bubble sort algorithm works:

1. Start by defining the variables `i`, `j`, and `n`. `i` and `j` will be used as loop counters, and `n` will store the size of the array.

2. Prompt the user to enter the size of the array and read the value into the variable `n`.

3. Create an integer array `array` of size `n` to store the elements.

4. Prompt the user to enter the elements of the array one by one using a loop that iterates `n` times. Read each element and store it in the corresponding index of the `array` (e.g., `array[i]`).

5. Initialize a variable `counter` to 1. This variable will keep track of the number of passes performed during the sorting process.

6. Enter a loop that continues until `counter` is less than `n`.

7. Inside the loop, use another loop to iterate through the array from the first element to the (n - counter)th element. In each iteration, compare adjacent elements `array[i]` and `array[i + 1]`.

8. If `array[i]` is greater than `array[i + 1]`, swap their positions using a temporary variable `temp`. This places the larger element towards the end of the array.

9. Increment `counter` by 1 to mark the completion of one pass through the array.

10. Repeat steps 7-9 until the outer loop condition (`counter < n`) is no longer true. This ensures that the largest elements "bubble" towards the end of the array after each pass.

11. After sorting is complete, output the sorted array by iterating through the array and printing each element separated by a space.

The bubble sort algorithm works by repeatedly moving larger elements towards the end of the array through consecutive swaps. This process is similar to the movement of bubbles in a liquid, hence the name "bubble sort." At each pass, the largest element "bubbles" up to its correct position in the sorted array. The algorithm guarantees that after `n-1` passes, the array will be sorted in ascending order.

Note that bubble sort is not an efficient sorting algorithm for large lists, as its average and worst-case time complexity is O(n^2). However, it is simple to understand and implement, making it useful for educational purposes and small lists.

code : #Sorting_Algorithm 

#include <iostream>
using namespace std;

int main() {
  int i, j, n;
  cout << "Array Size : ";
  cin >> n;
  int array[n];

  cout << "Array Element : ";
  for (i = 0; i < n; i++) {
    cin >> array[i];
  }

  int counter = 1;
  while (counter < n) {

    for (i = 0; i < n - counter; i++) {
      if (array[i] > array[i + 1]) {
        int temp = array[i];
        array[i] = array[i + 1];
        array[i + 1] = temp;
      }
    }
    counter++;
  }
  cout << "Sorted Array  : ";
  for (i = 0; i < n; i++) {
    cout << array[i] << " ";
  }
}
