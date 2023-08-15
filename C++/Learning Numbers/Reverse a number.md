Suppose the user enters `n = 12345`.

- In the first iteration of the loop:
    
    - `lastdigit = n % 10 = 12345 % 10 = 5`
    - `reverse = reverse * 10 + lastdigit = 0 * 10 + 5 = 5`
    - `n = n / 10 = 12345 / 10 = 1234` (removing the digit 5)
- In the second iteration of the loop:
    
    - `lastdigit = n % 10 = 1234 % 10 = 4`
    - `reverse = reverse * 10 + lastdigit = 5 * 10 + 4 = 54`
    - `n = n / 10 = 1234 / 10 = 123` (removing the digit 4)
- The process continues until all digits of the original number are reversed.

------------------------------------------------------------------------

Logic code : 

#include <iostream>
using namespace std;
int main() {

  int i, n;

  cin >> n;
  int reverse = 0;

  for (i = 1; i <= n; i++) {
    int lastdigit = n % 10;
    reverse = reverse * 10 + lastdigit;
    n = n / 10;
  }
  cout << reverse << endl;
}