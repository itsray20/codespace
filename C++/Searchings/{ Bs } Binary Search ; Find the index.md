The binary search algorithm is used to search for a specific element (key) in a sorted array. Here's how the logic of the binary search works step by step:

1. The function `binary` takes three parameters: `array`, which represents the sorted array to search in, `n`, which is the size of the array, and `key`, which is the element to search for.

2. Two variables, `s` and `e`, are initialized to represent the start and end indices of the search range within the array. In this case, `s` is set to 0 (the first index) and `e` is set to `n` (one position beyond the last index).

3. A while loop is used to iteratively search for the key within the search range. The loop continues as long as the start index `s` is less than or equal to the end index `e`.

4. Inside the loop, the mid index is calculated as the average of `s` and `e`, using integer division. This gives the middle index of the current search range.

5. The value at the middle index `mid` is compared with the key. There are three possibilities:
   a. If the value at `mid` is equal to the key, the key is found at index `mid`, so the function returns `mid`.
   b. If the value at `mid` is greater than the key, it means the key must be in the left half of the search range. So, the end index `e` is updated to `mid - 1`, narrowing down the search range to the left half.
   c. If the value at `mid` is less than the key, it means the key must be in the right half of the search range. So, the start index `s` is updated to `mid + 1`, narrowing down the search range to the right half.

6. If the key is not found in the current search range, the loop continues, and the process is repeated with the updated start and end indices.

7. If the loop completes without finding the key, the function returns -1, indicating that the key is not present in the array.

8. In the `main` function, the user is prompted to enter the size of the array and the elements of the array. Then, the user is asked to enter the key to search for.

9. The `binary` function is called with the array, its size, and the key, and the returned index is printed as the position of the key in the array.

That's the logical explanation of the binary search algorithm used in the provided code.


code : #Searching_Algorithm 

#include <iostream>

using namespace std;

int binary(int array[], int n, int key) {
  int s = 0;
  int e = n;

  while (s <= e) {
    int mid = (s + e) / 2;

    if (array[mid] == key) {
      return mid;
    } else if (key < array[mid]) {
      e = mid - 1;
    } else if (key > array[mid]) {
      s = mid + 1;
    }
  }
  return -1;
}

int main() {

  int n, i, key;
  cout << "Array Size : ";
  cin >> n;
  int array[n];
  cout << endl << "Array elements :" << endl;

  for (i = 0; i < n; i++) {
    cout << endl << i << " : ";

    cin >> array[i];
  }
  cout << endl << "Key element : ";

  cin >> key;

  cout << endl << "Key Present on the Position : " << binary(array, n, key);
}