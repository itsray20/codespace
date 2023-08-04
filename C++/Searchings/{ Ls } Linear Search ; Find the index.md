This code demonstrates a linear search algorithm implemented in C++ to find the index of a given key element in an array.

The program begins by including the necessary header file, `iostream`, which allows input and output operations. It then uses the `using namespace std;` directive to avoid repeatedly typing `std::` before standard library functions.

The `linear` function is defined, which takes three arguments: `array` (an integer array), `n` (the size of the array), and `key` (the element to be searched). This function performs a linear search by iterating through each element of the array. If the current element is equal to the key, it returns the index of that element. If the key is not found after iterating through the entire array, it returns 0.

The `main` function is where the user interacts with the program. It prompts the user to enter the size of the array (`n`) and creates an integer array of that size, named `array`. It then uses a loop to take input from the user for each element of the array.

After populating the array, the program prompts the user to enter the key they want to search for. It then calls the `linear` function, passing the array, size, and key as arguments. The returned value, which represents the index of the key in the array (or 0 if the key is not found), is printed to the console.

In summary, this program allows the user to enter an array, and then searches for a specified key within that array using a linear search algorithm.

code : #Searching_Algorithm 

#include <iostream>

using namespace std;

int linear(int array[], int n, int key) {

  for (int i = 0; i < n; i++) {

    if (key == array[i]) {
      return i;
    }
  }
  return 0;
}
int main() {

  int n, i;
  cin >> n;

  int array[n];

  for (i = 0; i < n; i++) {
    cout << i << " : ";
    cin >> array[i];

    cout << endl;
  }
  cout << endl;

  int key;
  cout << "Enter The Key : ";
  cin >> key;
  cout << endl;

  cout << linear(array, n, key);
}
