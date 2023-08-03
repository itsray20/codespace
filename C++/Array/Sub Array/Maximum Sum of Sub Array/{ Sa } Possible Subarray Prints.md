This program takes an array as input from the user and prints all possible subarrays of the given array. Let's go through the code step by step:

1. Declaration and Initialization:
   - `int i, j, n;`: These variables are declared to be used as loop counters and for storing the size of the array.
   - `cout << "Array Size :";`: This line displays the message asking the user to enter the size of the array.
   - `cin >> n;`: The user inputs the size of the array, which is stored in the variable `n`.
   - `int array[n];`: An integer array of size `n` is declared to store the elements entered by the user.

2. Input of Array Elements:
   - `cout << "Array Elements :";`: This line displays the message asking the user to enter the array elements.
   - `for (i = 0; i < n; i++)`: A loop is used to iterate `n` times, allowing the user to input `n` elements for the array.
   - `cin >> array[i];`: The user inputs each element of the array, which is stored in the corresponding index of the array.

3. Printing Subarrays:
   - The program uses three nested loops to generate and print all possible subarrays:
     - The first loop (`for (i = 0; i < n; i++)`) determines the starting index of the subarray.
     - The second loop (`for (j = i; j < n; j++)`) determines the ending index of the subarray.
     - The third loop (`for (int k = i; k <= j; k++)`) is used to print the elements between the starting and ending indices of the subarray.

4. Output:
   - `cout << array[k] << " ";`: This line prints each element of the subarray on the same line, separated by a space.
   - `cout << endl;`: After printing all the elements of a subarray, a newline character is printed to move to the next line.

The program follows the nested loop approach to generate and print all possible subarrays of the given array. Each subarray is printed on a separate line. The outermost loop determines the starting index, the second loop determines the ending index, and the innermost loop is used for printing the elements between the starting and ending indices.


code : #Array

#include <iostream>
using namespace std;

int main() {

  int i, j, k, n;
  cout << "Size : ";
  cin >> n;
  int array[n];
  cout << "Elements : ";
  for (i = 0; i < n; i++) {
    cin >> array[i];
  };

  for (i = 0; i < n; i++) {
    for (j = i; j < n; j++) {
      for (k = i; k <= j; k++) {
        cout << array[k] << " ";
      }
      cout << endl;
    }
  }
}