#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  int w1 = 100;
  cout << "\n";
  // Operations

  cout << "to_string() :\n" << endl;

  cout << "Integer : " << w1 << endl;
  cout << "Including String into integer : " << to_string(w1) + "500" << endl;
}

To convert an integer to a string, we use to_string() function.