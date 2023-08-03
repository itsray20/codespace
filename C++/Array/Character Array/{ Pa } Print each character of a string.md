This C++ code demonstrates how to use a character array to print each character of a string and terminate the printing when it reaches the null terminator ('\0'). Let's break down the code step by step:

1. `#include <iostream>`: This is a preprocessor directive that includes the input/output stream library, allowing you to use functions like `cout` and `endl`.

2. `using namespace std;`: This line is to avoid having to prefix standard library functions with `std::`, making the code more concise. It's considered good practice for small programs, but in larger ones, it's generally better to avoid this and explicitly use the `std::` prefix.

3. `int main() { ... }`: This is the main function where the execution of the program starts.

4. `char array[100] = "rohan";`: This line declares a character array named `array` with a size of 100 elements. It also initializes it with the string "rohan". The array can store up to 100 characters, but since the string "rohan" only contains five characters (plus a null terminator), the rest of the array will be filled with null characters '\0'.

5. `int i = 0;`: This declares and initializes an integer variable `i` with the value 0. This variable will be used to iterate through the characters of the `array` one by one.

6. `while (array[i] != '\0') { ... }`: This is a while loop that will continue iterating through the elements of the `array` until it encounters a null terminator '\0'. In C and C++, strings are represented as arrays of characters, and they must be null-terminated, meaning the last character must be '\0' to indicate the end of the string.

7. `cout << array[i] << endl;`: Inside the while loop, this line prints the character at the current index `i` of the `array` using `cout`. `array[i]` gives the character at index `i`, and `endl` is used to insert a newline after each character is printed.

8. `i++;`: After printing the character at index `i`, the value of `i` is incremented by 1 to move to the next character in the array.

9. After the while loop, the program reaches the end of the `main()` function, and the program terminates.

So, when you run this code, it will print each character of the string "rohan" on a new line until it reaches the null terminator, at which point the loop will stop, and the program will terminate. The output of the program will be:

```
r
o
h
a
n
```

The null terminator character ('\0') is not printed because the loop stops before reaching it.


code : #Character_Array 

#include <iostream>
using namespace std;

int main() {

  char array[100]="rohan";
  int i=0;

  while(array[i] != '\0')
    {
      cout<<array[i]<<endl;
      i++;
    }
}