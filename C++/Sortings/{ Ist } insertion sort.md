Let's go through the logical explanation of how insertion sort works.

1. User Input:
The code begins by asking the user to enter the size of the array (`n`) and then proceeds to create an array of that size (`int array[n]`). It then prompts the user to enter the elements of the array.

2. Sorting Process:
The sorting process begins with a loop that iterates from `i = 1` to `n-1`. The loop variable `i` represents the index of the current element to be inserted into the sorted portion of the array.

3. Selecting Current Element:
Inside the loop, the code assigns the value of `array[i]` to the variable `current`. This element will be compared and inserted into its correct position in the sorted part of the array.

4. Finding Insertion Position:
Another loop is initiated with the variable `j` set to `i - 1`. This loop helps find the correct position for the `current` element in the sorted portion of the array. The loop continues as long as `array[j]` is greater than `current` and `j` is not negative.

5. Shifting Elements:
Within the inner loop, if `array[j]` is greater than `current`, it means we need to shift elements to make room for the `current` element. The code moves `array[j]` to `array[j + 1]` to shift it one position to the right.

6. Inserting Current Element:
After finding the correct position, the code assigns the `current` element to `array[j + 1]`. This step inserts the `current` element into its sorted position.

7. Repeat for Remaining Elements:
The outer loop continues, and the above steps are repeated for the remaining unsorted elements (`i = 2` to `n-1`). With each iteration, one more element is added to the sorted portion of the array.

8. Output Sorted Array:
Once the sorting process is complete, the code displays the sorted array by iterating through the elements and printing them in order.

9. End of the Program:
The program execution ends, and the sorted array is displayed to the user.

In summary, insertion sort works by dividing the array into two parts: a sorted portion and an unsorted portion. It iteratively takes one element at a time from the unsorted portion and inserts it into its correct position in the sorted portion by shifting larger elements to the right. This process is repeated until all elements are in their proper sorted positions, resulting in a sorted array.


code : #Sorting_Algorithm 

#include <iostream>
using namespace std;

int main() {

  int i, j, n;
  cout << "Array Size :";
  cin >> n;
  int array[n];
  cout << "Array Elements :";
  for (i = 0; i < n; i++) {
    cin >> array[i];
  }

  for (i = 1; i < n; i++) {

    int current = array[i];

    int j = i - 1;

    while (array[j] > current && j >= 0) {
      array[j + 1] = array[j];
      j--;
    }
    array[j + 1] = current;
  }
  cout << "Sorted Array : ";
  for (i = 0; i < n; i++) {
    cout << array[i] << " ";
  }
}

