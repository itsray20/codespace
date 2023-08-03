This  code is an extension of the previous code. It takes the input for the 2D array (matrix) and then asks the user to enter an element to search for in the matrix. The code then performs a search for the given element and prints its position (row and column) if found. Let's explain the logic step-by-step:

1. The code starts similarly with the previous code by including the necessary header file `iostream` and using the `namespace std;`.

2. Inside the `main()` function, the additional variable `key` is declared, which will store the element that the user wants to search for in the matrix.

3. The user is prompted to enter the size of the matrix (number of rows and columns) similar to the previous code.

4. A 2D array `array[n][m]` is declared to store the elements of the matrix, just like before.

5. The code then prompts the user to input the elements of the matrix row by row, same as in the previous code.

6. After receiving all the input elements, the code asks the user to input the element (`key`) they want to find in the matrix.

7. The code then starts searching for the element `key` in the matrix using nested loops. It iterates over each element of the matrix and checks if it matches the `key`. If a match is found, it prints the position of the element (i.e., the row and column where the element is located) and sets the `flag` variable to `true`.

8. If the element is found (`flag == true`), the code prints the element itself at the last position (`array[i][j]`) where the loop exited. However, this is incorrect, as the `i` and `j` variables will hold the value of the last position where the loop stopped searching.

9. Finally, the code checks the value of the `flag` variable and prints whether the element is found or not.

The logical flow of the code is as follows:
- The user is asked to provide the size of the matrix (number of rows and columns) and enters the elements of the matrix.
- The user is prompted to enter an element they want to find in the matrix (`key`).
- The code searches for the element `key` in the matrix using nested loops, and if it finds the element, it prints its position (row and column).
- The code then incorrectly prints the value of the element at the last position (`array[i][j]`), which is not guaranteed to be the found element.
- Finally, the code prints whether the element is found or not based on the value of the `flag` variable.

To correctly print the found element, you can modify the code to store the row and column of the found element and print its value after the loop completes. Additionally, consider handling cases where the element is not found more effectively.


Code : #2D_Array

#include <iostream>
using namespace std;

int main() {

  int i, j, n, m, key;
  cout << "\nSize of Row : ";
  cin >> m;
  cout << "Size of Column : ";
  cin >> n;

  int array[n][m];
  cout << "\nMatrix Input of Table : \n\n";
  for (i = 0; i < n; i++) {
    for (j = 0; j < m; j++) {

      cin >> array[i][j];
    }
  }

  cout << "\nElement which have to Find : ";
  cin >> key;

  int flag = false;
  for (i = 0; i < n; i++) {
    for (j = 0; j < m; j++) {
      if (array[i][j] == key) {
        cout << i << " " << j;
        flag = true;
      }
    }
  }
  cout << endl;
  if (flag == true) {
    cout << "Element is Found on :" << array[i][j];
  } else {
    cout << "Element Not Found";
  }
}
