
#include <iostream>
#include <string>
using namespace std;
int main() {

  // Inputs
  string word1 = " Hello ";
  string word2 = " Namaste ";
  cout << "\n";
  // Operations

  cout << " Append :" << endl;
  // method 1
  cout << word1.append(word2) << endl;
  // method 2
  cout << word1 + " & " + word2 << endl;
}